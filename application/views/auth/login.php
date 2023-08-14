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
									<h1 class="h4 text-gray-900 mb-4">Login Admin Sistem</h1>
								</div>
								<!-- Alert Gagal -->
								<?php if($this->session->flashdata('error')): ?>
								<div class="alert alert-danger" role="alert">
									<?php echo $this->session->flashdata('error');?>
								</div>
								<?php endif;?>
								<form method="POST" action="<?= site_url('c_login/proses');?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="user" name="user"
											placeholder="User">
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="pass"
											name="pass" placeholder="Password">
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
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
