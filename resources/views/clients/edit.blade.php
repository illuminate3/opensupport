@extends('app')

@section('content')

<div class="col-md-8 col-md-offset-2">

    <div class="box box-solid">
        <div class="box-header with-border">

            <h3 class="box-title">Edit: {!! $client->name !!}</h3>
        </div>
        <div class="box-body">

            {!! Form::model( $client, ['method' => 'PATCH', 'action' => ['ClientController@update', $client->id]] ) !!}

            @include ('clients._form', [ 'submitButtonText' => 'Edit'])

            {!! Form::close() !!}

            @include ('errors.list')

        </div>
    </div>
</div>    

@stop