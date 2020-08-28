<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->ban) {
            $banned = Auth::user()->ban == '1';
            Auth::logout();
            if ($banned == 1) {
                $message = 'Your Account has been Banned, Please contact Administrator.';
            }
            return redirect()->route('login')->with('status', $message)->withErrors(['email' => 'Your Account has been Banned, Please contact Administrator.']);
        }



if (Auth::check())
{
    $expirseAt = Carbon::now()->addMinutes(1);
Cache::put('user-is-online' . Auth::user()->id, true, $expirseAt);
}
        return $next($request);

    }

}
