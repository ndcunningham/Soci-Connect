@extends('layout.main')

@section('content')

<div><a href="{{ url('/users/create')}}">Insert User </a></div>
<div><h2>List of Users</h2>
<table>
	@foreach($users as $user)
	<tr>
		<td>
			<a href="{{ url('/user', $user->Id)}}">Update </a> &nbsp;
		</td>
		<td>
			<a href="{{ url('/users/remove', $user->Id)}}">Delete </a>
		</td>
		<td>
			{{$user->Name}} {{$user->Email}} <br/>
		</td>
	</tr>
	@endforeach
</table>
@stop