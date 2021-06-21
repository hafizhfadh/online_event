@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <form action="{{ route('event.save') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <!--  General -->
        <div class="form-group">
            <h2 class="heading">Create Event</h2>
            <p>Please enter event infomation and proceed to next step to build your event.</p><br>
            <div class="input-group mb-3">
                <div class="custom-file controls">
                    <label for="image" class="form-label">Event Image</label><br>
                    <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                </div>
            </div>
            <div class="controls">
                <label for="event_name" class="form-label">Event Name</label>
                <input type="text" id="event_name" class="form-control" name="event_name">
            </div>
            <div class="control">
                <div class="controls">
                    <label for="e_category" class="form-label">Event Category</label>
                    <i class="fa fa-sort"></i>
                    <select class="form-control" name="category">
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
            <div class="controls">
                <label for="hosted_by" class="form-label">Hosted By</label>
                <input type="text" id="hosted_by" class="form-control" name="hosted_by">
            </div>
            <div class="grid">
                <div class="col-1-2 col-1-4-sm">
                    <div class="controls">
                        <label for="event_date" class="form-label"><i class="fa fa-calendar"></i>Event Date</label>
                        <input type="date" id="event_date" class="form-control" name="event_date">
                    </div>
                </div>
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <label for="event_time" class="form-label"><i class="fa fa-clock-o"></i>Event Time</label>
                        <select class="form-control" name="event_time">
                            <option value="blank"></option>
                            <option value="7 AM">7 AM</option>
                            <option value="8 AM">8 AM</option>
                            <option value="9 AM">9 AM</option>
                            <option value="10 AM">10 AM</option>
                            <option value="11 AM">11 AM</option>
                            <option value="12 PM">12 PM</option>
                            <option value="1 PM">1 PM</option>
                            <option value="2 PM">2 PM</option>
                            <option value="3 PM">3 PM</option>
                            <option value="4 PM">4 PM</option>
                            <option value="5 PM">5 PM</option>
                            <option value="6 PM">6 PM</option>
                            <option value="7 PM">7 PM</option>
                            <option value="8 PM">8 PM</option>
                            <option value="9 PM">9 PM</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="controls">
                <label for="location" class="form-label">Location</label>
                <input type="text" id="location" class="form-control" name="location"><br>
            </div>
        </div>
        <div class="form-group">
            <h2 class="heading">Event Description</h2>
            <p>Please enter event description and proceed to next step to build your event.</p><br>
            <div class="grid">
                <div class="controls">
                    <label for="event_description" class="form-label">Event Description</label>
                    <textarea name="event_description" class="form-control" id="event_description"></textarea>
                </div>
                <div class="controls">
                    <label for="terms_and_condition" class="form-label">Event Terms & Conditions</label>
                    <textarea name="terms_and_condition" class="form-control" id="terms_and_condition"></textarea>
                </div>
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <label for="status" class="form-label"><i class="fa fa-clock-o"></i>Status Event</label>
                        <select class="form-control" name="status">
                            <option value="blank"></option>
                            <option value="publish">Publish</option>
                            <option value="unpublish">Unpublish</option>
                        </select>
                    </div>
            </div><br>
        </div>
        <div class="form-group">
            <h2 class="heading">Create Ticket</h2>
            <p>Please enter ticket infomation and create your event.</p><br>
            <div class="grid">
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <label for="number_of_ticket" class="form-label">Number of Ticket</label>
                        <input type="number" id="number_of_ticket" class="form-control" name="number_of_ticket">
                    </div>
                </div>
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <label for="price" class="form-label">Ticket Price</label>
                        <input type="text" id="price" class="form-control" name="price">
                    </div>
                </div>
            </div>
            <div class="controls">
                <label for="ticket_description" class="form-label">Ticket Description</label>
                <input type="text" id="ticket_description" class="form-control" name="ticket_description"><br>
            </div>
        </div>
        <button type="submit" name="Submit" class="btn btn-block btn-primary">Submit</button>
        <!-- /.form-group -->
    </form>
</div>
@endsection