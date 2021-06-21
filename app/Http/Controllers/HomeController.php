<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::orderBy("created_at","desc")->paginate(9)->withQueryString();
        return view('home', compact('events'));
    }
}
