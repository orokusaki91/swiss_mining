@extends('admin.layouts.master')

@section('main')

<h1>Team</h1>
<hr>

@include('admin.flash')
<div class="mb-3">
    <a href="{{ route('admin.team.create') }}" class="btn btn-success">Create New Member of Team</a>
</div>
        @if($team->count())
            <ol>
				@foreach ($team as $member)
					<li>
						<a href="{{ route('admin.team.edit', $member->id) }}">{{ $member->name }}</a>
					</li>
				@endforeach
            </ol>
        @else
            <p>Team is empty</p>
        @endif
@endsection