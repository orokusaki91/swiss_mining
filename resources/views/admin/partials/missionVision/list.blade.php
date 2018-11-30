@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
    <ul>
        @foreach ($all as $item)
            <li>
                <a href="{{ route('admin.missionVision.show', $item->id) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection