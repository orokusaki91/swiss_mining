@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form class="admin-form mission" action="{{ route('admin.missionVision.update', $vision->id) }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en" cols="30" rows="10">{!! $vision->body_en !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">    
			<label for="body">Description - DE</label>
			<textarea name="body_de" cols="30" rows="10">{!! $vision->body_de !!}</textarea>
		</div>
		<div class="col-md-6 mb-3"> 
			<label for="body">Description - FR</label>
			<textarea name="body_fr" cols="30" rows="10">{!! $vision->body_fr !!}</textarea>
		</div>
		<div class="col-md-6 mb-3"> 
			<label for="body">Description - IT</label>
			<textarea name="body_it" cols="30" rows="10">{!! $vision->body_it !!}</textarea>
		</div>
		<div class="col-md-6 mb-3"> 
			<label for="body">Description - ES</label>
			<textarea class="mb-3" name="body_es" cols="30" rows="10">{!! $vision->body_es !!}</textarea>
		</div>
	</div>
			
    <input class="btn-submit" type="submit" value="Change content">

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection