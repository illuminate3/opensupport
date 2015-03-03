@extends('admin.index')

@section('admin.users.index')

<h3>Create new user</h3>

<hr/>

{!! Form::open(['url' => 'admin/users']) !!}

@include ('admin.users._form', [ 'submitButtonText' => 'Create'] )

{!! Form::close() !!}

@include ('errors.list')

@stop