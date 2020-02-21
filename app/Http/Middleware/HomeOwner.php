<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HomeOwner
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
        $user_type= Auth::user()->user_type;

        if ($user_type != '1') {
            return redirect()->back();
        }

        return $next($request);
    }
}
