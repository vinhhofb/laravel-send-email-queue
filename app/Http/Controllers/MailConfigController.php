<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailConfig;
use Illuminate\Support\Facades\Validator;

use DB;

class MailConfigController extends Controller
{
    public function add(MailConfig $request)
    {
        DB::table('mail_config')->updateOrInsert(['id' => 1], $request->except('_token'));
        return back();
    }
}
