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
<table class="text-center table table-bordered">
    <thead>
        <tr>
            <th class="text-center">Select</th>
            <th class="text-center">Title</th>
            <th class="text-center">Create</th>
            <th class="text-center">Owner</th>
            <th class="text-center">Client</th>
            <th class="text-center">Status</th>
        </tr>
    </thead>
    @foreach ( $tickets as $ticket )
    <tr>
        <td>
            <input type="checkbox" name="option1" value="Selected"> 
        </td>
        <td>
            <div class="text-left">
                <a href="{{ action('TicketController@show', $ticket->id ) }}"> {{ $ticket->title }}</a> 
            </div>

        </td>
        <td>
            {{ $ticket->created_at->diffForHumans() }}
        </td>
            
        <td>
            @if ($ticket->assignedTo == null )
            <h5>unassigned.</h5>
            @else
            <h5>{{ $ticket->assignedTo->name }}</h5>
            @endif
        </td>

        <td>
        @if ( $ticket->isFrom == null )
            <h5>unassigned.</h5>
        @else
            <h5>{{ $ticket->isFrom->name }}</h5>
        @endif
        </td>
        <td>
            <h5>{{ $ticket->getTicketStatus() }}</h5>
        </td>
        </tr>

        @endforeach

</table>

@else

<h3>There are no tickets.</h3>

@endif  

@stop   