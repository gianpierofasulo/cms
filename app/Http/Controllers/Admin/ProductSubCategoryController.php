<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ProductSubCategoryController extends Controller
{



    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {


        $category = ProductCategory::whereNotNull('parent_id')->get();

        return view('admin.product_sub_category.index', compact('category'));
    }


    public function create()
    {
    	$subCategory = ProductCategory::pluck('category_name', 'id');
        return view('admin.product_sub_category.create', compact('subCategory'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:product_categories',
            'parent_id' => 'required',
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
        return redirect()->route('admin.product_sub_category.index')->with('success', 'Product Sub Category has been created successfully!');
    }

    public function edit($id)
    {
    	$subCategory = ProductCategory::pluck('category_name', 'id');
        $category = ProductCategory::findOrFail($id);
        return view('admin.product_sub_category.edit', compact('category', 'subCategory'));
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
        return redirect()->route('admin.product_sub_category.index')->with('success', 'Product Sub Category is updated successfully!');
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
        return Redirect()->back()->with('success', 'Product Sub Category is deleted successfully!');
    }

}
