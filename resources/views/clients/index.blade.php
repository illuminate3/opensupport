@extends('app')

@section('content')

<div class="col-md-8 col-md-offset-2">

    <div class="box box-solid">
        <div class="box-header with-border">

            <h3 class="box-title">Clients</h3>
        </div>
        <div class="box-body">

            <a href="{{ action('ClientController@create') }}" class="btn btn-primary" role="button">New</a>
            <a href="#" class="btn btn-primary" role="button">Delete</a>

            <hr/>

            @if( count($clients) )

            <table id="clients" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ( $clients as $client )
                    <tr>
                        <td>
                            <input type="checkbox" name="option1" value="Selected"> 
                        </td>
                        <td>
                            <a href="{{ action('ClientController@show', $client->id ) }}">{{ $client->name }}
                        </td>
                        <td>
                            {{ $client->phone }}
                        </td>
                        <td>
                            {{ $client->email }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else  

<h3>There are no clients created yet.</h3>
<h3>How about <a href="{{ action('ClientController@create') }}">create one</a> ?</h3>

@endif

@stop