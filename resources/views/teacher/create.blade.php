@extends('layouts.app')

@section('content')
	<!-- <div class="container">
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
    </div> -->

	<div class="container">
		<form method = "POST" action = "{{URL::to('/create/created')}}">

		{{ csrf_field() }}

	    <div class="form-group">
	      <label for="cour_name">Nama kontes (wajib diisi)</label>
	      <input type="contest" class="form-control input-lg" id="contest" placeholder="" name="cour_name" required>
					@if ($errors->has('contest'))
										<span>
												<strong>{{ $errors->first('contest') }}</strong>
										</span>
					@endif
	    </div>
	    <div class="form-group">
	      <label for="cour_desc">Deskripsi kontes (wajib diisi)</label>
	      <input type="description" class="form-control input-lg" id="description" placeholder="Ex: A #math #blindcontest to introduce the basics of #algebra to #grade8" name="cour_desc" required >
					@if ($errors->has('description'))
										<span>
												<strong>{{ $errors->first('description') }}</strong>
										</span>
					@endif
			</div>
	    <div class="form-group">
	      <label for="quest_num">Jumlah pertanyaan (max 10)</label>
	      <input type="number" class="form-control input-lg" id="number" placeholder="" name="quest_num">
					@if ($errors->has('number'))
										<span>
												<strong>{{ $errors->first('number') }}</strong>
										</span>
					@endif
	    </div>
	    <button type="submit" class="wrapper button btn">Submit</button>
	  </form>
	</div>



@endsection
