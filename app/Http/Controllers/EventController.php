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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
            // Else add a dummy image
        else {
            $fileNameToStore = 'noimage.jpg';
        }

        $event = Event::create([
            'event_name' => $request->event_name,
            'catagory' => $request->category,
            'image' => $fileNameToStore,
            'hosted_by' => $request->hosted_by,
            'event_date' => $request->event_date,
            'event_time' => $request->event_time,
            'location' => $request->location,
            'event_description' => $request->event_description,
            'terms_and_condition' => $request->terms_and_condition,
            'status' => $request->status,
            'number_of_ticket' => $request->number_of_ticket,
            'price' => $request->price,
            'ticket_description' => $request->ticket_description
        ]);

        return redirect('/');
    }
}
