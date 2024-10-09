<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = DB::table('sliders')->get();
         $counter = DB::table('counters')->limit(4)->orderBy('created_at','desc')->get();
        $page_home = DB::table('page_home_items')->where('id',1)->first();
        $why_choose_items = DB::table('why_choose_items')->get();
        $services = DB::table('services')->get();
        $testimonials = DB::table('testimonials')->get();
        $projects = DB::table('projects')->get();
        $partners = DB::table('partners')->get();
        $branches = DB::table('branches')->get();
        $senior_management = DB::table('senior_managements')->get();
        $documents = DB::table('documents')->get();

        $about_us_items = DB::table('page_about_items')->get();
        $team_members = DB::table('team_members')->get();
        $blogs = DB::table('blogs')->get();
        return view('pages.index', compact('sliders','page_home','why_choose_items','services', 'testimonials','projects','team_members','blogs','partners','documents','branches','senior_management','about_us_items','counter'));
    }
}