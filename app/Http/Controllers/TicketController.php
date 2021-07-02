<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\Ticket;
use PDF;

class TicketController extends Controller
{
    public function pay($id)
    {
        $uuid = Str::uuid();
        $event = Event::find($id);
        return view('ticket.pay', compact('uuid','event'));
    }

    public function create(Request $request)
    {
        $event = Event::find($request->event_id);
        $ticket = Ticket::create([
            'event_id' => $event->id,
            'holder_name' => $request->holder_name,
            'holder_email' => $request->holder_email,
            'holder_phone' => $request->holder_phone,
            'payment_method' => $request->payment_method,
            'ticket_code' => Str::uuid(),
            'description' => $event->event_description,
            'price' => $event->price,
        ]);

        return redirect('ticket/print/'.$ticket->id);
    }

    public function print($id)
    {
        $ticket = Ticket::find($id);
        $event = Event::find($ticket->event_id);
        $qrcode = base64_encode(\QrCode::format('svg')->size(100)->errorCorrection('H')->generate($ticket->ticket_code));
        $pdf = PDF::loadView('ticket.print', compact('ticket','qrcode','event'));
        return $pdf->stream($ticket->ticket_code.'.pdf');
    }
}
