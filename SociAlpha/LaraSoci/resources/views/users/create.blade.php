@extends('layout.main')

@section('content')
 <h3>Insert User </h3>
@if($errors->any())
	@foreach($errors->all() as $error)
		<li>{{ $error }} 
		</li>
	@endforeach
@endif

{!! Form::open(array('url' => 'users')) !!}

	<div>
		{!! Form::label('name', 'Name: ' ) !!}
		{!! Form::text('Name' , null, ['class' => 'form-control']) !!}
	</div>
	<div>
		{!! Form::label('email', 'Email: ' ) !!}
		{!! Form::text('Email' , null, ['class' => 'form-control']) !!}
	</div>
		<div>
		{!! Form::label('password', 'Password: ' ) !!}
		{!! Form::password('Password' , null, ['class' => 'form-control']) !!}
	</div>
	<div>
		{!! Form::label('role', 'Role: ' ) !!}
		{!! Form::select('Role' , $roles, ['class' => 'form-control']) !!}
	</div>
	<div>
		<button type="submit" value="submit" class="btn btn-primary">Register User</button>
	</div>
{!! Form::close() !!}
@stop