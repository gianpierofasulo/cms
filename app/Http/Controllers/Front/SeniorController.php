<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SeniorController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $seniors = DB::table('page_senior_items')->where('id', 1)->first();
        $senior = DB::table('senior_managements')->paginate(8);

        return view('pages.senior', compact('seniors','g_setting','senior'));
    }

    public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $senior_detail = DB::table('senior_managements')->where('slug', $slug)->first();
        if(!$senior_detail) {
            return abort(404);
        }
        $senior = DB::table('senior_managementss')->get();
        return view('pages.senior_detail', compact('g_setting','senior_detail','senior'));
    }
     public function ceo()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $seniors = DB::table('senior_managements')->where('id', 1)->first();
        $ceo = DB::table('senior_managements')->paginate(1);
         //$seniors = DB::table('page_senior_items')->where('id', 1)->first();

        return view('pages.ceo', compact('ceo','g_setting','seniors'));
    }
}
