@extends('front_base')

@section('title', 'Register')

@section('content')
	<div class="container">
    	<div class="vertical-center-row">
        <form method="POST" action="/auth/register">
        	{!! csrf_field() !!}
        	<center>
        		<h1 class="title">TrakIn</h1>
        	</center>
  			<div class="form-group">
    			<input class="form-control" type="name" name="name" value="{{ old('name') }}" placeholder="Name">
  			</div>
  			<div class="form-group">
    			<input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
  			</div>
  			<div class="form-group">
    			<input class="form-control" type="password" name="password" placeholder="Confirm Password">
  			</div>
  			<div class="form-group">
    			<input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
  			</div>
  			<button type="submit" class="btn btn-success">Submit</button>
		</form>
    </div>
	</div>
@endsection