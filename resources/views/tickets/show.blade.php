@extends('app')

@section('content')

<div class="row">
    <div class="col-md-8">
        <ul class="timeline">
            <li class="time-label">
                <span class="bg-red">
                    {{$ticket->created_at->toFormattedDateString() }}
                </span>
            </li>
            <li>
                <i class="fa fa-folder-open bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{$ticket->created_at->diffForHumans() }}</span>
                    <h3 class="timeline-header">{{ $ticket->title }}</h3>
                    <div class="timeline-body">
                        {{ $ticket->description }}
                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Edit</a>

                    </div>
                </div>
            </li>
            <li>
                <i class="fa fa-user bg-aqua"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                    <h3 class="timeline-header no-border"><a href="#"> Demo</a> now ownes this ticket</h3>
                </div>
            </li>
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>

        <hr />
        
        <!-- Editor -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Commet Ticket</h3>
            </div><!-- /.box-header -->
            <div class="box-body pad">
                <form>
                    <ul class="wysihtml5-toolbar">
                        
                    </ul><textarea class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;" placeholder="Place some text here"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(221, 221, 221); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 10px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; -webkit-box-shadow: none; box-shadow: none; border-radius: 0px; width: 100%; height: 200px; background-color: rgb(255, 255, 255);"></iframe>
                </form>
            </div>
        </div>

    </div>

        

    <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $ticket->isFrom->name }}</h3>
            </div>
            <div class="box-body">
                <h5>phone : {{ $ticket->isFrom->phone }}</h5>
                <h5>email : {{ $ticket->isFrom->email }}</h5>
                <hr />
                <h4>Address</h4>
                <h5>{{ $ticket->isFrom->street }}</h5>
                <h5>{{ $ticket->isFrom->city }}</h5>
                <h5>{{ $ticket->isFrom->zip_code }}</h5>
                <h5>{{ $ticket->isFrom->country }}</h5>
                <hr/>
                <h4>Ticket</h4>
                <h5>Status : {{ $ticket->getTicketStatus() }}</h5>
                <h5>Assigned to : {{ $ticket->assignedTo->name }}</h5>
            </div>
        </div>
    </div>
</div>

@stop