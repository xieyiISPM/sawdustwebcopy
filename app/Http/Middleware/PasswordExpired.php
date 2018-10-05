<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class PasswordExpired
{

    public function handle($request, Closure $next)
    {
        // if the updated date is null then that means it was not created in the conventional means.  force a reset
        $user = $request->user();
        if (null == $user->updated_at){
            return redirect()->route('password.expired');
        }
        return $next($request);
    }
}