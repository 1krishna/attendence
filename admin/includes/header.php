	<script src="../js/custom.js"></script>

	<header class="header">
		<div class="logo-container">
			<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
				<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
			</div>

		</div>
		<?php
		if (!isset($_SESSION['admin']) || isset($_GET['lo'])) {
			session_destroy();
			header('Location: index.php');
		}
		?>

		<!-- start: search & user box -->
		<div class="header-right">

			<span class="separator"></span>
			<div id="userbox" class="userbox">
				<a href="#" data-toggle="dropdown">
					<div class="profile-info" data-lock-name="<?php echo 'Admin'; ?>" data-lock-email="<?php echo 'admin@gmail.com'; ?>">
						<span class="name">
							<?php
							echo 'Admin'; 
							?>
						</span>
					</div>

					<i class="fa custom-caret"></i>
				</a>

				<div class="dropdown-menu">
					<ul class="list-unstyled mb-2">
						<li class="divider"></li>

						<li>
							<a role="menuitem" tabindex="-1" href="<?php echo $_SERVER['PHP_SELF'] . "?lo"; ?>"><i class="fas fa-power-off"></i> Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>