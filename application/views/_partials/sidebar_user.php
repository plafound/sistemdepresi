<nav id="mainnav-container">
	<!--Brand logo & name-->
	<!--================================-->
	<div class="navbar-header">
		<a href="index.html" class="navbar-brand">
			<div class="brand-title">
				<img width="55px" src="<?= base_url('assets/assetslogin/');?>img/logounp.png" />
				Diagnosa
			</div>
		</a>
	</div>
    <div id="mainnav">
			<!--Menu-->
			<!--================================-->
			<div id="mainnav-menu-wrap">
				<div class="nano">
					<div class="nano-content">

						<ul id="mainnav-menu" class="list-group">
							<!--Category name-->
							<li class="list-header">Navigation</li>
							<!--Menu list item-->
							<li>
								<a href="<?= site_url('home_user')?>"> <i class="fa fa-home"></i>
									<span class="menu-title">Dashboard</span>
								</a>
								<a href="<?= site_url('diagnosa')?>"> <i class="fa fa-plus-square"></i>
									<span class="menu-title">Diagnosa</span>
								</a>

							</li>
							<!-- <li class="list-header">Navigation</li> -->
							<!--Menu list item-->
							<!-- <li> <a href="<?= site_url('home_user')?>"> <i class="fa fa-info-circle"></i> <span class="menu-title">
									Informasi </span> </a> </li>
							<li>
							<a href="<?= site_url('home_user')?>"> <i class="fa fa-question-circle"></i>
								<span class="menu-title">About</span>
							</a>
						</li> -->

							<li class="list-divider"></li>
							<li class="list-header">System</li>
							<!--Menu list item-->
							<li>
								<a href="#">
									<img width="22px" src="<?= base_url('assets/admin/img/user.png')?>" />
									<span class="menu-title text-uppercase">
										user
									</span>
									<i class="arrow"></i>
								</a>
								<!--Submenu-->
								<ul class="collapse">
									<li>
										<a href="<?php echo base_url(); ?>index.php/c_login/logout">
											<i class="fa fa-sign-out"></i>
											<span class="menu-title">
												Logout
											</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
        </div>
</nav>