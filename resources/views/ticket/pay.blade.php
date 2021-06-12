@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <h5 class="card-title">{{ $event->event_name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">{{ $event->event_description }}</p>
                </div>
                <div class="col-3">
                    <div id="qrcode"></div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    var qrcode = new QRCode("qrcode");

    function makeCode () {    
    var elText = "{{ $uuid }}";
    
    qrcode.makeCode(elText);
    }

    makeCode();
</script>
@endpush