@extends('layout.main')

@section('content')
<h3>Edit User </h3>

{!! Form::open(array('url' => 'users/' . $user->Id)) !!}

<div>
	{!! Form::label('name', 'Name: ' ) !!}
	{!! Form::text('Name' , $user->name, ['class' => 'mulass']) !!}
</div>
<div>
	{!! Form::label('email', 'Email: ' ) !!}
	{!! Form::text('Email' , $user->email, ['class' => 'mulass']) !!}
</div>
<div>
{!! Form::submit('Update User') !!}
</div>
{!! Form::close() !!}
@stop
@endsection