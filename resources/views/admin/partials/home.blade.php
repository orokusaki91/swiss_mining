@extends('admin.layouts.master')

@section('main')


<h1>Home</h1>
<hr>

<a href="{{ route('admin.aboutUs') }}">About us</a>
<a href="{{ route('admin.missionVision') }}">Mission and Vision</a>
<a href="{{ route('admin.team') }}">Team</a>
<a href="{{ route('admin.services') }}">Services</a>
<a href="{{ route('admin.solutions') }}">Solutions</a>
<a href="{{ route('admin.turboToken') }}">Turbo Token</a>
<a href="{{ route('admin.partners') }}">Partners</a>
<a href="{{ route('admin.newsletter') }}">Newsletters</a>
@endsection