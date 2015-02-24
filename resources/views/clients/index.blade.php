@extends('app')

@section('content')

<h1>Client list</h1>

<a href="{{ action('ClientController@create') }}" class="btn btn-primary" role="button">New</a>

<hr/>

<div class="input-group">
    <input type="text" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search</button>
    </span>
</div>

<hr/>

@if( count($clients) )

@foreach ( $clients as $client )

<h3><a href="{{ action('ClientController@show', $client->id ) }}">{{ $client->name }}</h3>
<h5><a href="{{ action('ClientController@edit', $client->id ) }}">edit</a></h5>
<h5>phone : {{ $client->phone }}</h5>
<h5>email : {{ $client->email }}</h5>
<hr/>
@endforeach

@else  

<h3>There are no clients created yet.</h3>
<h3>How about <a href="{{ action('ClientController@create') }}">create one</a> ?</h3>

@endif

@stop