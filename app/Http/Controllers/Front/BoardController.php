<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BoardController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $boards = DB::table('page_board_items')->where('id', 1)->first();
        $board = DB::table('board_directors')->paginate(9);

        return view('pages.board', compact('boards','g_setting','board'));
    }

    public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $board_detail = DB::table('board_directors')->where('slug', $slug)->first();
        if(!$board_detail) {
            return abort(404);
        }
        $board = DB::table('board_directors')->get();
        return view('pages.board_detail', compact('g_setting','board_detail','board'));
    }
}
