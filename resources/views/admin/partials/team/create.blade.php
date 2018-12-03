@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Full Name</label>
    <input type="text" name="name" value="{{ old('name') ? old('name') : ''}}">

    <label for="about">About Member</label>
    <textarea name="about" cols="30" rows="10"></textarea><br><br>

    <label for="linkedin">LinkedIn Profile</label>
    <p class="text-muted">Example: "https://www.linkedin.com/specific-url-of-profile/"</p>
    <input type="url" name="linkedin" value="{{ old('linkedin') ? old('linkedin') : ''}}"/>

    <label for="image">Picture</label>
    <input type="file" name="image"/>

    <input class="btn-submit" type="submit" value="Create New User" />

    @include('admin.errors')
</form>
@endsection