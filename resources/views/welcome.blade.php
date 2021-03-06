@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')
@if(count($errors) > 0)
<div class="row">
<div class="col-md-6">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
</div>
@endif

<div class="row">
<div class="col-md-6">
<h3>Sign Up</h3>

<form action="{{ route('signup')}}" method="post">
<div class="form-group">
<label for="email">Your Email</label>
<input class="form-control" type="text" name="email" id="email">
</div>
<div class="form-group">
<label for="first_name">Your First Name</label>
<input class="form-control" type="text" name="first_name" id="first_name">
</div>
<div class="form-group">
<label for="email">Your Password</label>
<input class="form-control" type="text" name="password" id="password">
</div>
<button type="submit" class="btn btn-primary">Submit<button>
<input type="hidden" name="_token" value="{{Session::token()}}"></input>
</form>
</div>

<div class="col-md-6">
<h3>Sign In</h3>
<form action="{{ route('signin')}}" method="post">
<div class="form-group">
<label for="email">Your Email</label>
<input class="form-control" type="text" name="email" id="email">
</div>
<div class="form-group">
<label for="email">Your Password</label>
<input class="form-control" type="text" name="password" id="password">
</div>
<button type="submit" class="btn btn-primary">Submit<button>
<input type="hidden" name="_token" value="{{Session::token()}}"></input>
</form>
</div>

</div>

@endsection