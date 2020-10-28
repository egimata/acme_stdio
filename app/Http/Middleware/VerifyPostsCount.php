<?php

namespace App\Http\Middleware;

use Closure;
use App\Post;

class VerifyPostsCount
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
        if(Post::all()->count() === 0){
            return redirect()->back();
        }
        return $next($request);
    }
}
