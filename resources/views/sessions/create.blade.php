@extends('layouts.master')

@section('content')
	

<form method="POST" action="/login">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="email">Email address</label>
		<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection