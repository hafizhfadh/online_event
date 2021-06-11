@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <form action="{{ route('event.save') }}" method="POST">
        <!--  General -->
        <div class="form-group">
            <h2 class="heading">Create Event</h2>
            <p>Please enter event infomation and proceed to next step to build your event.</p><br>
            <div class="controls">
                <input type="text" id="e_name" class="form-control" name="e_name">
                <label for="e_name" class="form-label">Event Name</label>
            </div>
            <div class="control">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select class="form-control" name="e_category">
                        <option value="blank"></option>
                        <option value="Concert">Concert</option>
                        <option value="Exhibition">Exhibition</option>
                        <option value="Event">Event Online</option>
                        <option value="Festival">Festival</option>
                        <option value="Conference">Conference</option>
                        <option value="Workshop">Workshop</option>
                    </select>
                    <label for="e_category" class="form-label">Event Category</label>
                </div>
            </div>
            <div class="controls">
                <input type="text" id="e_hosted" class="form-control" name="e_hosted">
                <label for="e_hosted" class="form-label">Hosted By</label>
            </div>
            <div class="grid">
                <div class="col-1-2 col-1-4-sm">
                    <div class="controls">
                        <input type="date" id="e_date" class="form-control" name="e_date"
                            value="<?php echo date('Y-m-d'); ?>">
                        <label for="e_date" class="form-label"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Event Date</label>
                    </div>
                </div>
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <i class="fa fa-sort"></i>
                        <select class="form-control" name="e_time">
                            <option value="blank"></option>
                            <option value="7">7 AM</option>
                            <option value="8">8 AM</option>
                            <option value="9">9 AM</option>
                            <option value="10">10 AM</option>
                            <option value="11">11 AM</option>
                            <option value="12">12 PM</option>
                            <option value="1">1 PM</option>
                            <option value="2">2 PM</option>
                            <option value="3">3 PM</option>
                            <option value="4">4 PM</option>
                            <option value="5">5 PM</option>
                            <option value="6">6 PM</option>
                            <option value="7">7 PM</option>
                            <option value="8">8 PM</option>
                            <option value="9">9 PM</option>
                        </select>
                        <label for="e_time" class="form-label"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Event Time</label>
                    </div>
                </div>
            </div>
            <div class="controls">
                <input type="text" id="e_loc" class="form-control" name="e_loc">
                <label for="e_loc" class="form-label">Location</label>
            </div>
        </div>
        <!--  Details -->
        <div class="form-group">
            <h2 class="heading">Create Ticket</h2>
            <p>Please enter ticket infomation and proceed to next step to build your event.</p><br>
            <div class="controls">
                <input type="text" id="t_name" class="form-control" name="t_name">
                <label for="t_name" class="form-label">Ticket Name</label>
            </div>
            <div class="grid">
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <input type="number" id="t_number" class="form-control" name="t_number">
                        <label for="t_number" class="form-label">Number of Ticket</label>
                    </div>
                </div>
                <div class="col-1-2 col-1-3-sm">
                    <div class="controls">
                        <input type="text" id="t_price" class="form-control" name="t_price">
                        <label for="t_price" class="form-label">Ticket Price</label>
                    </div>
                </div>
            </div>
            <div class="controls">
                <input type="text" id="t_desc" class="form-control" name="t_desc">
                <label for="t_desc" class="form-label">Ticket Description</label>
            </div>
        </div>
        <div class="form-group">
            <h2 class="heading">Event Description</h2>
            <p>Please enter event description and create your event.</p><br>
            <div class="grid">
                <div class="controls">
                    <textarea name="e_desc" class="form-control" id="e_desc"></textarea>
                    <label for="e_desc" class="form-label">Event Description</label>
                </div>
                <div class="controls">
                    <textarea name="e_tdc" class="form-control" id="e_tdc"></textarea>
                    <label for="e_tdc" class="form-label">Event Terms & Conditions</label>
                </div>
            </div>
        </div>
        <button type="submit" name="Submit" class="btn btn-block btn-primary">Submit</button>
        <!-- /.form-group -->
    </form>
</div>
@endsection