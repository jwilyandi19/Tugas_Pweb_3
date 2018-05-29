@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>List Contest : </h2>
    <div class="list-group">
      @foreach($name as $cour)
      <a href="#" class="list-group-item">{{$cour->cour_id}}. {{$cour->cour_name}}</a>
      @endforeach

    </div>

  </div>

@endsection
