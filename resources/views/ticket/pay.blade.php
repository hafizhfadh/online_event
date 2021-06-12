@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->event_name }} {{ $uuid }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">{{ $event->event_description }}</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
@endsection