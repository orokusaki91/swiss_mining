@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<form class="admin-form" action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="admin-create">
		<label for="name">Full Name</label>
		<input type="text" name="name" value="{{ old('name') ? old('name') : ''}}">

		<label for="about">About Member</label>
		<div class="row">
			<div class="col-md-8 col-lg-6 mb-3">
				<textarea name="about" cols="30" rows="10"></textarea>
			</div>
		</div>

		<label for="linkedin">LinkedIn Profile</label>
		<p class="text-muted">Example: "https://www.linkedin.com/specific-url-of-profile/" or leave blank</p>
		<input type="url" name="linkedin" value="{{ old('linkedin') }}"/>

		<label for="image">Picture</label>
		<input type="file" name="image"/>
	</div>

    <input class="btn-submit" type="submit" value="Save" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection