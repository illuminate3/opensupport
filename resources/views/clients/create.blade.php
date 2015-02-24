@extends('app')

@section('content')

<h2>Create new Client</h2>

<hr/>

{!! Form::open(['url' => 'clients']) !!}

@include ('clients._form', [ 'submitButtonText' => 'Create'] )

{!! Form::close() !!}

@include ('errors.list')

@stop