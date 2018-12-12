<ul id="admin-nav">
	<h5>Dashboard</h5>
	<li>
		<a href="{{ route('admin.home') }}">Home</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'about-us' ? "class=active" : '' }} href="{{ route('admin.aboutUs') }}">About<span>us</span></a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'mission-vision' ? "class=active" : '' }} href="{{ route('admin.missionVision') }}">Mission<span class="minus">-</span>Vision</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'team' ? "class=active" : '' }} href="{{ route('admin.team') }}">Team</a>
	</li>
	{{-- <li>
		<a {{ Request::segment(2) == 'services' ? "class=active" : '' }} href="{{ route('admin.services') }}">Services</a>
	</li> --}}
	<li>
		<a {{ Request::segment(2) == 'solutions' ? "class=active" : '' }} href="{{ route('admin.solutions') }}">Solutions</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'turbo-token' ? "class=active" : '' }} href="{{ route('admin.turboToken') }}">Turbo<span>token</span></a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'partners' ? "class=active" : '' }} href="{{ route('admin.partners') }}">Partners</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'newsletter' ? "class=active" : '' }} href="{{ route('admin.newsletter') }}">Newsletters</a>
	</li>
	<div class="divider"></div>
	<li>
		<a {{ Request::segment(2) == 'change-password' ? "class=active" : '' }} href="{{ route('admin.changePass') }}">Change<span>password</span></a>
	</li>
	<li>
		<a href="{{ route('logout') }}">Logout</a>
	</li>
</ul>