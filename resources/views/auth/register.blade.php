@extends('main')

@section('title','| Login')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!! Form::open() !!}
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::label('email', 'Email:')}}
		{{ Form::email('email', null, ['class' => 'form-control']) }}

		{{ Form::label('password', 'Password:')}}
		{{ Form::password('password', ['class' => 'form-control']) }}

		{{ Form::label('confirm_password', 'Confirm Password:') }}
		{{ Form::password('confirm_password', ['class' => 'form-control']) }}
		<hr>
		{{ Form::submit('Register',['class'=>'btn btn-info btn-block']) }}
		{!! Form::close() !!}
	</div>
</div><!-- End of  row -->
@endsection