@extends('app')

@section('content')

<h1>Settings</h1>

<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div role="tabpanel">
                <ul class="nav nav-pills nav-stacked" role="tablist">
                    <li role="presentation" class="active"><a href="#system" aria-controls="home" role="tab" data-toggle="tab">System</a></li>
                    <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">User</a></li>
                </ul>
            </div>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="system">
                    @include('settings.system')
                </div>
                <div role="tabpanel" class="tab-pane" id="users">
                    @include('settings.users')
                </div>                    
            </div>
        </div>
    </div>
</div>

@stop
