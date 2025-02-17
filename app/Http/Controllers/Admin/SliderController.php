<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slider_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:98992048',
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'sliders'");
        $ai_id = $statement[0]->Auto_increment;

        $ext = $request->file('slider_photo')->extension();
        $final_name = 'slider-'.$ai_id.'.'.$ext;
        $request->file('slider_photo')->move(public_path('uploads'), $final_name);

        $slider = new Slider();
        $data = $request->only($slider->getFillable());

        unset($data['slider_photo']);
        $data['slider_photo'] = $final_name;

        $slider->fill($data)->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider is added successfully!');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $data = $request->only($slider->getFillable());

        if ($request->hasFile('slider_photo')) {

            $request->validate([
                'slider_photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:98992048'
            ]);

            if ($slider->slider_photo != null) {
                $photoPath = public_path('uploads/' . $slider->slider_photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('slider_photo')->extension();
            $final_name = 'slider-' . $id . '.' . $ext;
            $request->file('slider_photo')->move(public_path('uploads/'), $final_name);
            $data['slider_photo'] = $final_name;
        }

        $slider->fill($data)->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $slider = Slider::findOrFail($id);
         if ($slider->slider_photo != null) {
                $photoPath = public_path('uploads/' . $slider->slider_photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
        // unlink(public_path('uploads/'.$slider->slider_photo));
        $slider->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Slider is deleted successfully!');
    }

}
