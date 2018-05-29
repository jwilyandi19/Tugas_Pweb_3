@extends('layouts.app')

@section('content')
	<form method = "POST" action = "{{URL::to('/create/created')}}">

	{{ csrf_field() }}


	<div>
	<label for="cour_name">Course Name</label>
	<input id="cour_name" type="text" name="cour_name">
	@if ($errors->has('cour_name'))
            <span>
                <strong>{{ $errors->first('cour_name') }}</strong>
            </span>
    @endif
    </div>
    <div>
	<label for="cour_desc">Course Description</label>
	<input id="cour_desc" type="text" name="cour_desc">
	@if ($errors->has('cour_desc'))
            <span>
                <strong>{{ $errors->first('cour_desc') }}</strong>
            </span>
    @endif
    </div>

    <div>
    <label for="quest_num">Number of Questions</label>
    <input id="quest_num" type="text" name="quest_num">
    @if ($errors->has('quest_num'))
            <span>
                <strong>{{ $errors->first('quest_num') }}</strong>
            </span>
    @endif
    </div>


    <div>
    <button type="submit">Create Course</button>
    </div>

    </form>

@endsection
	