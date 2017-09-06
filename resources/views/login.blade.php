@extends('layouts.headerAndFooter')

@section('content')


	<form method="POST" action="/authenticate">
	{{ csrf_field() }}
  		<div class="form-group col-xs-2">
    		<label for="account">帳號</label>
    		<input name="account" type="text" class="form-control ">
  		</div>
  		<div class="form-group col-xs-2">
   			<label for="password">Password</label>
    		<input name="password" type="password" class="form-control" >
  		</div>
  		<br>
  		<button type="submit" class="btn btn-primary">登入</button>
		</form>

@endsection