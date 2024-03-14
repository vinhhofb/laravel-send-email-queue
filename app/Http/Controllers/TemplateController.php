<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\Template;

class TemplateController extends Controller
{
    public function add(Template $request)
    {
        DB::table('template')->updateOrInsert(['id' => 1], $request->except('_token'));
        
        return back();
    }
}
