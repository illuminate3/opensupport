@extends('app')

@section('content')

<h3>{{ $client->name }}</h3>
<h5><a href="{{ action('ClientController@edit', $client->id ) }}">edit</a></h5>
<h5><a href="{{ action('ClientController@index') }}">back</a></h5>
<h5>phone : {{ $client->phone }}</h5>
<h5>email : {{ $client->email }}</h5>
<h4>Address</h4>
<h5>{{ $client->street }}</h5>
<h5>{{ $client->city }}</h5>
<h5>{{ $client->zip_code }}</h5>
<h5>{{ $client->country }}</h5>

@stop