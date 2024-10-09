<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class ProfileChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $admin_data = Admin::where('id',session('id'))->first();
        return view('admin.auth.profile_change', compact('admin_data'));
    }

    public function update(Request $request)
    {
       if(!env('USER_VERIFIED'))
       {
        return redirect()->back()->with('error', 'This feature is disable for demo!');
    }
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $data['name'] = $request->name;
    $data['email'] = $request->email;
    Admin::where('id',session('id'))->update($data);

    session(['name' => $request->name]);
    session(['email' => $request->email]);

    return redirect()->back()->with('success', 'Profile Information is updated successfully!');

}

    // -----------two factor ----------
public function toggleTwoFactor(Request $request)
{
    $userId = session('id');
    $user = Admin::find($userId);
    if (!$user) {
        return redirect()->back()->with('error', 'User Not found');
    } 

    if ($user->two_factor) {
        $message = __('two_factor.disabled');
    } else {
        $message = __('two_factor.enabled');
    }

    $user->two_factor = ! $user->two_factor;

    $user->save();

    return redirect()->back()->with('success', 'Two factor updated');

}


public function TwoFactorType(Request $request)
{
    session('id')->update(['two_factor_type' => $request->get('two_factor_type')]);
    return back()->withStatus(__('messages.two_factor_authentication_method_updated'));
}

}
