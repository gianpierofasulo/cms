<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageDeveloperItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageDeveloperController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        $page_developer = PageDeveloperItem::where('id',1)->first();
        return view('admin.page_setting.page_developer', compact('page_developer'));
    }

    public function update(Request $request)
    {
        $data['name'] = $request->input('name');
        $data['detail'] = $request->input('detail');
        $data['status'] = $request->input('status');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageDeveloperItem::where('id',1)->update($data);

        return redirect()->back()->with('success', 'Developer Page Content is updated successfully!');

    }

}
