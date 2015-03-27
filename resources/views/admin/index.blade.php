@extends('app')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Administration</h3>

            </div>
             <div class="box-body pad">
            <ul class="nav nav-pills nav-stacked">
                @if ( Request::is('admin') )
                    <li class="active"><a href="/admin/system">System</a></li>
                    <li><a href="/admin/users">User</a></li>
                @else
                <li class="{{ Request::is('admin/system*') ? 'active' : '' }}"><a href="/admin/system">System</a></li>  
                <li class="{{ Request::is('admin/users*') ? 'active' : '' }}"><a href="/admin/users">User</a></li>
                @endif
            </ul>
             </div>
        </div>
        </div>
        <div class="col-md-10">
            @if ( Request::is('admin/system') )
                @yield('admin.system')
            @elseif ( Request::is('admin/users*') )
                @yield('admin.users.index')
            @else 
                @yield('admin.system')
            @endif
        </div>
    </div>
</div>


@stop
