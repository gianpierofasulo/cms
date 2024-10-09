<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckTwoFactorRequest;
use App\Notifications\TwoFactorCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;
use App\Models\Admin\Admin;

class TwoFactorController extends Controller
{

    public function show()
    {

       // $user = session('id');
        // $userId = session('id');
        //  $user = Admin::find($userId);
        // abort_if(!is_object($user) || $user->two_factor_code === null,
        //     Response::HTTP_FORBIDDEN,
        //     '403 Forbidden'
        // );

        // abort_if(session('id')->two_factor_code === null,
        //     Response::HTTP_FORBIDDEN,
        //     '403 Forbidden'
        // );

        return view('admin.auth.twoFactor');
    }

    public function show1()
{
    $user = auth()->user();

    if (!$user || !$user->two_factor) {
        return redirect()->route('admin.dashboard');
    }

    return view('admin.auth.twoFactor');
}

    

   

    public function check(CheckTwoFactorRequest $request)
    {

        $userId = session('id');
        $user = Admin::find($userId);

        if ($request->input('two_factor_code') == $user->two_factor_code) {
            $user->resetTwoFactorCode();
            // return redirect()->route('admin.dashboard');

            $route = (Route::has('index') && ! $user->is_admin) ? 'index' : 'dashboard';

            return redirect()->route($route);
        }

        return redirect()->back()->withErrors(['two_factor_code' => __('global.two_factor.does_not_match')]);
    }

     public function check1(Request $request)
{
    $user = auth()->user();
    //dd($user, optional($user)->two_factor_code);
    $two_factor = $this->input->post('two_factor_code');

    $request->validate([
            'two_factor_code' => 'required'
        ]);

    if ($two_factor == $user->two_factor_code) {
        $user->resetTwoFactorCode();
        return redirect()->route('admin.dashboard');
    }

    return redirect()->back()->withErrors(['two_factor_code' => 'The two-factor code is incorrect.']);
}

    public function resend()
{
    $userId = session('id');

    // Log the user ID to check if it's correct
    \Log::info("User ID from session: {$userId}");

    // Fetch the user from the database
    $user = Admin::find($userId);

    // Log the retrieved user to check if it's null or valid
    \Log::info("Retrieved user: ", ['user' => $user]);

    // Check if user is found
    if (!$user) {
        \Log::error("User not found for ID: {$userId}");
        abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    // Check if two_factor_code is null
    if (!$user->two_factor_code) {
        \Log::error("two_factor_code is null for user ID: {$userId}");
        abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    $otp = $user->two_factor_code;
    $email = $user->email;

    if ($email === null) {
        // Redirect back with danger message if email is missing
        return redirect()->back()->with('warning', 'We can not find the email');
    }

    // Notify user with two-factor code
    $user->notify(new TwoFactorCodeNotification());

    return redirect()->back()->with('message', __('global.two_factor.sent_again'));
}


    public function resend2()
{
    $userId = session('id');
    $user = Admin::find($userId);

    // Check if user is found
    if (!$user) {
        abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    // Check if two_factor_code is null
    if (!$user->two_factor_code) {
        abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    $otp = $user->two_factor_code;
    $email = $user->email;

    if ($email === null) {
        // Redirect back with danger message if email is missing
        return redirect()->back()->with('warning', 'We can not find the email');
    }

    // Notify user with two-factor code
    $user->notify(new TwoFactorCodeNotification());

    return redirect()->back()->with('message', __('global.two_factor.sent_again'));
}


    public function resend1()
    {
       
        $userId = session('id');
         $user = Admin::find($userId);

        abort_if(is_object($user->two_factor_code) === null,
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        $otp = $user->two_factor_code;
        $email = $user->email;

        if ($email === null) {
        // Redirect back with danger message if phone number is missing
        return redirect()->back()->with('warning', 'We can not find the email');
    }
        // if(setting('active_otp_gateway') =='SMS'){
     //auth()->user()->notify(new TwoFactorCodeNotification());
        session('id')->notify(new TwoFactorCodeNotification());
            // }
        return redirect()->back()->with('message', __('global.two_factor.sent_again'));
    }

   


}