@extends('layouts.headerAndFooter')
@section('content')
	<p align="center">關於我的五個優點</p>
	@foreach($advantages as $advantage)
		<p align="center"><strong>{{$advantage->advantage}}</strong></p>
	@endforeach
@endsection