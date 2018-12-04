@extends('admin.layouts.master')

@section('main')

<h1>Mission and Vision</h1>
<hr>

@include('admin.flash')
    <ol>
        @foreach ($all as $item)
            <li>
                <a href="{{ route('admin.missionVision.show', $item->id) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ol>
@endsection