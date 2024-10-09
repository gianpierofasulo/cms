<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $category = ProductCategory::whereNull('parent_id')->get();

        // $category = ProductCategory::all();
        return view('admin.product_category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.product_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:product_categories',
            'category_slug' => 'unique:categories'
        ]);
        $category = new ProductCategory();
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.product_category.index')->with('success', 'Product Category is added successfully!');
    }

    public function edit($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('admin.product_category.edit', compact('category'));
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

        $category = ProductCategory::findOrFail($id);
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.product_category.index')->with('success', 'Product Category is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        // Deleting data from "categories" table
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        // Deleting data from "products" table
        $all_data = DB::table('products')->where('category_id', $id)->get();
        foreach($all_data as $row)
        {
            unlink(public_path('uploads/'.$row->blog_photo));
        }
        DB::table('products')->where('category_id',$id)->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Product Category is deleted successfully!');
    }

}
