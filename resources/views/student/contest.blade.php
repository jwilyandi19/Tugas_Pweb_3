@extends('layouts.app')

@section('content')
    @if(session('status'))
    {{session('status')}}
    <p>You are logged in</p>
    @endif
    <a href="{{route('logout')}}">

    Logout</a>

    <p>This displays contest available</p>


@endsection
