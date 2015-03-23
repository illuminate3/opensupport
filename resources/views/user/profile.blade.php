@extends ('app')

@section ('content')

<h3>{{$user->name}} profile</h3>
<p>Created: {{ $user->created_at }}</p>
<hr />
<h4>Email: {{ $user->email }}</h4>
<p>Password reset ? </p>
<p>Settings ? </p>


@endsection