@extends('admin.index')

@section('admin.users.index')

<div class="col-md-10">
    <div class="box box-solid">
        <div class="box-header with-border">

            <h3 class="box-title"><a href="/admin/users">Users</a> \  {!! $user->name !!}</h3>
        </div>
        <div class="box-body">

            {!! Form::model( $user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]] ) !!}

            @include ('admin.users._form', [ 'submitButtonText' => 'Edit'])

            {!! Form::close() !!}

            @include ('errors.list')

        </div>
    </div>
</div>

@stop