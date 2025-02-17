<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Admin\JobApplication;
use App\Models\Admin\Job_category;

use Illuminate\Http\Request;
use DB;

class JobController extends Controller
{
    public function index1()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $career = DB::table('page_career_items')->where('id', 1)->first();
        $jobs = DB::table('jobs')->orderby('job_order', 'asc')->get();
        return view('pages.career', compact('career','g_setting','jobs'));
    }
// ----------------new added -----------------

    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $career = DB::table('page_career_items')->where('id', 1)->first();
        $jobs = DB::table('jobs')->orderby('id', 'desc')->paginate(4);
        $job_items_no_pagi = DB::table('jobs')->orderby('id', 'desc')->get();
        $categories = DB::table('job_categories')->get();
        return view('pages.career', compact('career','g_setting','jobs','categories','job_items_no_pagi'));
    }

    public function detail1($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $job_detail = DB::table('jobs')->where('job_slug', $slug)->first();
        return view('pages.job', compact('job_detail','g_setting'));
    }
// ----------------new added -----------------
     public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $job_detail = DB::table('jobs')->where('job_slug', $slug)->first();
        $job_items = DB::table('jobs')->get();
        $job_items_no_pagi = DB::table('jobs')->orderby('id', 'desc')->get();
        $categories = DB::table('job_categories')->get();
        if(!$job_detail) {
            return abort(404);
        }
        return view('pages.job', compact('g_setting','job_detail','job_items','job_items_no_pagi','categories'));
    }


    public function apply($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $job_detail = DB::table('jobs')->where('job_slug', $slug)->first();
        return view('pages.job_apply', compact('job_detail','g_setting'));
    }

    public function apply_form(Request $request)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();

        $job_application = new JobApplication();
        $data = $request->only($job_application->getFillable());

        $request->validate([
            'applicant_first_name' => 'required',
            'applicant_last_name' => 'required',
            'applicant_email' => 'required|email',
            'applicant_phone' => 'required',
            'applicant_country' => 'required',
            'applicant_state' => '',
            'applicant_street' => '',
            'applicant_city' => 'required',
            'applicant_zip_code' => '',
            'applicant_expected_salary' => 'required',
            'applicant_cover_letter' => 'required',
            'applicant_cv' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);

        if($g_setting->google_recaptcha_status == 'Show') {
            $request->validate([
                'g-recaptcha-response' => 'required'
            ],
            [
                'g-recaptcha-response.required' => 'You must have to input recaptcha correctly'
            ]);
        }

        $statement = DB::select("SHOW TABLE STATUS LIKE 'job_applications'");
        $ai_id = $statement[0]->Auto_increment;

        $ext = $request->file('applicant_cv')->extension();
        $final_name = 'cv-'.$ai_id.'.'.$ext;
        $request->file('applicant_cv')->move(public_path('uploads/'), $final_name);
        $data['applicant_cv'] = $final_name;

        $job_application->fill($data)->save();

        return redirect()->back()->with('success', 'Your application is submitted successfully. You will notified by email or Phone if you are selected for the interview.');
    }
}
