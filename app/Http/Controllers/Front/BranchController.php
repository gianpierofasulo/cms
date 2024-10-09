<?php


namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BranchController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $branch = DB::table('page_branch_items')->where('id', 1)->first();
        $branch_items = DB::table('branches')->paginate(9);

        return view('pages.branches', compact('branch','g_setting','branch_items'));
    }

    public function index2()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $branch_items = DB::table('page_branch_items')->where('id', 1)->first();
        $branch = DB::table('branches')->orderBy('id', 'asc')->paginate(12);
        // $branch = DB::table('branches')->orderBy('id', 'asc')->where('status', 'Open')->paginate(12);
        return view('pages.branchs', compact('branch_items','g_setting','branch'));
    }

    public function detail($name)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $branch_detail = DB::table('branches')->where('name', $name)->first();
        $branch_items = DB::table('branches')->get();
        if(!$branch_detail) {
            return abort(404);
        }
        return view('pages.branch_detail', compact('g_setting','branch_detail','branch_items'));
    }
}
