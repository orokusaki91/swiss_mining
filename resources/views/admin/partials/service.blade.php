@extends('admin.layouts.master')

@section('main')

<h1>Sevice</h1>
<hr>

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.services.update') }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en">{!! $service->body_en !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - DE</label>
			<textarea name="body_de">{!! $service->body_de !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - FR</label>
			<textarea name="body_fr">{!! $service->body_fr !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - IT</label>
			<textarea name="body_it">{!! $service->body_it !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - ES</label>
			<textarea name="body_es">{!! $service->body_es !!}</textarea>
		</div>
	</div>
    <input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection