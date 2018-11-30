<ul id="admin-nav">
	<li>
		<a href="{{ route('admin.aboutUs') }}" data-toggle="collapse" href="#dropdown-about" role="button" aria-expanded="false" aria-controls="dropdown-about">About us</a>
		<i class="fas fa-arrow-circle-right"></i>
		<ul id="dropdown-about" class="dropdown collapse">
			<li>
				<a href="{{ route('admin.aboutUs') }}">Team</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="{{ route('admin.aboutUs') }}">Services</a>
		<i class="fas fa-arrow-circle-right"></i>
		<ul id="dropdown-services" class="dropdown collapse">
			<li>
				<a href="javasript:void(0)">Swissmining Solutions</a>
			</li>
			<li>
				<a href="javasript:void(0)">Swiss Turbo Token</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="{{ route('admin.aboutUs') }}">Partners</a>
	</li>
</ul>