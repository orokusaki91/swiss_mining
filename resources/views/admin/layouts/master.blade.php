@include('partials._header')
<div id="vertical-menu">
	@include('admin.layouts.nav')
</div>
<div id="admin-content">
	@yield('main')
</div>
@include('partials._scripts')