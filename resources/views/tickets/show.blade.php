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
              @foreach ( $ticket->comments as $comment )
            <li>
                <i class="fa fa-folder-open bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{ $comment->created_at->diffForHumans() }} </span>
                    @if( $comment->creator_name )
                       <h3 class="timeline-header">Added by {{ $comment->creator_name }}</h3>
                    @else
                       <h3 class="timeline-header">Added by unknowend </h3>
                    @endif                    
                    <div class="timeline-body">
                        {{ $comment->description }}
                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Edit</a>
                    </div>
                </div>
            </li>
              @endforeach
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

                {!! Form::model( $ticket, ['method' => 'POST', 'action' => ['TicketController@addComment'] ] ) !!}
                <div class="form-group">
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter text ...' ] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::hidden('ticket_id', $ticket->id) !!}
                    {!! Form::hidden('creator_name',  Auth::user()->name ) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Comment', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}

                @include ('errors.list')
            </div>
        </div>

    </div>



    <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="{{ action('ClientController@show', $ticket->isFrom->id ) }}">{{ $ticket->isFrom->name }}</a>
                </h3>
            </div>
            <div class="box-body">
                <h5>phone : {{ $ticket->isFrom->phone }}</h5>
                <h5>email : {{ $ticket->isFrom->email }}</h5>
                <hr />
                <h4>Ticket</h4>
                {!! Form::model( $ticket, ['method' => 'PATCH', 'action' => ['TicketController@update', $ticket->id]] ) !!}
                <div class="form-group">
                    {!!  Form::label('status','Status',array('id'=>'','class'=>'')) !!}
                    {!! Form::select('status', array(
                    '0' => 'Open',
                    '1' => 'Close',
                    '2' => 'Pending',
                    '3' => 'Solved'
                    )) !!}

                </div>
                <div class="form-group">
                    {!!  Form::label('assignedTo','Assigned to',array('id'=>'','class'=>'')) !!}
                    {!! Form::select('assignedTo', array(
                    '0' => 'Admin',
                    '1' => 'Demo',
                    )) !!}

                </div>
                <div class="form-group">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}

                @include ('errors.list')
            </div>
        </div>
    </div>
</div>

@stop

@section('script')

<script>
    $('.textarea').wysihtml5({
        toolbar: {
            "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
            "emphasis": false, //Italics, bold, etc. Default true
            "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "html": false, //Button which allows you to edit the generated HTML. Default false
            "link": false, //Button to insert a link. Default true
            "image": false, //Button to insert an image. Default true,
            "color": false, //Button to change color of font  
            "blockquote": false, //Blockquote  
            "size": < buttonsize > //default: none, other options are xs, sm, lg
        }
    });
</script>

@stop