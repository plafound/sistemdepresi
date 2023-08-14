<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

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
					<h3><i class="fa fa-home"></i> Dashboard - <?php echo $this->session->userdata('nama'); ?> </h3>
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
				<div class="container-fluid">

      			<h2 class="text-center">SELAMAT DATANG DI SISTEM PREDIKSI DIAGNOSA DEPRESI</h2>
      			<hr>
      			<p class="text-center">kenali gejala depresi sejak dini!</p>
     			<hr>
			
				 <div class="text-center">
  				<img src="<?php echo base_url('assets/assetslogin/img/logounp.png'); ?>" alt="Gambar" class="mx-auto" />
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
