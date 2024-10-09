<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DocumentController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $documents = DB::table('page_document_items')->where('id', 1)->first();
        $document = DB::table('documents')->orderby('id', 'desc')->paginate(8);


        return view('pages.documents', compact('documents','g_setting','document'));
    }

    public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $document_detail = DB::table('documents')->where('slug', $slug)->first();
        if(!$document_detail) {
            return abort(404);
        }
        $document = DB::table('documents')->get();
        return view('pages.document_detail', compact('g_setting','document_detail','document'));
    }
}
