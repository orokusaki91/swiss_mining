@extends('admin.layouts.master')

@section('main')

<h1>Partners</h1>
<hr>

@include('admin.flash')
<div class="mb-3">
    <a href="{{ route('admin.partners.create') }}" class="btn btn-success">Create New Partner</a>
</div>
	@if($partners->count())
		<ol>
			@foreach ($partners as $partner)
				<li>
					<a href="{{ route('admin.partners.edit', $partner->id) }}">{{ $partner->name }}</a>
				</li>
			@endforeach
		</ol>
	@else
		<p>No partners</p>
	@endif
@endsection