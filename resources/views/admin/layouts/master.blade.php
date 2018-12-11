<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	@include('partials._header')
	{{-- JQuery --}}
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</head>
<body>
	@if (Request::segment(2) != 'home')
	<div id="vertical-menu">
		<div class="wrapper">
			@include('admin.layouts.nav')
		</div>
	</div>
	@endif
	<div id="admin-content" class="{{ Request::segment(2) == 'home' ? 'home' : '' }}">
		@if (Request::segment(2) != 'home')
			<div id="top-bar" class="d-md-none">
				<button class="btn btn-vertical-menu">
					<i class="fas fa-bars"></i>
				</button>
			</div>
		@endif
		@yield('main')
	</div>
	
	<script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/all.min.js') }}"></script>
	@yield('scripts')
</body>
</html> 