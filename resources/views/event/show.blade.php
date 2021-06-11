@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$event->event_name}}</h5>
            <p class="card-text">Hosted BY : {{$event->hosted_by}}</p>
            <p class="card-text">{{$event->event_description}}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Term And Condition : {{$event->event_description}}</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>
    </div>
</div>
@endsection