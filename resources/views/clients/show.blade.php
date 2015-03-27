@extends('app')

@section('content')

<div class="col-md-8 col-md-offset-2">

    <div class="box box-solid">
        <div class="box-header with-border">

            <h3 class="box-title">Clients</h3>
        </div>
        <div class="box-body">

            <a href="{{ action('ClientController@edit', $client->id ) }}" class="btn btn-primary" role="button">Edit</a>
            <a href="#" class="btn btn-primary" role="button">Delete</a>

            <hr/>

            <h3>{{ $client->name }}</h3>
            <h5>phone : {{ $client->phone }}</h5>
            <h5>email : {{ $client->email }}</h5>
            <h4>Address</h4>
            <h5>{{ $client->street }}</h5>
            <h5>{{ $client->city }}</h5>
            <h5>{{ $client->zip_code }}</h5>
            <h5>{{ $client->country }}</h5>

        </div>
    </div>
</div>A
@stop