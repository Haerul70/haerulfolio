<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\About;
use Illuminate\Http\Request;

class ShareAboutData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Mendapatkan data About dengan user yang memiliki role_id 1
        $about = About::withTrashed()->with(['user.role'])->whereHas('user.role', function ($query) {
            $query->where('id', 1);
        })->get();

        view()->share('about', $about);

        return $next($request);
    }
}
