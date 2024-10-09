<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $menus = Menu::orderBy('id', 'asc')->get();
        return view('admin.menu.index', compact('menus'));
    }
    //<-------======Newly Added =======------>
    public function create()
    {
        return view('admin.menu.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'menu_name' => 'required|unique:menus',
            'menu_status' => ''
        ]);
        $menu = new Menu();
        $data = $request->only($menu->getFillable());
        if(empty($data['menu_status']))
        {
            unset($data['menu_status']);
            $data['menu_status'] = Str::slug($request->menu_name);
        }
        $menu->fill($data)->save();
        return redirect()->route('admin.menu.index')->with('success', 'Menu is added successfully!');
    }

     public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('menu'));
    }

    //-------=======End =======------------->

    public function update(Request $request)
    {

         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }

        echo '<pre>';
        print_r(request('menu_id'));
        echo '</pre>';

        echo '<pre>';
        print_r(request('menu_status'));
        echo '</pre>';

        $i=0;
        foreach(request('menu_id') as $value)
        {
            $arr1[$i] = $value;
            $i++;
        }

        $i=0;
        foreach(request('menu_status') as $value)
        {
            $arr2[$i] = $value;
            $i++;
        }

        for($i=0;$i<count($arr1);$i++)
        {
            $data = array();
            $data['menu_status'] = $arr2[$i];
            DB::table('menus')->where('id', $arr1[$i])->update($data);
        }

        return redirect()->route('admin.menu.index')->with('success', 'Menu is updated successfully!');
    }

     public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $coupon = Menu::findOrFail($id);
        $coupon->delete();
        return Redirect()->back()->with('success', 'Menu is deleted successfully!');
    }
}


