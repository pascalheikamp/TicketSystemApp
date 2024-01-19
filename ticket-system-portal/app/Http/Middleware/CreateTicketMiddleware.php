<?php

namespace App\Http\Middleware;

use App\Models\Review;
use App\Models\Ticket;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

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
        $tickets = Ticket::with('review')->where('user_id', '=', $id)->get();
        //dd($tickets);
//        $reviewed_tickets = Review::where('ticket_id', '=', $tickets)->count();
//        dd($reviewed_tickets);
        $ticketCount = Ticket::where('user_id', $id)->count();
        $limit = 3;
        foreach ($tickets as $ticket) {
            $reviewed_tickets = $ticket->review->count();
            dd($reviewed_tickets);
//                if ($ticketCount >= $limit && $reviewed_ticket == 1) {
//                    return $next($request);
//                } elseif ($ticketCount >= $limit && $reviewed_ticket == 0) {
//                    return redirect('/student/dashboard')->with('message', 'You reached the limit');
//                } else {
//                   dd('error');
//                }
            }
//        if($reviewed_ticket > 0) {
//            dd("Hello world");
//        }
//        else {
//            dd("error");
//        }
//        if ($reviewed_tickets >= 3) {
//            return $next($request);
//        }
        return $next($request);
    }
}
