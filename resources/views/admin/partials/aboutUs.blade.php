@extends('admin.layouts.master')

@section('main')

<h1>About Us</h1>
<hr>

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.aboutUs.update') }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-3">
			<label for="header">Header - EN</label>
			<input type="text" name="header_en" value="{{ $content->header_en }}" />
		</div>
		<div class="col-md-3">
			<label for="header">Header - DE</label>
			<input type="text" name="header_de" value="{{ $content->header_de }}" />
		</div>
		<div class="col-md-3">
			<label for="header">Header - FR</label>
			<input type="text" name="header_fr" value="{{ $content->header_fr }}" />
		</div>
		<div class="col-md-3">
			<label for="header">Header - IT</label>
			<input type="text" name="header_it" value="{{ $content->header_it }}" />
		</div>
		<div class="col-md-3">
			<label for="header">Header - ES</label>
			<input type="text" name="header_es" value="{{ $content->header_es }}" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en">{!! $content->body_en !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - DE</label>
			<textarea name="body_de">{!! $content->body_de !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - FR</label>
			<textarea name="body_fr">{!! $content->body_fr !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - IT</label>
			<textarea name="body_it">{!! $content->body_it !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - ES</label>
			<textarea name="body_es">{!! $content->body_es !!}</textarea>
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection