@extends('app')

@section('content')

<h1>Create new ticket</h1>

<hr/>

{!! Form::open(['url' => 'tickets']) !!}

@include ('tickets._form', [ 'submitButtonText' => 'Create'] )

{!! Form::close() !!}

@include ('errors.list')

@stop