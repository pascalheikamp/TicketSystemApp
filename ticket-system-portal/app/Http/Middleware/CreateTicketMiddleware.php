<?php

namespace App\Http\Middleware;

use App\Models\Review;
use App\Models\Ticket;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use function Webmozart\Assert\Tests\StaticAnalysis\length;

class CreateTicketMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = Auth::user()->id;
        $tickets = Ticket::where('user_id', '=', $id)->doesntHave('review')->count();
        if ($tickets >= 3) {
            return redirect('/student/dashboard')->with('limit', 'You reach the limit, please wait till the ticket is reviewed');
        }

        return $next($request);
    }
}
