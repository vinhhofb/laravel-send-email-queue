<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailSend;
use App\Jobs\SendEmail;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $customers = DB::table('customers')->orderBy('id', 'desc')->get();
        $template = DB::table('template')->first();
        $mailConfig = DB::table('mail_config')->first();
        $process = DB::table('process')->orderBy('id', 'desc')->get();
   
        return view('Index',[
            'customers' => $customers,
            'template' => $template,
            'mailConfig' => $mailConfig,
            'process' => $process
        ]);
    }
    public function sendMail(MailSend $request)
    {
        $processData = [];
        foreach ($request->list_email as $key => $value) {
           array_push($processData, [
            'email' => $value,
            'status' => '0'
           ]);
        };


        DB::table('process')->insert($processData);
        SendEmail::dispatch();
        return back();
    }
}
