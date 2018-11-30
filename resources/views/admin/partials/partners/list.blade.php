@extends('admin.layouts.master')

@section('main')

<h1>Partners</h1>
<hr>

@include('admin.flash')
    <a href="{{ route('admin.partners.create') }}" class="btn btn-success">Create New Partner</a>
        @if($partners->count())
            @foreach ($partners as $partner)
            <ul>
                <li>
                    <a href="{{ route('admin.partners.edit', $partner->id) }}">{{ $partner->name }}</a>
                </li>
            </ul>
            @endforeach
        @else
            <p>No partners</p>
        @endif
@endsection