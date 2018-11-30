<ul id="admin-nav">
	<li>
		<a href="{{ route('admin.aboutUs') }}">About us</a>
		<button class="btn" type="button" data-toggle="collapse" data-target="#dropdown-about" aria-expanded="false" aria-controls="dropdown-about">
			<i class="fas fa-arrow-circle-right" ></i>
		</button>
	</li>
	<li>
		<a href="{{ route('admin.missionVision') }}">Mission and Vision</a>
		<button class="btn" type="button" data-toggle="collapse" data-target="#dropdown-about" aria-expanded="false" aria-controls="dropdown-about">
			<i class="fas fa-arrow-circle-right" ></i>
		</button>
	</li>
	<li id="dropdown-about" class="dropdown collapse">
		<a href="{{ route('admin.aboutUs') }}">Team</a>
		<button class="btn" type="button" data-toggle="collapse" data-target="#dropdown-about" aria-expanded="false" aria-controls="dropdown-about">
			<i class="fas fa-arrow-circle-right" ></i>
		</button>
	</li>
	<li>
		<a href="{{ route('admin.aboutUs') }}">Services</a>
		<button class="btn" type="button" data-toggle="collapse" data-target="#dropdown-services" aria-expanded="false" aria-controls="dropdown-services">
			<i class="fas fa-arrow-circle-right" ></i>
		</button>
	</li>
	<li id="dropdown-services" class="dropdown collapse">
		<a href="javasript:void(0)">Swissmining Solutions</a>
		<a href="javasript:void(0)">Swiss Turbo Token</a>
	</li>
	<li>
		<a href="{{ route('admin.aboutUs') }}">Partners</a>
	</li>
</ul>