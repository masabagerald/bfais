<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />



@extends('layouts.roomaster')

@section('content')
    <h5>MEETING ROOM</h5>

<div class="col-md-12">

    <button class="icon-bar" data-toggle="modal" data-target="#bookingModal">make a booking</button>

</div>










<div id='calendar'></div>

    <div id="bookingModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-xs-center">book a meeting room</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('bookings.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label">requester</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="requester" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">wc Room?</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="resource" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Event</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="event" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">start time</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="start_time" class="date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">end time</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="end_time" class="date">
                            </div>
                        </div>


                       

                        <div class="form-group">
                            <label class="control-label">wc Room?</label>
                            <div>
                                <button type="submit" class="btn btn-success btn-block btn-lg">submit request</button>
                            </div>
                        </div>

                    </form>

                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
                    <script>
                        $('.date').datepicker({
                            autoclose: true,
                            dateFormat: "yy-mm-dd"
                        });
                    </script>



                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



@endsection

