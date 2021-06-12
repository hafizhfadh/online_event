<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event;

class TicketController extends Controller
{
    public function pay($id)
    {
        $uuid = Str::uuid();
        $event = Event::find($id);
        return view('ticket.pay', compact('uuid','event'));
    }
}
