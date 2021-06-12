@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card">
        <img src="{{ $event->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$event->event_name}}</h5>
            <p class="card-text">Hosted BY : {{$event->hosted_by}}</p>
            <p class="card-text">Price : {{$event->price}}</p>
            <p class="card-text">{{$event->event_description}}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Term And Condition : {{$event->terms_and_condition}}</li>
                <li class="list-group-item">Ticket Price : {{$event->price}} </li>
                <li class="list-group-item">Ticket Description : {{$event->ticket_description}}</li>
                <li class="list-group-item">Location : {{$event->location}}</li>
                <li class="list-group-item">Event Date : {{$event->event_date}}</li>
                <li class="list-group-item">Event Time : {{$event->event_time}}</li>
                <li class="list-group-item">Event Category : {{$event->catagory}} </li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('ticket.pay',$event->id) }}" class="btn btn-block btn-primary w-100">Take This Event</a>
        </div>
    </div>
</div>
@endsection