<ul id="admin-nav">
	<li>
		<a href="{{ route('admin.aboutUs') }}">About us</a>
		<button class="btn" type="button" data-toggle="collapse" data-target="#dropdown-about" aria-expanded="false" aria-controls="dropdown-about">
			<i class="fas fa-arrow-circle-right" ></i>
		</button>
		<ul id="dropdown-about" class="dropdown collapse">
			<li>
				<a href="{{ route('admin.aboutUs') }}">Team</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="{{ route('admin.aboutUs') }}">Services</a>
		<button class="btn" type="button" data-toggle="collapse" data-target="#dropdown-services" aria-expanded="false" aria-controls="dropdown-services">
			<i class="fas fa-arrow-circle-right" ></i>
		</button>
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