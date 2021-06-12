<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('event.create');
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('event.show', compact('event'));
    }

    public function save(Request $request)
    {
        $event = Event::create($request->all());
        return redirect('/');
    }
}
