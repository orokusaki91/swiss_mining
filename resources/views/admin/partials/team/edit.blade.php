@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<div style="height: 80px; width:80px;">
    <img src="{{ asset($teamMember->image) }}">
</div>


<form class="admin-form" action="{{ route('admin.team.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Full Name</label>
    <input type="text" name="name" value="{{ $teamMember->name }}"/>

    <label for="about">About Member</label>
    <textarea name="about" cols="30" rows="10">{{ $teamMember->about }}</textarea>

    <label for="linkedin">LinkedIn</label>
    <p class="text-muted">Example: "https://www.linkedin.com/specific-url-of-profile/"</p>
    <input type="url" name="linkedin" value="{{ $teamMember->linkedin }}"/>

    <input class="btn-submit" type="submit" value="Edit Team Member" />

    @include('admin.errors')
</form>

<form method="POST" action="{{ route('admin.team.destroy', $teamMember->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">I want to DELETE this Team Member!</button>
</form>


@endsection