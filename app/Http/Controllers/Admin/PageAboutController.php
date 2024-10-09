<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageAboutItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageAboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        $page_about = PageAboutItem::where('id',1)->first();
        return view('admin.page_setting.page_about', compact('page_about'));
    }

    public function update(Request $request)
    {

       if(!env('USER_VERIFIED'))
       {
        return redirect()->back()->with('error', 'This feature is disable for demo!');
    }


    if($request->hasFile('about_us_photo'))
    {
        if ($request->about_us_photo != null) {
            $photoPath = public_path('uploads/' . $request->about_us_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $ext = $request->file('about_us_photo')->extension();
        $final_name = 'about_us_image-'.'.' . $ext;
        $request->file('about_us_photo')->move(public_path('uploads/'), $final_name);
        $data['about_us_photo'] = $final_name;
    }

    if($request->hasFile('mession_photo'))
    {
        if ($request->mession_photo != null) {
            $photoPath = public_path('uploads/' . $request->mession_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $ext = $request->file('mession_photo')->extension();
        $final_name = 'mession_image-'.'.' . $ext;
        $request->file('mession_photo')->move(public_path('uploads/'), $final_name);
        $data['mession_photo'] = $final_name;
    }

    if($request->hasFile('vision_photo'))
    {
        if ($request->vision_photo != null) {
            $photoPath = public_path('uploads/' . $request->vision_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $ext = $request->file('vision_photo')->extension();
        $final_name = 'vision_image-'.'.' . $ext;
        $request->file('vision_photo')->move(public_path('uploads/'), $final_name);
        $data['vision_photo'] = $final_name;
    }

    $data['name'] = $request->input('name');
    $data['detail'] = $request->input('detail');
    $data['mession'] = $request->input('mession');
    $data['vision'] = $request->input('vision');
    $data['objective'] = $request->input('objective');
    $data['core_value'] = $request->input('core_value');
    $data['status'] = $request->input('status');
    $data['seo_title'] = $request->input('seo_title');
    $data['seo_meta_description'] = $request->input('seo_meta_description');

    PageAboutItem::where('id',1)->update($data);

    return redirect()->back()->with('success', 'About Page Content is updated successfully!');

}

}
