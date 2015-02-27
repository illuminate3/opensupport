@extends('app')

@section('content')

<h1>Settings</h1>
<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">

            <ul class="nav nav-pills nav-stacked">
                @if ( Request::is('settings') )
                    <li class="active"><a href="/settings/system">System</a></li>
                    <li><a href="/settings/users">User</a></li>
                @else
                <li class="{{ Request::is('settings/system') ? 'active' : '' }}"><a href="/settings/system">System</a></li>  
                <li class="{{ Request::is('settings/users') ? 'active' : '' }}"><a href="/settings/users">User</a></li>
                @endif
            </ul>
        </div>
        <div class="col-md-10">
            @if ( Request::is('settings/system') )
                @include ('settings.system')
            @elseif ( Request::is('settings/users') )
                @include ('settings.users')
            @else 
                @include ('settings.system')
            @endif
        </div>
    </div>
</div>

@stop
