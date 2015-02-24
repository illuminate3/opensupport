@extends('app')

@section('content')

<h1>Edit: {!! $client->name !!}</h1>

<hr/>

{!! Form::model( $client, ['method' => 'PATCH', 'action' => ['ClientController@update', $client->id]] ) !!}

@include ('clients._form', [ 'submitButtonText' => 'Edit'])

{!! Form::close() !!}

@include ('errors.list')

@stop