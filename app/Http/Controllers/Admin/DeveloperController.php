<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class DeveloperController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $developer = Developer::all();
        return view('admin.developer.index', compact('developer'));
    }

    public function create()
    {
        return view('admin.developer.create');
    }

    public function store(Request $request)
    {
        $developer = new Developer();
        $data = $request->only($developer->getFillable());

        $request->validate([
            'name' => 'required',
            'slug' => 'unique:developer',
            'linkedin' => '',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:98992048'
        ]);

        if(empty($data['slug'])) {
            $data['slug'] = Str::slug($request->name);
        }

        $statement = DB::select("SHOW TABLE STATUS LIKE 'developers'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('photo')->extension();
        $final_name = 'developer-'.$ai_id.'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $data['photo'] = $final_name;

        $developer->fill($data)->save();
        return redirect()->route('admin.developer.index')->with('success', 'Developer is added successfully!');
    }

    public function edit($id)
    {
        $developer = Developer::findOrFail($id);
        return view('admin.developer.edit', compact('developer'));
    }

    public function update(Request $request, $id)
    {
        $developer = Developer::findOrFail($id);
        $data = $request->only($developer->getFillable());

        if($request->hasFile('photo')) {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'slug'   =>  [
                    Rule::unique('developer')->ignore($id),
                ],
                'linkedin'   =>  [
                    ''
                ],
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:98992048'
            ]);

            if ($developer->photo != null) {
                $photoPath = public_path('uploads/' . $developer->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('photo')->extension();
            $final_name = 'developer-'.$id.'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $data['photo'] = $final_name;
        } else {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'slug'   =>  [
                    Rule::unique('developer')->ignore($id),
                ],
                'linkedin'   =>  [
                    ''
                ]
            ]);
            $data['photo'] = $developer->photo;
        }

        $developer->fill($data)->save();
        return redirect()->route('admin.developer.index')->with('success', 'Developer is updated successfully!');
    }

    public function destroy($id)
    {
        $developer = Developer::findOrFail($id);
        if ($developer->photo != null) {
            $photoPath = public_path('uploads/' . $developer->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        // unlink(public_path('uploads/'.$developer->photo));
        $developer->delete();
        return Redirect()->back()->with('success', 'Developer is deleted successfully!');
    }
}
