@extends('admin.index')

@section('admin.users.index')

@if ( count($user) )

<div class="col-md-10">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title"><a href="/admin/users">Users</a> \ {{ $user->name }}</h3>
        </div>
        <div class="box-body">

            <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-primary" role="button">Edit</a>

            <hr />

            <h5>Created at {{$user->created_at->diffForHumans() }}</h5>

            <h4>Email: {{ $user->email }}</h4>
            <h4>Status: {{ $user->getStatus() }}</h4>
            <h4>Role: {{ $user->getRole() }}</h4>

        </div>
    </div>
</div>

@else

<h3>User not found.</h3>

@endif

@stop