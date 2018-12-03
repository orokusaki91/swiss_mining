@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<div style="height: 80px; width:80px;">
    <img src="{{ asset($partner->image) }}">
</div>


<form class="admin-form" action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
	
	<div class="admin-edit">
		<label for="name">name</label>
		<input type="text" name="name" value="{{ $partner->name }}"/>

		<label for="website">Website</label>
		<p class="text-muted">Example: "http://swissmining.com/"</p>
		<input type="url" name="website" value="{{ $partner->website }}"/>
	</div>

    <input class="btn-submit" type="submit" value="Edit Partner" />

    @include('admin.errors')
</form>

<form method="POST" action="{{ route('admin.partners.destroy', $partner->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">I want to DELETE this Partner!</button>
</form>


@endsection