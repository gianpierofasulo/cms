<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        //return view('admin.product.create');

         $category=DB::table('product_categories')->get();
        return view('admin.product.create', compact('category'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $data = $request->only($product->getFillable());

        $request->validate([
            'product_name' => 'required',
            'product_slug' => 'unique:products',
            'product_current_price' => 'required',
            'product_stock' => 'required',
            'product_content' => 'required',
            'product_content_short' => 'required',
            'product_featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:9899992048'
        ]);

        if(empty($data['product_slug'])) {
            $data['product_slug'] = Str::slug($request->product_name);
        }

        $statement = DB::select("SHOW TABLE STATUS LIKE 'products'");
        $ai_id = $statement[0]->Auto_increment;

        $ext = $request->file('product_featured_photo')->extension();
        $final_name = 'product-'.$ai_id.'.'.$ext;
        $request->file('product_featured_photo')->move(public_path('uploads/'), $final_name);
        $data['product_featured_photo'] = $final_name;

        $product->fill($data)->save();
        return redirect()->route('admin.product.index')->with('success', 'Product is added successfully!');
    }

    public function edit($id)
    {

         $product = Product::findOrFail($id);
        $category=DB::table('product_categories')->get();
        return view('admin.product.edit', compact('product','category'));

    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->only($product->getFillable());

        if($request->hasFile('product_featured_photo')) {
            $request->validate([
                'product_name' => 'required',
                'product_slug'   =>  [
                    Rule::unique('products')->ignore($id),
                ],
                'product_current_price' => 'required',
                'product_stock' => 'required',
                'product_content' => 'required',
                'product_content_short' => 'required',
                'product_featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:9899992048'
            ]);
             if ($product->product_featured_photo != null) {
                $photoPath = public_path('uploads/' . $product->product_featured_photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('product_featured_photo')->extension();
            $final_name = 'product-' . $id . '.' . $ext;
            $request->file('product_featured_photo')->move(public_path('uploads/'), $final_name);
            $data['product_featured_photo'] = $final_name;
            
            // unlink(public_path('uploads/'.$product->product_featured_photo));
            // $ext = $request->file('product_featured_photo')->extension();
            // $final_name = 'product-'.$id.'.'.$ext;
            // $request->file('product_featured_photo')->move(public_path('uploads/'), $final_name);
            // $data['product_featured_photo'] = $final_name;
        } else {
            $request->validate([
                'product_name' => 'required',
                'product_slug'   =>  [
                    Rule::unique('products')->ignore($id),
                ],
                'product_current_price' => 'required',
                'product_stock' => 'required',
                'product_content' => 'required',
                'product_content_short' => 'required',
            ]);
            $data['product_featured_photo'] = $product->product_featured_photo;
        }

        if(empty($data['product_slug']))
        {
            unset($data['product_slug']);
            $data['product_slug'] = Str::slug($request->product_name);
        }

        $product->fill($data)->save();
        return redirect()->route('admin.product.index')->with('success', 'Product is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $product = Product::findOrFail($id);
         if ($product->product_featured_photo != null) {
            $photoPath = public_path('uploads/' . $product->product_featured_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        unlink(public_path('uploads/'.$product->product_featured_photo));
        $product->delete();
        return Redirect()->back()->with('success', 'Product is deleted successfully!');
    }
}
