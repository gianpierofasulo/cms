<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Hash;

use App\Notifications\TwoFactorCodeNotification;
use Illuminate\Notifications\Notifiable;


class LoginController extends Controller
{



	public function __construct()
    {
    	$this->middleware(function ($request, $next) {
         if($request->session()->has('admin')) {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    });
    }

    public function index()
    {
    	return view('admin.auth.login');
    }

     public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Admin::where('email', $request->email)->first();
        //dd($user);
        if (!$user) {
            return redirect()->back()->with('error', 'Email address not found');
        }

        if (!\Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password is wrong');
        }
         if ($user->two_factor) {
        $this->authenticated($request, $user);
        return redirect()->route('twoFactor.show'); // Redirect to two-factor authentication page
        // session(['id' => $user->id]);
        // dd(session('id'));
        

    }          
        else{
            // Save data into session
            session(['role' => 'admin']);
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['email' => $user->email]);
            session(['photo' => $user->photo]);
            session(['role_id' => $user->role_id]);

            return redirect()->route('admin.dashboard');
        }
}

    public function store1(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check_email = Admin::where('email',$request->email)->first();
        if(!$check_email)
        {
            return redirect()->back()->with('error', 'Email address not found');
        }
        else
        {
            $saved_password = $check_email->password;
            $given_password = $request->password;

            if(\Hash::check($given_password,$saved_password) == false)
            {
                return redirect()->back()->with('error', 'Password is wrong');
            }
        }

        // Saving data into session
        session(['role' => 'admin']);
        session(['id' => $check_email->id]);
        session(['name' => $check_email->name]);
        session(['email' => $check_email->email]);
        session(['photo' => $check_email->photo]);
        session(['role_id' => $check_email->role_id]);

        return redirect()->route('admin.dashboard');
    }


public function storeV2(Request $request)
{
    $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Admin::where('email', $request->email)->first();
        //dd($user);
        if (!$user) {
            return redirect()->back()->with('error', 'Email address not found');
        }

        if (!\Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password is wrong');
        }

    if ($user->two_factor) {
        $code = rand(100000, 999999);
        $user->two_factor_code = $code;
        $user->two_factor_expires_at = now()->addMinutes(10);
        $user->save();

        $user->notify(new TwoFactorCodeNotification($code));

        return redirect()->route('twoFactor.show');
    } else {
        // Save data into session
            session(['role' => 'admin']);
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['email' => $user->email]);
            session(['photo' => $user->photo]);
            session(['role_id' => $user->role_id]);

            return redirect()->route('admin.dashboard');
    }
}

        protected function authenticated(Request $request, $user)
            {
                if ($user->two_factor) {
                    $user->generateTwoFactorCode($user); // Pass the user to generateTwoFactorCode
            }

       }
}
