@extends('admin.index')

@section('admin.users.index')

<h3>Editing {!! $user->name !!}</h3>

<hr/>

{!! Form::model( $user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]] ) !!}

@include ('admin.users._form', [ 'submitButtonText' => 'Edit'])

{!! Form::close() !!}

@include ('errors.list')

@stop