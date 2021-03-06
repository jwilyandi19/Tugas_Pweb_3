@extends('layouts.app')

@section('content')
{{$id = Auth::user()->user_id}}
<div class="container">
	<form method = "POST" action = "{{URL::to("/create/$id/created")}}">
	<input type="hidden" name="questnum" value="{{$quest_num}}">
	{{csrf_field()}}
	@for($forms = 1; $forms <= $quest_num; $forms++)
		<div class="form-group">
			<label for="question[{{$forms}}]">Question {{$forms}} </label>
			<input name="question[{{$forms}}]" class="form-control input-lg">
		</div>
		<div>
			<label for="optiona[{{$forms}}]">A</label>
			<input name="optiona[{{$forms}}]">
		</div>
		<div>
			<label for="optionb[{{$forms}}]">B</label>
			<input name="optionb[{{$forms}}]">
		</div>
		<div>
			<label for="optionc[{{$forms}}]">C</label>
			<input name="optionc[{{$forms}}]">
		</div>
		<div>
			<label for="optiond[{{$forms}}]">D</label>
			<input name="optiond[{{$forms}}]">
		</div>
		<div>
			<label for="trueanswer[{{$forms}}]">True Answer</label>
			<input name="trueanswer[{{$forms}}]">
		</div>

	@endfor

	<button type="submit"  class="wrapper button btn">Submit</button>


	</form>

</div>

@endsection
