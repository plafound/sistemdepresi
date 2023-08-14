        <header id="navbar">
			<div id="navbar-container" class="boxed">
				<!--Navbar Dropdown-->
				<!--================================-->
				<div class="navbar-content clearfix">
					<ul class="nav navbar-top-links pull-left">
						<!--Navigation toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="tgl-menu-btn">
							<a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Navigation toogle button-->
						<!--Messages Dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					</ul>
					<ul class="nav navbar-top-links pull-right">
						<!--Profile toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!-- <li class="hidden-xs" id="toggleFullscreen">
							<a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
								<span class="sr-only">Toggle fullscreen</span>
							</a>
						</li> -->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Profile toogle button-->
						<!--User dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="pull-right"> <img class="img-circle img-user media-object"
										src="<?= base_url('assets/admin/img/user.png')?>" alt="Profile Picture"> </span>
								<div class="username hidden-xs text-uppercase"><?php echo $this->session->userdata('nama'); ?></div>
							</a>
							<div class="dropdown-menu dropdown-menu-right with-arrow">
								<!-- User dropdown menu -->
								<ul class="head-list">
									<li>
										<a href="<?php echo base_url(); ?>index.php/c_login/logout"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
									</li>
								</ul>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End user dropdown-->
					</ul>
				</div>
				<!--================================-->
				<!--End Navbar Dropdown-->
			</div>
		</header>
