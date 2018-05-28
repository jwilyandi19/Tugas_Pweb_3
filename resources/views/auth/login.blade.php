@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('login')}}">


    {{ csrf_field() }}

    <div>
    <label for="username">Username</label>
    <input id="username" type="username" name="username" value="{{ old('username') }}" required autofocus>
    </div>

    <div>
    <label for="password">Password</label>
    <input id="password" type="password" name="password" required>
    </div>
    <label>
    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
    </label>

    <button type="submit">Login</button>

@endsection
