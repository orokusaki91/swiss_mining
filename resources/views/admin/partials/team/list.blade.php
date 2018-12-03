@extends('admin.layouts.master')

@section('main')

<h1>Team</h1>
<hr>

@include('admin.flash')
    <a href="{{ route('admin.team.create') }}" class="btn btn-success">Create New Member of Team</a>
        @if($team->count())
            @foreach ($team as $member)
            <ul>
                <li>
                    <a href="{{ route('admin.team.edit', $member->id) }}">{{ $member->name }}</a>
                </li>
            </ul>
            @endforeach
        @else
            <p>Team is empty</p>
        @endif
@endsection