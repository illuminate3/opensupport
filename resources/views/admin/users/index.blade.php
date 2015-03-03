@extends('admin.index')

@section('admin.users.index')

<h3>Users Management</h3>

<a href="{{ action('UserController@create') }}" class="btn btn-primary" role="button">New</a>

<hr/>

@foreach ( $users as $user )

<h3><a href="{{ action('UserController@show', $user->id ) }}">{{ $user->name }}</h3>
<h5><a href="{{ action('UserController@edit', $user->id ) }}">edit</a></h5>
<h5>email : {{ $user->email }}</h5>
<hr/>

@endforeach

@stop