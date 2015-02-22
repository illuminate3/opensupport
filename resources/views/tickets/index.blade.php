@extends('app')

@section('content')

<h1>Ticket list</h1>

<a href="{{ action('TicketController@create') }}" class="btn btn-primary" role="button">New</a>

<hr/>

@if ( count($tickets) )
@foreach ( $tickets as $ticket )
<a href="{{ action('TicketController@show', $ticket->id ) }}"> <h3>{{ $ticket->title }}</h3></a> 
<h5>Created at : {{$ticket->created_at->diffForHumans() }}</h5>
<h5>Status : {{ $ticket->status }}</h5>
<p>{{ $ticket->description }}</p>
<hr/>

@endforeach
@else

<h3>There are no tickets.</h3>

@endif  

@stop