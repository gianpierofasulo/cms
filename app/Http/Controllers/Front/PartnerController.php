<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PartnerController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $partners = DB::table('partners')->where('id', 1)->first();
        return view('pages.partners', compact('partners','g_setting'));
    }
}


