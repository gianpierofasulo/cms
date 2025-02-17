<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonial'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $data = $request->only($testimonial->getFillable());

        $request->validate([
            'name' => 'required|unique:testimonials',
            'designation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:982048',
            'comment' => 'required'
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'testimonials'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('photo')->extension();
        $final_name = 'testimonial-'.$ai_id.'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $data['photo'] = $final_name;

        $testimonial->fill($data)->save();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial is added successfully!');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $data = $request->only($testimonial->getFillable());

        if($request->hasFile('photo')) {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'designation'   =>  [
                    'required'
                ],
                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:982048',
                'comment' =>  [
                    'required'
                ]
            ]);
             if ($testimonial->photo != null) {
                $photoPath = public_path('uploads/' . $testimonial->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('photo')->extension();
            $final_name = 'testimonial-'.$id.'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $data['photo'] = $final_name;
        } else {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'designation'   =>  [
                    'required'
                ],
                'comment' =>  [
                    'required'
                ]
            ]);
            $data['photo'] = $testimonial->photo;
        }

        $testimonial->fill($data)->save();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->photo != null) {
                $photoPath = public_path('uploads/' . $testimonial->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
        // unlink(public_path('uploads/'.$testimonial->photo));
        $testimonial->delete();
        return Redirect()->back()->with('success', 'Testimonial is deleted successfully!');
    }
}
