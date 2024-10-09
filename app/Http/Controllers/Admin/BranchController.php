<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $branch = Branch::all();
        return view('admin.branch.index', compact('branch'));
    }

    public function create()
    {
        return view('admin.branch.create');
    }

    public function store(Request $request)
    {
        $branch = new Branch();
        $data = $request->only($branch->getFillable());

        $request->validate([
            'name' => 'required|unique:branches',
            'telephone' => '',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:96575048',
            'location' => 'required'
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'branches'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('photo')->extension();
        $final_name = 'branch-'.$ai_id.'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $data['photo'] = $final_name;

        $branch->fill($data)->save();
        return redirect()->route('admin.branch.index')->with('success', 'Branch is added successfully!');
    }

    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        return view('admin.branch.edit', compact('branch'));
    }

    public function update(Request $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $data = $request->only($branch->getFillable());

        if($request->hasFile('photo')) {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'telephone'   =>  [
                    ''
                ],
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:96575048',
                'location' =>  [
                    'required'
                ]
            ]);

            if ($branch->photo != null) {
                $photoPath = public_path('uploads/' . $branch->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            } 

            $ext = $request->file('photo')->extension();
            $final_name = 'branch-'.$id.'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $data['photo'] = $final_name;
        } else {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'telephone'   =>  [
                    ''
                ],
                'location' =>  [
                    'required'
                ]
            ]);
            $data['photo'] = $branch->photo;
        }

        $branch->fill($data)->save();
        return redirect()->route('admin.branch.index')->with('success', 'Branch is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $branch = Branch::findOrFail($id);
        if ($branch->photo != null) {
            $photoPath = public_path('uploads/' . $branch->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $branch->delete();
        return Redirect()->back()->with('success', 'Branch is deleted successfully!');
    }
}
