<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageDocumentItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageDocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        $page_document = PageDocumentItem::where('id',1)->first();
        return view('admin.page_setting.page_document', compact('page_document'));
    }

    public function update(Request $request)
    {
        $data['name'] = $request->input('name');
        $data['detail'] = $request->input('detail');
        $data['status'] = $request->input('status');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageDocumentItem::where('id',1)->update($data);

        return redirect()->back()->with('success', 'Document Page Content is updated successfully!');

    }

}
