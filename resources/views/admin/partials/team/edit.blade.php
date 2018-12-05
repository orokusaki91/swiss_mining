@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<div style="height: 80px; width:80px; margin-bottom:40px;">
    <img src="{{ asset($teamMember->image) }}">
</div>


<form class="admin-form" action="{{ route('admin.team.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="admin-edit">
		<label for="name">Full Name</label>
		<input type="text" name="name" value="{{ $teamMember->name }}"/>

		<label for="about">About Member</label>
		<textarea class="mb-3" name="about" cols="30" rows="10">{!! $teamMember->about !!}</textarea>

		<label for="linkedin">LinkedIn</label>
		<p class="text-muted">Example: "https://www.linkedin.com/specific-url-of-profile/"</p>
		<input type="url" name="linkedin" value="{{ $teamMember->linkedin }}"/>
	</div>

    <input class="btn-submit" type="submit" value="Save" />

    @include('admin.errors')
</form>

<form method="POST" action="{{ route('admin.team.destroy', $teamMember->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">I want to DELETE this Team Member!</button>
</form>


@endsection

@section('scripts')
    @include('admin.scripts')
@endsection