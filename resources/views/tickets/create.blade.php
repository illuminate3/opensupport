@extends('app')

@section('content')

<div class="col-md-8 col-md-offset-2">

            <h3 class="box-title">Create new ticket</h3>


        {!! Form::open(['url' => 'tickets']) !!}

        @include ('tickets._form', [ 'submitButtonText' => 'Create'] )

        {!! Form::close() !!}

        @include ('errors.list')

    </div>
</div>

@stop