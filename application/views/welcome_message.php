<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Welcome to Sistem Diagnosa</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/assetslogin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/assetslogin/');?>css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url('assets/assetslogin/img');?>/logounp.png" type="image/png">
</head>

<body class="bg-gradient-primary">
<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-lg-5">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<img width="200px" src="<?= base_url('assets/assetslogin/');?>img/logounp.png"
										class="mb-4" />
									<h1 class="h4 text-gray-900 mb-4">Selamat Datang di Sistem Diagnosa Depresi</h1>
								</div>
								<form method="POST" action="<?= site_url('login');?>">
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login as admin
									</button>
								</form>
								<br>
								<form method="POST" action="<?= site_url('diagnosa');?>">
									<button type="submit" class="btn btn-success btn-user btn-block">
										Lakukan Diagnosa Sekarang!
									</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/assetslogin/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/assetslogin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/assetslogin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/assetslogin/');?>js/sb-admin-2.min.js"></script>

</body>

</html>