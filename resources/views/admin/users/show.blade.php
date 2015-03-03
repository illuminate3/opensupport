@extends('admin.index')

@section('admin.users.index')

@if ( count($user) )
<h3>{{ $user->name }}</h3>
<h5>Created at {{$user->created_at->diffForHumans() }}</h5>
<a href="/admin/users/{{ $user->id }}/edit"><h5>Edit user</h5></a>
<a href="/admin/users"><h5>Back to user list</h5></a>
<hr/>



@else

<h3>User not found.</h3>

@endif

@stop