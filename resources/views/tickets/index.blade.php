@extends('app')

@section('content')

<h1>Ticket list</h1>

<a href="{{ action('TicketController@create') }}" class="btn btn-primary" role="button">New</a>
<a href="#" class="btn btn-primary" role="button">Merge</a>
<a href="#" class="btn btn-primary" role="button">Delete</a>
<a href="#" class="btn btn-primary" role="button">Close</a>
<a href="#" class="btn btn-primary" role="button">Assigned to</a>

<hr/>

@if ( count($tickets) )

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Ticket list</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="tickets" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Title</th>
                    <th>Create</th>
                    <th>Owner</th>
                    <th>Client</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $tickets as $ticket )
                <tr>
                    <!-- Select -->
                    <td>
                        <input type="checkbox" name="option1" value="Selected"> 
                    </td>
                    <!-- Title -->
                    <td>
                        <div class="text-left">
                            <a href="{{ action('TicketController@show', $ticket->id ) }}"> {{ $ticket->title }}</a> 
                        </div>
                    </td>
                    <!-- Create -->
                    <td>
                        {{ $ticket->created_at->diffForHumans() }}
                    </td>
                    <!-- Owner -->
                    <td>
                        @if ($ticket->assignedTo == null )
                        <h5>unassigned</h5>
                        @else
                        <h5>{{ $ticket->assignedTo->name }}</h5>
                        @endif
                    </td>
                    <!-- Client -->
                    <td>
                        @if ( $ticket->isFrom == null )
                        <h5>unassigned</h5>
                        @else
                        <h5>{{ $ticket->isFrom->name }}</h5>
                        @endif
                    </td>
                    <!-- Status -->
                    <td>
                        <h5>{{ $ticket->getTicketStatus() }}</h5>
                    </td>
                </tr>

                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Select</th>
                    <th>Title</th>
                    <th>Create</th>
                    <th>Owner</th>
                    <th>Client</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
@else

<h3>There are no tickets.</h3>

@endif  

@stop   

@section('script')

<script>
    $(document).ready(function () {
        $("#tickets").dataTable();
    });
</script>

@stop
