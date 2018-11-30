<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	@include('partials._header')

</head>
<body>
		<div id="vertical-menu">
			@include('admin.layouts.nav')
		</div>
		<div id="admin-content">
			@yield('main')
		</div>
		@in
		@yield('scripts')
</body>
</html> 