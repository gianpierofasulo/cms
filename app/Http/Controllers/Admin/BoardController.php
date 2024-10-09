<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BoardDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class BoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $board_director = BoardDirector::all();
        return view('admin.board_director.index', compact('board_director'));
    }

    public function create()
    {
        return view('admin.board_director.create');
    }

    public function store(Request $request)
    {

        $board_director = new BoardDirector();
        $data = $request->only($board_director->getFillable());

        $request->validate([
            'name' => 'required',
            'slug' => 'unique:board_director',
            'designation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:98992048'
        ]);

        if(empty($data['slug'])) {
            $data['slug'] = Str::slug($request->name);
        }

        $statement = DB::select("SHOW TABLE STATUS LIKE 'board_directors'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('photo')->extension();
        $final_name = 'board-'.$ai_id.'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $data['photo'] = $final_name;

        $board_director->fill($data)->save();
        return redirect()->route('admin.board_director.index')->with('success', 'Board Director is added successfully!');
    }

    public function edit($id)
    {
        $board_director = BoardDirector::findOrFail($id);
        return view('admin.board_director.edit', compact('board_director'));
    }

    public function update(Request $request, $id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $board_director = BoardDirector::findOrFail($id);
        $data = $request->only($board_director->getFillable());

        if($request->hasFile('photo')) {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'slug'   =>  [
                    Rule::unique('board_directors')->ignore($id),
                ],
                'designation'   =>  [
                    'required'
                ],
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:98992048'
            ]);


            if ($board_director->photo != null) {
                $photoPath = public_path('uploads/' . $board_director->photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('photo')->extension();
            $final_name = 'board-' . $id . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $data['photo'] = $final_name;

            // unlink(public_path('uploads/'.$board_director->photo));
            // $ext = $request->file('photo')->extension();
            // $final_name = 'board-'.$id.'.'.$ext;
            // $request->file('photo')->move(public_path('uploads/'), $final_name);
            // $data['photo'] = $final_name;
        } else {
            $request->validate([
                'name'   =>  [
                    'required'
                ],
                'slug'   =>  [
                    Rule::unique('board_directors')->ignore($id),
                ],
                'designation'   =>  [
                    'required'
                ]
            ]);
            $data['photo'] = $board_director->photo;
        }

        $board_director->fill($data)->save();
        return redirect()->route('admin.board_director.index')->with('success', 'Board Director is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $board_director = BoardDirector::findOrFail($id);
        if ($board_director->photo != null) {
            $photoPath = public_path('uploads/' . $board_director->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        // unlink(public_path('uploads/'.$board_director->photo));
        $board_director->delete();
        return Redirect()->back()->with('success', 'Board Director is deleted successfully!');
    }
}
