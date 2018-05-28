@extends('layouts.app')

@section('content')
    <form method ="POST" action="{{route('register')}}">
    {{ csrf_field() }}
    <div>
    <label for="username">Username</label>
    <input id="username" type="text" name="username" value="{{old('username')}}" required autofocus>
    @if ($errors->has('username'))
            <span>
                <strong>{{ $errors->first('username') }}</strong>
            </span>
    @endif
    </div>

    <div>
    <label for="email">Email Address</label>
    <input id="email" type="email" name="email" value="{{old('email')}}" required>
     @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
    @endif
    </div>
    <div>
    <label for="school">School</label>
    <input id="school" type="text" name="school" value="{{old('school')}}">
     @if ($errors->has('school'))
            <span>
                <strong>{{ $errors->first('school') }}</strong>
            </span>
    @endif
    </div>
    <div>
    <label for="password">Password</label>
    <input id="password" type="password" name="password" required>
    @if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
    @endif
    </div>
    <div>
    <label for="password-confirm">Confirm Password</label>
    <input id="password-confirm" type="password" name="password_confirmation" required>
     @if ($errors->has('password_confirmation'))
            <span>
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
    @endif
    </div>
    <div>
    <label for="user_type">Sign Up as</label>
    <select id="usertype" name="user_type">
        <option value="S">Student</option>
        <option value="T">Teacher</option>
    </select>
    </div>
    <div>
    <button type="submit">Register</button>
    </div>
    </form>


@endsection
