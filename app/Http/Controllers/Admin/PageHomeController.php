<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageHomeItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        $page_home = PageHomeItem::where('id',1)->first();
        return view('admin.page_setting.page_home', compact('page_home'));
    }

    public function update1(Request $request)
    {
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Home Page Meta Information is updated successfully!');
    }

    public function update2(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }

        if($request->hasFile('why_choose_bg'))
        {
            $request->validate([
                'why_choose_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);
             if ($request->input('current_photo') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Uploading new photo
            $ext = $request->file('why_choose_bg')->extension();
            $final_name = 'why_choose_bg'.'.'.$ext;
            $request->file('why_choose_bg')->move(public_path('uploads/'), $final_name);

            $data['why_choose_bg'] = $final_name;
        }

        $data['why_choose_title'] = $request->input('why_choose_title');
        $data['why_choose_subtitle'] = $request->input('why_choose_subtitle');
        $data['why_choose_status'] = $request->input('why_choose_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Why Choose Us Section is updated successfully!');
    }

    public function update3(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }

        if($request->hasFile('special_bg'))
        {
            $request->validate([
                'special_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);


            if ($request->input('current_photo') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Unlink old photo
            //unlink(public_path('uploads/'.$request->input('current_photo')));

            // Uploading new photo
            $ext = $request->file('special_bg')->extension();
            $final_name = 'special_bg'.'.'.$ext;
            $request->file('special_bg')->move(public_path('uploads/'), $final_name);

            $data['special_bg'] = $final_name;
        }

        if($request->hasFile('special_video_bg'))
        {
            $request->validate([
                'special_video_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);

             if ($request->input('current_photo1') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo1'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Unlink old photo
            //unlink(public_path('uploads/'.$request->input('current_photo1')));

            // Uploading new photo
            $ext = $request->file('special_video_bg')->extension();
            $final_name = 'special_video_bg'.'.'.$ext;
            $request->file('special_video_bg')->move(public_path('uploads/'), $final_name);

            $data['special_video_bg'] = $final_name;
        }

        $data['special_title'] = $request->input('special_title');
        $data['special_subtitle'] = $request->input('special_subtitle');
        $data['special_content'] = $request->input('special_content');
        $data['special_btn_text'] = $request->input('special_btn_text');
        $data['special_btn_url'] = $request->input('special_btn_url');
        $data['special_yt_video'] = $request->input('special_yt_video');
        $data['special_status'] = $request->input('special_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Special Section is updated successfully!');
    }

    public function update4(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['service_title'] = $request->input('service_title');
        $data['service_subtitle'] = $request->input('service_subtitle');
        $data['service_status'] = $request->input('service_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Service Section is updated successfully!');
    }


    public function update5(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        if($request->hasFile('testimonial_bg'))
        {
            $request->validate([
                'testimonial_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);
             if ($request->input('current_photo') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Unlink old photo
           // unlink(public_path('uploads/'.$request->input('current_photo')));

            // Uploading new photo
            $ext = $request->file('testimonial_bg')->extension();
            $final_name = 'testimonial_bg'.'.'.$ext;
            $request->file('testimonial_bg')->move(public_path('uploads/'), $final_name);

            $data['testimonial_bg'] = $final_name;
        }

        $data['testimonial_title'] = $request->input('testimonial_title');
        $data['testimonial_subtitle'] = $request->input('testimonial_subtitle');
        $data['testimonial_status'] = $request->input('testimonial_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Testimonial Section is updated successfully!');
    }

    public function update6(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['project_title'] = $request->input('project_title');
        $data['project_subtitle'] = $request->input('project_subtitle');
        $data['project_status'] = $request->input('project_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Project Section is updated successfully!');
    }

   

    public function update7(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['team_member_title'] = $request->input('team_member_title');
        $data['team_member_subtitle'] = $request->input('team_member_subtitle');
        $data['team_member_status'] = $request->input('team_member_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Team Member Section is updated successfully!');
    }

    public function update8(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        if($request->hasFile('appointment_bg'))
        {
            $request->validate([
                'appointment_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);

             if ($request->input('current_photo') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Unlink old photo
           // unlink(public_path('uploads/'.$request->input('current_photo')));

            // Uploading new photo
            $ext = $request->file('appointment_bg')->extension();
            $final_name = 'appointment_bg'.'.'.$ext;
            $request->file('appointment_bg')->move(public_path('uploads/'), $final_name);

            $data['appointment_bg'] = $final_name;
        }

        $data['appointment_title'] = $request->input('appointment_title');
        $data['appointment_text'] = $request->input('appointment_text');
        $data['appointment_btn_text'] = $request->input('appointment_btn_text');
        $data['appointment_btn_url'] = $request->input('appointment_btn_url');
        $data['appointment_status'] = $request->input('appointment_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Appointment Section is updated successfully!');
    }

    public function update9(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['latest_blog_title'] = $request->input('latest_blog_title');
        $data['latest_blog_subtitle'] = $request->input('latest_blog_subtitle');
        $data['latest_blog_status'] = $request->input('latest_blog_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Latest Blog Section is updated successfully!');
    }

    public function update10(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        if($request->hasFile('newsletter_bg'))
        {
            $request->validate([
                'newsletter_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);
             if ($request->input('current_photo') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Unlink old photo
           // unlink(public_path('uploads/'.$request->input('current_photo')));

            // Uploading new photo
            $ext = $request->file('newsletter_bg')->extension();
            $final_name = 'newsletter_bg'.'.'.$ext;
            $request->file('newsletter_bg')->move(public_path('uploads/'), $final_name);

            $data['newsletter_bg'] = $final_name;
        }

        $data['newsletter_title'] = $request->input('newsletter_title');
        $data['newsletter_text'] = $request->input('newsletter_text');
        $data['newsletter_status'] = $request->input('newsletter_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Newsletter Section is updated successfully!');
    }

    public function update11(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['partner_title'] = $request->input('partner_title');
        $data['partner_subtitle'] = $request->input('partner_subtitle');
        $data['partner_status'] = $request->input('partner_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Partner Section is updated successfully!');
    }


    public function update12(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['senior_title'] = $request->input('senior_title');
        $data['senior_subtitle'] = $request->input('senior_subtitle');
        $data['senior_status'] = $request->input('senior_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Senior Management Section is updated successfully!');
    }

    public function update13(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['board_title'] = $request->input('board_title');
        $data['board_subtitle'] = $request->input('board_subtitle');
        $data['board_status'] = $request->input('board_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Board Director Section is updated successfully!');
    }
    
    public function update14(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['document_title'] = $request->input('document_title');
        $data['document_subtitle'] = $request->input('document_subtitle');
        $data['document_status'] = $request->input('document_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Document Section is updated successfully!');
    }

    public function update15(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $data['about_us_title'] = $request->input('about_us_title');
        $data['about_us_subtitle'] = $request->input('about_us_subtitle');
        $data['about_us_status'] = $request->input('about_us_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'About Us Section is updated successfully!');
    }

    public function update16(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }

        if($request->hasFile('counter_bg'))
        {
            $request->validate([
                'counter_bg' => 'image|mimes:jpeg,png,jpg,gif|max:99992048'
            ]);
             if ($request->input('current_photo') != null) {
            $photoPath = public_path('uploads/' . $request->input('current_photo'));
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
            // Uploading new photo
            $ext = $request->file('counter_bg')->extension();
            $final_name = 'counter_bg'.'.'.$ext;
            $request->file('counter_bg')->move(public_path('uploads/'), $final_name);

            $data['counter_bg'] = $final_name;
        }

        $data['counter_title'] = $request->input('counter_title');
        $data['counter_subtitle'] = $request->input('counter_subtitle');
        $data['counter_status'] = $request->input('counter_status');

        PageHomeItem::where('id',1)->update($data);
        return redirect()->back()->with('success', 'Counter Section is updated successfully!');
    }

}
