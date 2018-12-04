@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="admin-create">
		<label for="name">name</label>
		<input type="text" name="name" value="{{ old('name') ? old('name') : ''}}">

		<label for="image">Picture</label>
		<input type="file" name="image"/>

		<label for="website">Website</label>
		<p class="text-muted">Example: "http://swissmining.com/"</p>
		<input type="url" name="website" value="{{ old('website') ? old('website') : ''}}"/>
	</div>

    <input class="btn-submit" type="submit" value="Create New User" />

    @include('admin.errors')
</form>
@endsection