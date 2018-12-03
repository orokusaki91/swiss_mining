<ul id="admin-nav">
	<li>
		<a href="{{ route('admin.home') }}">Home</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'about-us' ? "class=active" : '' }} href="{{ route('admin.aboutUs') }}">About us</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'mission-vision' ? "class=active" : '' }} href="{{ route('admin.missionVision') }}">Mission and Vision</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'team' ? "class=active" : '' }} href="{{ route('admin.team') }}">Team</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'services' ? "class=active" : '' }} href="{{ route('admin.services') }}">Services</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'solutions' ? "class=active" : '' }} href="{{ route('admin.solutions') }}">Solutions</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'turbo-token' ? "class=active" : '' }} href="{{ route('admin.solutions') }}">Turbo token</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'newsletter' ? "class=active" : '' }} href="{{ route('admin.newsletter') }}">Newsletters</a>
	</li>
</ul>