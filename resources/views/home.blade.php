@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
    @foreach ($events as $event)
        @if($event->status == 'publish')
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$event->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$event->event_name}}</h5>
                    <p class="card-text">{{$event->event_description}}</p>
                </div>
                <div class="card-footer">
                    <center>
                        <a href="{{ url('/event/show/') }}/{{$event->id}}" class="btn btn-primary btn-block">Show Event Detail</a>
                    </center>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection