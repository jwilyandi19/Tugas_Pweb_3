@extends('layouts.app')

@section('content')
    @if(session('status'))
    {{session('status')}}
    <p>You are logged in</p>
    @endif
    <a href="{{route('logout')}}">

    Logout</a> 
    {{Auth::user()->username}}
    @if(Auth::user()->user_type=="S")
        Student
    @elseif(Auth::user()->user_type=="T")
        Teacher
    @endif

@endsection
