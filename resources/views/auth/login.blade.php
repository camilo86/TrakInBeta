@extends('front_base')

@section('title', 'Login')

@section('content')
	<div class="container">
    	<div class="vertical-center-row">
        <form method="POST" action="/auth/login">
        	{!! csrf_field() !!}
        	<center>
        		<h1 class="title">TrakIn</h1>
        	</center>
  			<div class="form-group">
    			<input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
  			</div>
  			<div class="form-group">
    			<input class="form-control" type="password" name="password" placeholder="Password">
  			</div>
  			<button type="submit" class="btn btn-success">Submit</button>
		</form>
    </div>
	</div>
@endsection