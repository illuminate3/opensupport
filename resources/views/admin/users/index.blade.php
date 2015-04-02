@extends('admin.index')

@section('admin.users.index')

<div class="col-md-10">
    <div class="box box-solid">
        <div class="box-header with-border">

            <h3 class="box-title">Users Management</h3>
        </div>
        <div class="box-body">

            <a href="{{ action('UserController@create') }}" class="btn btn-primary" role="button">New</a>
            <a href="#" class="btn btn-primary" role="button">Edit</a>
            <a href="#" class="btn btn-primary" role="button">Delete</a>

            <hr/>

            <table id="users" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ( $users as $user )
                    <tr>
                        <td>
                            <input type="checkbox" name="option1" value="Selected"> 
                        </td>
                        <td>
                            <a href="{{ action('UserController@show', $user->id ) }}">{{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        
                        <td>
                            {{ $user->getRole() }}
                        </td>
                        
                        <td>
                            {{ $user->getStatus() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop

@section('script')

<script>
    $(document).ready(function () {
        $("#users").dataTable();
    });
</script>

@stop