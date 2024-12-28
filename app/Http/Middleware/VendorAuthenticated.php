<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('vendor')->check()) {
            return $next($request);
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect(route('vendorLogin'));
        }
    }
}
