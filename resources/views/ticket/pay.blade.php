@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h5 class="card-title">{{ $event->event_name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $event->event_description }}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('pay.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <div class="controls">
                            <label for="event_name" class="form-label">Ticket Holder Name</label>
                            <input type="text" id="event_name" class="form-control" name="holder_name">
                        </div>
                        <div class="controls">
                            <label for="event_name" class="form-label">Ticket Holder Email</label>
                            <input type="email" id="event_name" class="form-control" name="holder_email">
                        </div>
                        <div class="controls">
                            <label for="event_name" class="form-label">Ticket Holder Phone Number</label>
                            <input type="text" id="event_name" class="form-control" name="holder_phone">
                        </div>
                        <div class="control">
                            <div class="controls">
                                <label for="e_category" class="form-label">Payment Method</label>
                                <i class="fa fa-sort"></i>
                                <select class="form-control" name="payment_method">
                                    <option value="blank"></option>
                                    <option value="Concert">Concert</option>
                                    <option value="Exhibition">Exhibition</option>
                                    <option value="Event">Event</option>
                                    <option value="Festival">Festival</option>
                                    <option value="Conference">Conference</option>
                                    <option value="Workshop">Workshop</option>
                                </select>
                            </div>
                        </div>
                        <div class="py-3">
                            <button class="btn btn-primary btn-block">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection