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
						<i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>
						<span>Faculty</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="fac-add.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Add Faculty
							</a>
						</li>
						<li>
							<a class="nav-link" href="fac-view.php">
								<i class="fa fa-key" aria-hidden="true"></i>
								View Faculty
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fas fa-graduation-cap" aria-hidden="true"></i>
						<span>Students</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="student-add.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Add Students
							</a>
						</li>
						<li>
							<a class="nav-link" href="student-view.php">
								<i class="fa fa-key" aria-hidden="true"></i>
								View Students
							</a>
						</li>
					</ul>
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