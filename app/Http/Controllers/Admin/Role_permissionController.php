<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role_permission;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class Role_permissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
 
    public function index()
    {   
        
        $rolepage=DB::table('role_pages')->get();
        $role=DB::table('roles')->get();
        $permission = Role_permission::all();
        return view('admin.role.permission.index', compact('permission', 'role', 'rolepage'));
    }

    public function create()
    {
        $role=DB::table('roles')->get();
        $rolepage=DB::table('role_pages')->get();

        return view('admin.role.permission.create', compact('role', 'rolepage'));

    }
public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'role_page_id' => 'required',
            'access_status' => 'required',
            'operation' => '',
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'role_permissions'");
        $ai_id = $statement[0]->Auto_increment;
    
        $permission = new Role_permission();
        $data = $request->only($permission->getFillable());
        if(empty($data['role_page_id']))
        {
            unset($data['role_page_id']);
            $data['role_page_id'] = Str::slug($request->role_id);
        }
        $permission->fill($data)->save();
        return redirect()->route('admin.role.permission.index')->with('success', 'Permission is added successfully!');
    }

   /* public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'requireds',
            'role_page_id' => 'required',
             'access_status' => 'required'
        ]);
        $permission = new Role_permission();
        $data = $request->only($permission->getFillable());
        if(empty($data['role_page_id']))
        {
            unset($data['role_page_id']);
            $data['role_page_id'] = Str::slug($request->role_id);
        }
        $permission->fill($data)->save();
        return redirect()->route('admin.permission.index')->with('success', 'Role permission is added successfully!');
    }
 
    public function edit($id)
    {
        $permission = Role_permission::findOrFail($id);
        return view('admin.permission.edit', compact('permission'));
    }*/

    public function edit($id)
    {

        $permission = Role_permission::findOrFail($id);
        $role=DB::table('roles')->get();
        $rolepage=DB::table('role_pages')->get();
        return view('admin.role.permission.edit', compact('permission','role', 'rolepage'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'role_id'   =>  [
                'required',
                Rule::unique('permissions')->ignore($id),
            ],
            'role_page_id'   =>  [
                Rule::unique('permissions')->ignore($id),
            ],
            'access_status'   =>  [
                Rule::unique('permissions')->ignore($id),
            ]
        ]);

        $permission = Role_permission::findOrFail($id);
        $data = $request->only($permission->getFillable());
        if(empty($data['role_page_id']))
        {
            unset($data['role_page_id']);
            $data['role_page_id'] = Str::slug($request->role_id);
        }
        $permission->fill($data)->save();
        return redirect()->route('admin.role.permission.index')->with('success', 'Role Permission is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $faq = Role_permission::findOrFail($id);
        $faq->delete();
        return Redirect()->back()->with('success', 'Role Permission is deleted successfully!');
    }

   /* public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        // Deleting data from "permissions" table
        $permission = Role_permission::findOrFail($id);
        $permission->delete();

        // Deleting data from "blogs" table
        $all_data = DB::table('blogs')->where('category_id', $id)->get();
        foreach($all_data as $row)
        {
            unlink(public_path('uploads/'.$row->blog_photo));
        }
        DB::table('blogs')->where('category_id',$id)->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Role_permission is deleted successfully!');
    } */

}
