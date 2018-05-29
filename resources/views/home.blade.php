@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Selamat datang {{Auth::user()->username}},
        @if(Auth::user()->user_type=="S")
            selamat belajar!
        @elseif(Auth::user()->user_type=="T")
            selamat mengajar!
        @endif

    </h1>
  </div>

@endsection
