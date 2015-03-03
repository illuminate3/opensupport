@extends('app')

@section('content')

@if ( count($ticket) )

<h3>{{ $ticket->title }}</h3>

<a href="/tickets/{{ $ticket->id }}/edit"><h5>Edit ticket</h5></a>
<a href="/tickets"><h5>Back to ticket list</h5></a>
<hr/>

<h5>Created at : {{$ticket->created_at->diffForHumans() }}</h5>
<h5>Ticket id: {{ $ticket->id }}</h5>
<h5>Status : {{ $ticket->getTicketStatus() }}</h5>

<p>{{ $ticket->description }}</p>

<hr/>

@else

<h3>That ticket don't exist.</h3>

@endif  

@stop