<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageBranchItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageBranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        $page_branch = PageBranchItem::where('id',1)->first();
        return view('admin.page_setting.page_branch', compact('page_branch'));
    }
    public function update(Request $request)
    {
        $data['name'] = $request->input('name');
        $data['detail'] = $request->input('detail');
        $data['status'] = $request->input('status');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageBranchItem::where('id',1)->update($data);

        return redirect()->back()->with('success', 'Branch Page Content is updated successfully!');

    }

}
