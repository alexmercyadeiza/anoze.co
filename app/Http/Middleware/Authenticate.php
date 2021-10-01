<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Arr;
use Closure;

class Authenticate extends Middleware
{
    protected $guards = [];

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;

        return parent::handle($request, $next, ...$guards);
    }

    /*protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('auth.login');
        }
    }*/

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {

            if (Arr::first($this->guards) === 'manager') {
                return route('manager.auth.login');
            }

            if (Arr::first($this->guards) === 'director') {
                return route('director.auth.login');
            }

            if (Arr::first($this->guards) === 'user') {
                return route('admin.auth.login');
            }
        }
    }
}
