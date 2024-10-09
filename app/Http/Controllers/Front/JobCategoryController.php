<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Admin\Job_category;
use App\Models\Admin\JobApplication;
use App\Models\Admin\Job;

use Illuminate\Http\Request;
use DB;

class JobCategoryController extends Controller
{
    public function Jobdetail($slug)
    {
        $category_single = DB::table('job_categories')->where('category_slug', $slug)->first();
        if(!$category_single) {
            return abort(404);
        }

        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $job_items = DB::table('jobs')->where('category_id', $category_single->id)->paginate(5);
        $job_items_no_pagi = DB::table('jobs')->orderby('id', 'desc')->get();
        $categories = DB::table('job_categories')->get();
        $jobs = DB::table('jobs')->orderby('created_at', 'desc')->limit(4)->get();
        return view('pages.job_category', compact('g_setting','job_items','job_items_no_pagi','categories','category_single','jobs'));
    }
}