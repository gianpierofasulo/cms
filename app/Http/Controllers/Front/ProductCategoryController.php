<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Admin\ProductCategory;

class ProductCategoryController extends Controller
{
    public function detail($slug)
    {
        $category_single = DB::table('product_categories')->where('category_slug', $slug)->first();
        if(!$category_single) {
            return abort(404);
        }
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $product_items = DB::table('products')->where('category_id', $category_single->id)->paginate(5);
        $product_items_no_pagi = DB::table('products')->orderby('id', 'desc')->get();
       // $categories = DB::table('product_categories')->get();

         $categories = ProductCategory::whereNull('parent_id')->get();
        $subCategories = ProductCategory::whereNotNull('parent_id')->get();
        $categoriesWithSubCategories = ProductCategory::with('subCategories')
    ->whereNull('parent_id')
    ->get();

        return view('pages.product_category', compact('g_setting','product_items','product_items_no_pagi','categories','category_single','subCategories', 'categoriesWithSubCategories'));
    }
}
