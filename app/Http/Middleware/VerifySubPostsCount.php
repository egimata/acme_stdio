<?php

namespace App\Http\Middleware;

use Closure;
use App\SubPost;

class VerifySubPostsCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(SubPost::all()->count() === 0){
            return redirect()->back();
        }
        return $next($request);
    }
}
