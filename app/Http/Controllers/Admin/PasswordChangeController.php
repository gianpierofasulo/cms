<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use Hash;
 
class PasswordChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $admin_data = Admin::where('id',session('id'))->first();
        return view('admin.auth.password_change', compact('admin_data'));
    }

    public function update1(Request $request)
{
     if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
    $request->validate([
        'old_password' => 'required',
        'password' => 'required|min:6',
        're_password' => 'required|same:password',
    ]);

    // if (!auth()->check()) {
    //     return redirect()->back()->with('error', 'User not authenticated.');
    // }

    $user = Admin::find(auth()->users()->id);
    //$user = auth()->session();

    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    if (!\Hash::check($request->old_password, $user->password)) {
        return redirect()->back()->with('error', 'You have entered the wrong password');
    }

    $user->update([
        'password' => Hash($request->password)
    ]);

    return redirect()->back()->with('success', 'Password updated successfully!');
}


    public function update(Request $request)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $request->validate([
           // 'old_password'     => 'required',
            'password' => 'required|min:6',
            're_password' => 'required|same:password',
        ]);

        $data['password'] = Hash::make($request->password);
        Admin::where('id',session('id'))->update($data);

        return redirect()->back()->with('success', 'Password is updated successfully!');

    }


}
