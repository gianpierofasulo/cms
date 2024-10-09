<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Management_category;
use App\Models\Admin\SeniorManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ManagementCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $category = Management_category::all();
        return view('admin.management_category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.management_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_slug' => 'unique:categories'
        ]);
        $category = new Management_category();
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.management_category.index')->with('success', 'Management Category is added successfully!');
    }

    public function edit($id)
    {
        $category = Management_category::findOrFail($id);
        return view('admin.management_category.edit', compact('category'));
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

        $category = Management_category::findOrFail($id);
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.management_category.index')->with('success', 'Management Category is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        // Deleting data from "categories" table
        $category = Management_category::findOrFail($id);
        $category->delete();

        // Deleting data from "blogs" table
        $all_data = DB::table('senior_management')->where('category_id', $id)->get();
        foreach($all_data as $row)
        {
            unlink(public_path('uploads/'.$row->blog_photo));
        }
        DB::table('senior_management')->where('category_id',$id)->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Management Category is deleted successfully!');
    }

}
