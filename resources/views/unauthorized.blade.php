@extends('layouts.app')

@section('content')
	
	@if(session('status'))
	<p>Only {{session('status')}} allowed</p>
	@endif

@endsection