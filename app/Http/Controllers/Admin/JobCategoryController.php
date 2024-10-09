<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Job_category;
use App\Models\Admin\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class JobCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $category = Job_category::all();
        return view('admin.job_category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.job_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_slug' => 'unique:categories'
        ]);
        $category = new Job_category();
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.job_category.index')->with('success', 'Job Category is added successfully!');
    }

    public function edit($id)
    {
        $category = Job_category::findOrFail($id);
        return view('admin.job_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'category_name'   =>  [
                'required',
                Rule::unique('categories')->ignore($id),
            ],
            'category_slug'   =>  [
                Rule::unique('categories')->ignore($id),
            ]
        ]);

        $category = Job_category::findOrFail($id);
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.job_category.index')->with('success', 'Job Category is updated successfully!');
    }

    public function destroy($id)
    {
        // Deleting data from "categories" table
         // $all_data = Job::findOrFail($id);
         //  if ($all_data->photo != null) {
         //        $photoPath = public_path('uploads/' . $all_data->category_id);
         //        if (file_exists($photoPath)) {
         //            unlink($photoPath);
         //        }
         //    }
         //   $all_data->delete();


        $category = Job_category::findOrFail($id);
        $category->delete();

        // Deleting data from "blogs" table
        $all_data = DB::table('jobs')->where('category_id', $id)->get();
        foreach($all_data as $row)
        {
            // DB::table('jobs')->where('category_id',$row->category_id)->delete();
        }
        DB::table('jobs')->where('category_id',$id)->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Job Category is deleted successfully!');
    }

}
