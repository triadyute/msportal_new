<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

	<div class="sidebar-header">
		<div class="sidebar-title">
			Navigation
		</div>
		<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html"
			data-fire-event="sidebar-left-toggle">
			<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">

				<ul class="nav nav-main">
					<li class="{{ (request()->is('home')) ? 'nav-active' : '' }}">
						<a class="nav-link" href="{{route('home')}}">
							<i class="fas fa-home" aria-hidden="true"></i>
							<span>Home</span>
						</a>
					</li>
					<li class="nav-parent {{ (request()->is('company')) ? 'nav-active' : '' }}">
						<a class="nav-link" href="#">
							<i class="fas fa-building" aria-hidden="true"></i>
							<span>Companies</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="{{route('company.index')}}">
									Manage Companies
								</a>
							</li>
							<li>
								<a class="nav-link" href="layouts-square-borders.html">
									Cages & Racks
								</a>
							</li>
						</ul>
					</li>
					<li class="{{ (request()->is('user')) ? 'nav-active' : '' }}">
						<a class="nav-link" href="{{route('user.index')}}">
							<i class="fas fa-users" aria-hidden="true"></i>
							<span>Users</span>
						</a>
					</li>
					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="fas fa-building" aria-hidden="true"></i>
							<span>Change Control Process</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="layouts-square-borders.html">
									Change Control Requests
								</a>
							</li>
							<li>
								<a class="nav-link" href="layouts-square-borders.html">
									Submit New Change Control
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="fas fa-building" aria-hidden="true"></i>
							<span>Data Center Access</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="layouts-square-borders.html">
									Permanent Access List
								</a>
							</li>
							<li>
								<a class="nav-link" href="layouts-square-borders.html">
									Request Temporary Access
								</a>
							</li>
						</ul>
					</li>
					{{-- <li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="fas fa-users" aria-hidden="true"></i>
							<span>Users</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="pages-signup.html">
									Sign Up
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-signin.html">
									Sign In
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-recover-password.html">
									Recover Password
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-lock-screen.html">
									Locked Screen
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-user-profile.html">
									User Profile
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-session-timeout.html">
									Session Timeout
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-calendar.html">
									Calendar
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-timeline.html">
									Timeline
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-media-gallery.html">
									Media Gallery
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-invoice.html">
									Invoice
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-blank.html">
									Blank Page
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-404.html">
									404
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-500.html">
									500
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-log-viewer.html">
									Log Viewer
								</a>
							</li>
							<li>
								<a class="nav-link" href="pages-search-results.html">
									Search Results
								</a>
							</li>
						</ul>
					</li> --}}
				</ul>
			</nav>
		</div>

		<script>
			// Maintain Scroll Position
			if (typeof localStorage !== 'undefined') {
				if (localStorage.getItem('sidebar-left-position') !== null) {
					var initialPosition = localStorage.getItem('sidebar-left-position'),
						sidebarLeft = document.querySelector('#sidebar-left .nano-content');

					sidebarLeft.scrollTop = initialPosition;
				}
			}

		</script>


	</div>

</aside>
<!-- end: sidebar -->
