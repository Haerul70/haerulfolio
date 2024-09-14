<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSessionTimeout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && $this->sessionHasExpired($request)) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->withErrors([
                'timeout' => 'Silakan melakukan login kembali.',
            ]);
        }

        return $next($request);
    }

    protected function sessionHasExpired(Request $request)
    {
        $sessionTimeout = config('session.lifetime') * 60;
        $lastActivity = $request->session()->get('last_activity');

        if ($lastActivity && (time() - $lastActivity > $sessionTimeout)) {
            return true;
        }

        $request->session()->put('last_activity', time());
        return false;
    }
}
