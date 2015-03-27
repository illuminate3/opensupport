@extends('app')

@section('content')

<h2>Dashboard</h2>

<hr />

<div class="row">

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-folder-open"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Open tickets</span>
            <span class="info-box-number">{{ $open_tickets }}</span>
        </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number">{{ $clients }}</span>
        </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
</div>



@stop