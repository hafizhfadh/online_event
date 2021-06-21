@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
    @foreach ($events as $event)
        @if($event->status == 'publish')
        <div class="col-4 py-4">
            <div class="card">
                <img src="/storage/images/{{$event->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-bolder">{{$event->event_name}}</h5>
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
    <div class="d-flex justify-content-center">
        {!! $events->links() !!}
    </div> 
</div>
@endsection