@extends('admin.layouts.master')

@section('main')


<h1>Home</h1>
<hr>

<ul id="admin-home">
	<li>
		<a href="{{ route('admin.aboutUs') }}">About us</a>
	</li>
	<li>
		<a href="{{ route('admin.missionVision') }}">Mission - Vision</a>
	</li>
	<li>
		<a href="{{ route('admin.team') }}">Team</a>
	</li>
	{{-- <li>
		<a href="{{ route('admin.services') }}">Services</a>
	</li> --}}
	<li>
		<a href="{{ route('admin.solutions') }}">Solutions</a>
	</li>
	<li>
		<a href="{{ route('admin.turboToken') }}">Turbo Token</a>
	</li>
	<li>
		<a href="{{ route('admin.partners') }}">Partners</a>
	</li>
	<li>
		<a href="{{ route('admin.newsletter') }}">Newsletters</a>
	</li>
</ul>
<ul id="buttons">
	<li>
		<i class="fas fa-key"></i>
		<a href="{{ route('admin.changePass') }}">Change Password</a>
	</li>
	<li>
		<i class="fas fa-sign-out-alt"></i>
		<a href="{{ route('logout') }}">Logout</a>
	</li>
</ul>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/all.min.js') }}"></script>
@endsection