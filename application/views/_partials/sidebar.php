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
	<!--================================-->
	<?php if($this->session->userdata('role')=="A"){?>
	<!--End brand logo & name-->
	<div id="mainnav">
		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">

					<ul id="mainnav-menu" class="list-group">
						<!--Category name-->
						<li class="list-header">Data</li>
						<!--Menu list item-->
						<li>
							<a href="<?= site_url('datatrain')?>">
								<i class="fa fa-database"></i>
								<span class="menu-title">
									Data Training
								</span>
							</a>
							<a href="<?= site_url('datatest')?>">
								<i class="fa fa-database"></i>
								<span class="menu-title">
									Data Testing
								</span>
							</a>
							<a href="<?= site_url('pengujian')?>">
								<i class="fa fa-calculator"></i>
								<span class="menu-title">
									Pengujian
								</span>
							</a>
						</li>
						<!-- <li class="list-header">Navigation</li> -->
						<!--Menu list item-->
						<!-- <li> <a href="<?= site_url('home')?>"> <i class="fa fa-info-circle"></i> <span class="menu-title">
									Informasi </span> </a> </li>
						<li>
							<a href="<?= site_url('c_todo_list')?>"> <i class="fa fa-question-circle"></i>
								<span class="menu-title">About</span>
							</a>
						</li> -->

						<li class="list-divider"></li>
						<li class="list-header">System</li>
						<!--Menu list item-->
						<li>
							<a href="<?= site_url('admin')?>"> <i class="fa fa-user"></i>
								<span class="menu-title">Data Admin</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img width="22px" src="<?= base_url('assets/admin/img/user.png')?>" />
								<span class="menu-title text-uppercase">
									<?php echo $this->session->userdata('nama'); ?>
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
			<!--================================-->
			<!--End menu-->
			<?php } elseif($this->session->userdata('role')=="U"){ ?>
		<!--End brand logo & name-->
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
								<a href="<?= site_url('home')?>"> <i class="fa fa-home"></i>
									<span class="menu-title">Dashboard</span>
								</a>
								<a href="<?= site_url('home')?>"> <i class="fa fa-home"></i>
									<span class="menu-title">Diagnosa</span>
								</a>
								<a href="<?= site_url('home')?>"> <i class="fa fa-home"></i>
									<span class="menu-title">Hasil</span>
								</a>
							</li>
							<li class="list-header">Navigation</li>
							<!--Menu list item-->
							<li> <a href="<?= site_url('home')?>"> <i class="fa fa-home"></i> <span class="menu-title">
									Informasi </span> </a> </li>
							<li>
							<a href="<?= site_url('home')?>"> <i class="fa fa-tasks"></i>
								<span class="menu-title">About</span>
							</a>
						</li>

							<li class="list-divider"></li>
							<li class="list-header">System</li>
							<!--Menu list item-->
							<li>
								<a href="#">
									<img width="22px" src="<?= base_url('assets/admin/img/user.png')?>" />
									<span class="menu-title text-uppercase">
										<?php echo $this->session->userdata('nama'); ?>
									</span>
									<i class="arrow"></i>
								</a>
								<!--Submenu-->
								<ul class="collapse">
									<li>
										<a href="<?php echo site_url('c_tutor/form_ubah/'.$this->session->userdata('id')) ?>">
											<i class="fa fa-user fa-fw"></i>
											<span class="menu-title">
												Edit Profile
											</span>
										</a>
									</li>
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
				<!--================================-->
				<!--End menu-->
			</div>
			<?php }?>
</nav>
