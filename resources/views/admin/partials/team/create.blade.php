@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="admin-create">
		<label for="name">Full Name</label>
		<input type="text" name="name" value="{{ old('name') ? old('name') : ''}}">

		<label for="about">About Member</label>
		<textarea class="mb-3" name="about" cols="30" rows="10"></textarea>

		<label for="linkedin">LinkedIn Profile</label>
		<p class="text-muted">Example: "https://www.linkedin.com/specific-url-of-profile/"</p>
		<input type="url" name="linkedin" value="{{ old('linkedin') ? old('linkedin') : ''}}"/>

		<label for="image">Picture</label>
		<input type="file" name="image"/>
	</div>

    <input class="btn-submit" type="submit" value="Create New Team Member" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection