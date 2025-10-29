<?php

// app/Http/Middleware/AuthenticateAdmin.php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateAdmin extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            // Always redirect to the admin login page
            return route('admin.login'); 
        }

        return null;
    }
    
    // Ensure the guard is set to 'admin'
    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = ['admin']; // Fallback to 'admin' if none specified
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }

        $this->unauthenticated($request, $guards);
    }
}