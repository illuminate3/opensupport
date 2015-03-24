@extends('app')

@section('content')

@if ( count($ticket) )

<div class="box box-solid">
    <div class="box-header with-border">

        <h3 class="box-title">{{ $ticket->title }}</h3>
    </div>
    <div class="box-body">


        <a href="/tickets/{{ $ticket->id }}/edit"><h5>Edit ticket</h5></a>
        <a href="/tickets"><h5>Back to ticket list</h5></a>
        <hr/>

        <h5>Ticket id: {{ $ticket->id }}</h5>
        <h5>Status : {{ $ticket->getTicketStatus() }}</h5>
    </div>
</div>

        <hr/>

        <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-red">
                    {{$ticket->created_at}} ({{$ticket->created_at->diffForHumans() }})
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                    <h3 class="timeline-header">Ticket created</h3>
                    <div class="timeline-body">
                        {{ $ticket->description }}
                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-user bg-aqua"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                    <h3 class="timeline-header no-border"><a href="#"> Demo</a> now ownes this ticket</h3>
                </div>
            </li>
            <!-- END timeline item -->
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>

@else

<h3>That ticket don't exist.</h3>

@endif  

@stop