<div class="nano">
	<div class="nano-content">
		<nav id="menu" class="nav-main" role="navigation">

			<ul class="nav nav-main">
				<li>
					<a class="nav-link" href="dashboard.php">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fas fa-user" aria-hidden="true"></i>
						<span>Profile Details</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="update-profile.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Update Profile Details
							</a>
						</li>
						<li>
							<a class="nav-link" href="change-passwd.php">
								<i class="fa fa-key" aria-hidden="true"></i>
								Change Password
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fas fa-book" aria-hidden="true"></i>
						<span>Cources</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="course-add.php">
								<i class="fa fa-plus-square" aria-hidden="true"></i>
								Add Cources
							</a>
						</li>

					</ul>
				</li>

				<li>
					<a class="nav-link" href="post-attendence.php">
						<i class="fa fa-check" aria-hidden="true"></i>
						<span>Post Attendence</span>
					</a>
				</li>

				<li>
					<a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] . "?lo"; ?>">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>LogOut</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>