<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Subscriber;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Admin\Order;
use App\Models\Admin\Folder;

use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

     private function formatEarnings(object $data)
    {
        $amountArray = [];
        $monthArray = [];

        foreach ($data as $value) {
            array_push($amountArray, $value->amount);
            array_push($monthArray, $value->month);
        }

        return ['amount' => $amountArray, 'months' => $monthArray];
    }

    private function formatSubscribers(object $data1)
    {
        $amountArray = [];
        $monthArray = [];

        foreach ($data1 as $value) {
            array_push($amountArray, $value->amount1);
            array_push($monthArray, $value->month1);
        }

        return ['amount1' => $amountArray, 'months1' => $monthArray];
    }

    public function index()
    {

        /*-------------------------------------*/
        // Fetch data from the Subscriber model
        $subscriber = Subscriber::select('subs_active', 'created_at')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('subs_active', 'created_at')
            ->get();

        $months1 = Subscriber::select(
            \DB::raw('MIN(created_at) AS created_at'),
            \DB::raw('sum(subs_active) as `amount1`'),
            \DB::raw("DATE_FORMAT(created_at,'%M') as month1")
        )
            ->where('created_at', '>', \Carbon\Carbon::now()->startOfYear())
            ->orderBy('created_at')
            ->groupBy('month1')
            ->get();
        $subscriber1 = $this->formatSubscribers($months1);
        /*-------------------------------------*/

        // ---------Blog -----
        // Fetch the count of blogs by each category
           $blog = Blog::select('categories.category_name', 'blogs.category_id')
            ->join('categories', 'categories.id', '=', 'blogs.category_id')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('categories.category_name', 'blogs.category_id')
            ->limit(10)
            ->get();

            // earnings
            $months = Order::select(
            \DB::raw('MIN(created_at) AS created_at'),
            \DB::raw('sum(paid_amount) as `amount`'),
            \DB::raw("DATE_FORMAT(created_at,'%M') as month")
        )
            ->where('created_at', '>', \Carbon\Carbon::now()->startOfYear())
            ->orderBy('created_at')
            ->groupBy('month')
            ->get();
        $earnings = $this->formatEarnings($months);
        //Jobs
        $popular_countries = DB::table('jobs')
            ->select('job_location', DB::raw('count(*) as total'))
            ->orderBy('total', 'desc')
            ->groupBy('job_location')
            ->limit(10)
            ->get();
        // folders
            $folders = DB::table('folders')
            ->select('name', DB::raw('count(*) as total'))
            ->orderBy('total', 'desc')
            ->groupBy('name')
            ->limit(10)
            ->get();


            $filesD = Folder::select('folders.name', 'files.folder_id')
            ->join('files', 'folders.id', '=', 'files.folder_id')
            ->selectRaw('COUNT(*) as t')
            ->groupBy('folders.name', 'files.folder_id')
            ->limit(10)
            ->get();

        // orders table
        $latest_earnings = DB::table('orders')->latest()->take(5)->get();
        // latest jobs
        $latest_jobs = DB::table('jobs')->latest()->take(10)->get();

            return view('admin.home', compact('subscriber','blog','earnings','popular_countries','subscriber1','latest_earnings','latest_jobs','folders','filesD'));  

        //return view('admin.home');
    }
}