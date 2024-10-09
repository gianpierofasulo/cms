<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SeniorManagements;
use App\Models\Admin\Management_category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class SeniorManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $senior_managemnts = SeniorManagements::all();
        return view('admin.senior_managemnts.index', compact('senior_managemnts'));
    }

    public function create()
    {
         $management_category=DB::table('management_categories')->get();
        return view('admin.senior_managemnts.create', compact('management_category'));

        //return view('admin.senior_managemnts.create');
    }

    public function store(Request $request)
    {
        $senior_managemnts = new SeniorManagements();
        $data = $request->only($senior_managemnts->getFillable());

        $request->validate([
            'name' => 'required',
            'slug' => 'unique:senior_managemnts',
            'designation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:98992048'
        ]);

        if(empty($data['slug'])) {
            $data['slug'] = Str::slug($request->name);
        }

        $statement = DB::select("SHOW TABLE STATUS LIKE 'senior_managements'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('photo')->extension();
        $final_name = 'senior-management-'.$ai_id.'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $data['photo'] = $final_name;

        $senior_managemnts->fill($data)->save();
        return redirect()->route('admin.senior_managemnts.index')->with('success', 'Senior Management is added successfully!');
    }

    public function edit($id)
    {
        $senior_managemnts = SeniorManagements::findOrFail($id);
        $management_category=DB::table('management_categories')->get();
        return view('admin.senior_managemnts.edit', compact('senior_managemnts','management_category'));
        //return view('admin.senior_managemnts.edit', compact('senior_managemnts'));
    }

    public function update(Request $request, $id)
    {
        $senior_managemnts = SeniorManagements::findOrFail($id);
        $data = $request->only($senior_managemnts->getFillable());

        if($request->hasFile('photo')) {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'slug'   =>  [
                    Rule::unique('senior_managemnts')->ignore($id),
                ],
                'designation'   =>  [
                    'required'
                ],
                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:98992048'
            ]);


            if ($senior_managemnts->photo != null) {
                $photoPath = public_path('uploads/' . $senior_managemnts->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('photo')->extension();
            $final_name = 'senior-management-' . $id . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $data['photo'] = $final_name;
            // unlink(public_path('uploads/'.$senior_managemnts->photo));
            // $ext = $request->file('photo')->extension();
            // $final_name = 'senior-management-'.$id.'.'.$ext;
            // $request->file('photo')->move(public_path('uploads/'), $final_name);
            // $data['photo'] = $final_name;
        } else {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'slug'   =>  [
                    Rule::unique('senior_managemnts')->ignore($id),
                ],
                'designation'   =>  [
                    'required'
                ]
            ]);
            $data['photo'] = $senior_managemnts->photo;
        }

        $senior_managemnts->fill($data)->save();
        return redirect()->route('admin.senior_managemnts.index')->with('success', 'Senior Management is updated successfully!');
    }

    public function destroy($id)
    {
         $senior_managemnts = SeniorManagements::findOrFail($id);
          if ($senior_managemnts->photo != null) {
                $photoPath = public_path('uploads/' . $senior_managemnts->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
           $senior_managemnts->delete();

        // $senior_managemnts = SeniorManagements::findOrFail($id);
        // unlink(public_path('uploads/'.$senior_managemnts->photo));
        // $senior_managemnts->delete();
        return Redirect()->back()->with('success', 'Senior Management is deleted successfully!');
    }
}
