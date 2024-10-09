<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Admin\ProductCategory;

class ProductSearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->method() == 'GET') 
        {
            return abort(404);
        }

        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $search_string = $request->search_string;
        $search_string_filter = '%'.$search_string.'%';

        $product_items = DB::table('products')->orderby('id', 'desc')->where('product_name','like',$search_string_filter)->orWhere('product_content_short','like',$search_string_filter)->get();
        $product_items_no_pagi = DB::table('products')->orderby('id', 'desc')->get();
        //$categories = DB::table('product_categories')->get();

         $categories = ProductCategory::whereNull('parent_id')->get();
        $subCategories = ProductCategory::whereNotNull('parent_id')->get();
        $categoriesWithSubCategories = ProductCategory::with('subCategories')
    ->whereNull('parent_id')
    ->get();

        return view('pages.product_search_result', compact('g_setting','search_string','categories','product_items_no_pagi','product_items','subCategories', 'categoriesWithSubCategories'));
    }
}
