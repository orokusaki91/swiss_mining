<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	@include('partials._header')

</head>
<body>
	@if (Request::segment(2) != 'home')
	<div id="vertical-menu">
		@include('admin.layouts.nav')
	</div>
	@endif
	<div id="admin-content" class="{{ Request::segment(2) == 'home' ? 'home' : '' }}">
		@yield('main')
	</div>
	@yield('scripts')
</body>
</html> 