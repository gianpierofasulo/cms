<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DeveloperController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $developers = DB::table('developers')->where('id', 1)->first();
        return view('pages.developer', compact('developers','g_setting'));
    }
}


