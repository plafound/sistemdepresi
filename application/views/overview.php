<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
		<!--NAVBAR-->
		<!--===================================================-->
		<?php $this->load->view("_partials/navbar.php") ?>
		<!--===================================================-->
		<!--END NAVBAR-->
		<div class="boxed">
			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				<div class="pageheader hidden-xs">
					<h3><i class="fa fa-home"></i> Dashboard </h3>
					<div class="breadcrumb-wrapper">
						<span class="label">You are here:</span>
						<ol class="breadcrumb">
							<li> <a href="#"> Home </a> </li>
							<li class="active"> Dashboard </li>
						</ol>
					</div>
				</div>
				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">
					<div class="row">
						<div class="col-md-3 eq-box-md grid">
							<div class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-9 col-sm-9 col-xs-10">
											<h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
											<p class="mar-ver-5"> Traffic this month </p>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-2"> <i
												class="fa fa-shopping-cart fa-3x text-danger"></i> </div>
									</div>
									<div class="progress progress-striped progress-xs">
										<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
											aria-valuenow="60" role="progressbar"
											class="progress-bar progress-bar-danger"> <span class="sr-only">60%
												Complete</span> </div>
									</div>
									<p> 4% higher than last month </p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-9 col-sm-9 col-xs-10">
											<h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
											<p class="mar-ver-5"> Traffic this month </p>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-2"> <i
												class="fa fa-shopping-cart fa-3x text-success"></i> </div>
									</div>
									<div class="progress progress-striped progress-xs">
										<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
											aria-valuenow="60" role="progressbar"
											class="progress-bar progress-bar-success"> <span class="sr-only">60%
												Complete</span> </div>
									</div>
									<p> 4% higher than last month </p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-9 col-sm-9 col-xs-10">
											<h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
											<p class="mar-ver-5"> Traffic this month </p>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-2"> <i
												class="fa fa-shopping-cart fa-3x text-primary"></i> </div>
									</div>
									<div class="progress progress-striped progress-xs">
										<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
											aria-valuenow="60" role="progressbar"
											class="progress-bar progress-bar-primary"> <span class="sr-only">60%
												Complete</span> </div>
									</div>
									<p> 4% higher than last month </p>
								</div>
							</div>
						</div>
						<div class="col-md-5 eq-box-md grid">
							<div class="panel">
								<div class="panel-body">
									<!--Flot Spline Chart placeholder -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<div id="demo-negativebar" style="height:250px"></div>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
								</div>
							</div>
							<div class="bg-light">
								<ul class="nav nav-section nav-justified">
									<li>
										<div class="section">
											<h4 class="text-left"> HDD 1 <i class="fa fa-caret-up text-success"></i>
											</h4>
											<p class="text-left"> Traffic this month </p>
											<div class="progress progress-striped progress-xs">
												<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
													aria-valuenow="60" role="progressbar" class="progress-bar"> <span
														class="sr-only">60% Complete</span> </div>
											</div>
											<p class="text-left">Health: <span class="text-success">Good</span></p>
										</div>
									</li>
									<li>
										<div class="section">
											<h4 class="text-left"> HDD 2 <i class="fa fa-caret-down text-danger"></i>
											</h4>
											<p class="text-left"> Traffic this month </p>
											<div class="progress progress-striped progress-xs">
												<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
													aria-valuenow="60" role="progressbar" class="progress-bar"> <span
														class="sr-only">60% Complete</span> </div>
											</div>
											<p class="text-left">Health: <span class="text-danger">Bad</span></p>
										</div>
									</li>
									<li>
										<div class="section">
											<h4 class="text-left"> HDD 3 <i class="fa fa-caret-up text-success"></i>
											</h4>
											<p class="text-left"> Traffic this month </p>
											<div class="progress progress-striped progress-xs">
												<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
													aria-valuenow="60" role="progressbar" class="progress-bar"> <span
														class="sr-only">60% Complete</span> </div>
											</div>
											<p class="text-left">Health: <span class="text-success">Good</span></p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 eq-box-md grid">
							<div class="panel">
								<div class="panel-body">
									<!--Flot Line Chart placeholder-->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<div id="demo-site-statistics" style="height:175px"></div>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
								</div>
							</div>
							<div class="panel">
								<div class="panel-body">
									<!--Flot Line Chart placeholder-->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<div id="demo-sales-statistics" style="height:175px"></div>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="panel">
								<div class="panel-body">
									<ul class="nav nav-section nav-justified">
										<li>
											<div class="section">
												<h4 class="nm"> 67 GB </h4>
												<p class="text-muted">Total Usage</p>
											</div>
										</li>
										<li>
											<div class="section">
												<h4 class="nm"> 320 GB </h4>
												<p class="text-muted">Total Space</p>
											</div>
										</li>
										<li>
											<div class="section">
												<h4 class="nm"> 58% </h4>
												<p class="text-muted">CPU</p>
											</div>
										</li>
									</ul>
									<!--Flot Area Chart placeholder-->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<div id="demo-realtime" class="height-sm"></div>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel">
								<div class="panel-body">
									<div id="carousel-example-vertical" class="carousel vertical slide"
										data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<div class="ticker-headline">
													<div class="media">
														<span class="pull-left"><i
																class="fa fa-twitter fa-4x text-azure"></i></span>
														<div class="media-body">
															<div class="h4"><strong>Semantha Schwarz</strong> <small>1
																	hour ago</small></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
																Nullam id quam elementum odio tristique euismod.
																Suspendisse id nunc sed massa cursus
																efficitur.Suspendisse id nunc sed massa cursus
																efficitur.
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="ticker-headline">
													<div class="media">
														<span class="pull-left"><i
																class="fa fa-facebook fa-4x text-primary"></i></span>
														<div class="media-body">
															<div class="h4"><strong>Semantha Schwarz</strong> <small>1
																	hour ago</small></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
																Nullam id quam elementum odio tristique euismod.
																Suspendisse id nunc sed massa cursus efficitur.
																Suspendisse id nunc sed massa cursus efficitur.
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="ticker-headline">
													<div class="media">
														<span class="pull-left"><i
																class="fa fa-google-plus fa-4x text-danger"></i></span>
														<div class="media-body">
															<div class="h4"><strong>Semantha Schwarz</strong> <small>1
																	hour ago</small></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
																Nullam id quam elementum odio tristique euismod.
																Suspendisse id nunc sed massa cursus efficitur.
																Suspendisse id nunc sed massa cursus efficitur.
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Controls -->
										<a class="up carousel-control" href="#carousel-example-vertical" role="button"
											data-slide="prev">
											<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="down carousel-control" href="#carousel-example-vertical" role="button"
											data-slide="next">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
							<div class="panel papernote">
								<div class="panel-body">
									<div class="carousel slide" id="c-slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active">
												<h4>This is my note #1</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id
													quam elementum odio tristique euismod.
													Suspendisse id nunc sed massa cursus efficitur.
												</p>
											</div>
											<div class="item">
												<h4>This is my note #2</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id
													quam elementum odio tristique euismod.
													Suspendisse id nunc sed massa cursus efficitur.
												</p>
											</div>
											<div class="item">
												<h4>This is my note #3</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id
													quam elementum odio tristique euismod.
													Suspendisse id nunc sed massa cursus efficitur.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<!--Network Line Chart-->
							<!--===================================================-->
							<div class="panel">
								<!--Chart information-->
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-9 mar-ver-5">
											<h3 class="mar-no"> <span class="counter">260</span> GB</h3>
											<p class="mar-no">Server Load</p>
										</div>
									</div>
									<div class="progress progress-striped progress-xs">
										<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
											aria-valuenow="60" role="progressbar" class="progress-bar"> <span
												class="sr-only">60% Complete</span> </div>
									</div>
									<p> 250GB of 1,024GB used </p>
									<ul class="nav nav-section nav-justified mar-btm">
										<li>
											<div class="section">
												<h4 class="text-left"> HDD 1 <i class="fa fa-caret-up text-success"></i>
												</h4>
												<div class="progress progress-striped progress-xs">
													<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
														aria-valuenow="60" role="progressbar" class="progress-bar">
														<span class="sr-only">60% Complete</span> </div>
												</div>
												<p class="text-left">Health: <span class="text-success">Good</span></p>
											</div>
										</li>
										<li>
											<div class="section">
												<h4 class="text-left"> HDD 2 <i
														class="fa fa-caret-down text-danger"></i></h4>
												<div class="progress progress-striped progress-xs">
													<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
														aria-valuenow="60" role="progressbar" class="progress-bar">
														<span class="sr-only">60% Complete</span> </div>
												</div>
												<p class="text-left">Health: <span class="text-danger">Bad</span></p>
											</div>
										</li>
										<li>
											<div class="section">
												<h4 class="text-left"> HDD 3 <i class="fa fa-caret-up text-success"></i>
												</h4>
												<div class="progress progress-striped progress-xs">
													<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0"
														aria-valuenow="60" role="progressbar" class="progress-bar">
														<span class="sr-only">60% Complete</span> </div>
												</div>
												<p class="text-left">Health: <span class="text-success">Good</span></p>
											</div>
										</li>
									</ul>
								</div>
								<div class="panel-footer pad-no">
									<div id="chart"> </div>
								</div>
							</div>
							<!--===================================================-->
							<!--End network line chart-->
						</div>
						<div class="col-lg-4">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"> Quick Post </h3>
								</div>
								<div class="panel-body pad-no">
									<!-- Multiple Select Choosen -->
									<!--===================================================-->
									<form class="form-horizontal form-bordered">
										<!--Summernote-->
										<!--===================================================-->
										<div id="demo-summernote"></div>
										<!--===================================================-->
										<!-- End Summernote -->
										<div class="pad-all text-right">
											<button class="btn btn-info"><i class="fa fa-send"></i> Send </button>
											<button class="btn btn-default"><i class="fa fa-save"></i> Draft </button>
											<button class="btn btn-default"><i class="fa fa-remove"></i> Discard
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"> Chat </h3>
								</div>
								<div class="panel-body np">
									<!--Chat widget-->
									<!--===================================================-->
									<!--Widget body-->
									<div id="demo-chat-body" class="collapse in">
										<div class="nano height-md">
											<div class="nano-content pad-all">
												<ul class="list-unstyled media-block">
													<li class="mar-btm">
														<div class="media-left">
															<img src="img/av1.png" class="img-circle img-sm"
																alt="Profile Picture">
															<div class="speech-time"> 10pm </div>
														</div>
														<div class="media-body pad-hor speech-left">
															<div class="speech">
																<a href="#" class="media-heading">John Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-right">
															<img src="img/av4.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-right">
															<div class="speech">
																<a href="#" class="media-heading">Lucy Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-left">
															<img src="img/av1.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-left">
															<div class="speech">
																<a href="#" class="media-heading">John Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-right">
															<img src="img/av4.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-right">
															<div class="speech">
																<a href="#" class="media-heading">Lucy Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-right">
															<img src="img/av4.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-right">
															<div class="speech">
																<a href="#" class="media-heading">Lucy Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-left">
															<img src="img/av1.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-left">
															<div class="speech">
																<a href="#" class="media-heading">John Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-right">
															<img src="img/av4.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-right">
															<div class="speech">
																<a href="#" class="media-heading">Lucy Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
													<li class="mar-btm">
														<div class="media-left">
															<img src="img/av1.png" class="img-circle img-sm"
																alt="Profile Picture">
														</div>
														<div class="media-body pad-hor speech-left">
															<div class="speech">
																<a href="#" class="media-heading">John Doe</a>
																<p> Lorem ipsum dolor sit amet, consectetuer adipiscing
																	elit. </p>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!--Widget footer-->
										<div class="panel-footer">
											<div class="row">
												<div class="col-xs-9">
													<input type="text" placeholder="Enter your text"
														class="form-control chat-input">
												</div>
												<div class="col-xs-3">
													<button class="btn btn-primary btn-block"
														type="submit">Send</button>
												</div>
											</div>
										</div>
									</div>
									<!--===================================================-->
									<!--Chat widget-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--===================================================-->
				<!--End page content-->
			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			<?php $this->load->view("_partials/sidebar.php") ?>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->
		</div>
		<!-- FOOTER -->
		<!--===================================================-->
		<?php $this->load->view("_partials/footer.php") ?>
		<!--===================================================-->
		<!-- END FOOTER -->
		<!-- SCROLL TOP BUTTON -->
		<!--===================================================-->
		<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
		<!--===================================================-->
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->

	<!-- JavaScript -->
	<?php $this->load->view("_partials/script.php") ?>


</body>

</html>
