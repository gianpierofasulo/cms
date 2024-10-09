<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use App\Models\Admin\Admin; // Make sure to import the Admin model

class TwoFactorMiddleware
{

    public function handle($request, Closure $next)
    {
        $userId = session('id');
        $user = Admin::find($userId);
       // dd($userId, optional($user)->two_factor_code); 

       // $user = auth()->user();

        if ($user && $user->two_factor_code) {
            if (Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $user->two_factor_expires_at)->lt(now())) {
                $user->resetTwoFactorCode();
                auth()->logout();

                return redirect()->route('admin.login')->with('info', __('global.two_factor.expired'));
            }

            if (! $request->is('two-factor*')) {
                return redirect()->route('twoFactor.show');
            }
        }

        return $next($request);
    }

    public function handle55($request, Closure $next)
    {
        $userId = session('id');
        $user = Admin::find($userId);
        
        if ($user && $user->two_factor_code) {
            if (Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $user->two_factor_expires_at)->lt(now())) {
                $user->resetTwoFactorCode();
                auth()->logout();

                return redirect()->route('login')->with('info', __('global.two_factor.expired'));
            }

            if (! $request->is('two-factor*')) {
                return redirect()->route('twoFactor.show');
            }
        }

        return $next($request);
    }

    public function handle11($request, Closure $next)
    {
        $userId = session('id');
        
        // Retrieve the user from the database using the ID
        $user = Admin::find($userId);

        if (!$user || !$user->two_factor_code) {
            // Handle the case where the user does not exist or two_factor_code is null
            return redirect()->route('admin.login')->with('info', __('global.two_factor.disabled'));
        }

        if (Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $user->two_factor_expires_at)->lt(now())) {
            $user->resetTwoFactorCode();
            session('id')->logout();

            return redirect()->route('admin.login')->with('info', __('global.two_factor.expired'));
        }

        if (!$request->is('two-factor*')) {
            return redirect()->route('twoFactor.show');
        }

        return $next($request);
    }
}
