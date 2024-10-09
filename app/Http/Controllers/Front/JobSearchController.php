<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class JobSearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->method() == 'GET') 
        {
            return abort(404);
        }

        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $search_string = $request->search_string;
        $search_string_filter = '%'.$search_string.'%';

        $job_items = DB::table('jobs')->orderby('id', 'desc')->where('job_title','like',$search_string_filter)->orWhere('job_description_short','like',$search_string_filter)->get();
        $job_items_no_pagi = DB::table('jobs')->orderby('id', 'desc')->get();
        $categories = DB::table('job_categories')->get();

        return view('pages.job_search_result', compact('g_setting','search_string','categories','job_items_no_pagi','job_items'));
    }
}
