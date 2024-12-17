<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Проверка, является ли пользователь администратором
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request); // Если администратор, продолжить выполнение запроса
        }

        // Если не администратор, перенаправление
        return redirect('/main')->with('error', 'Access denied. You do not have access to this resource.');
    }
}
