<div class="pageheader ">
	<h3> <a href="home " style="color:#fff;"><i class="fa fa-home "></i> </a>Data Training</h3>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li> <a href="c_home"> Home </a> </li>
			<li class="active"> Data Training </li>
		</ol>
	</div>
</div>
<!-- Basic Data Tables -->
<!--===================================================-->
<!--Page content-->
<!--===================================================-->
<div id="page-content">
<?php if($this->session->flashdata('gagal')): ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $this->session->flashdata('gagal');?>
		</div>
		<?php elseif($this->session->flashdata('sukses')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('sukses');?>
		</div>
		<?php endif;?>
	<div class="row">
		<div class="col-md-12">

			<div class="panel">
				<div class="panel-heading" style="padding: 10px;">
					<a href="<?php echo site_url('c_datatest/form_addData') ?>" class="btn btn-success "><i
							class="fa fa-plus"></i>
						Add
						Data</a>
				</div>
				<div class="panel-body" style="padding: 5px;">
					<table id="demo-dt-basic" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Semester</th>
								<th>Status Tinggal</th>
								<th>Keadaan Ekonomi</th>
								<th>Hubungan Dosen Pembimbing</th>
								<th>Kemampuan Analisis Kasus</th>
								<th>Tingkat Kepercayaan Diri</th>
								<th>Kesiapan Mental Terhadap Pengujian</th>
								<th>Hasil</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							if (!empty($datatrain)) {
								$i=1;
							foreach ($datatrain as $datatrain): ?>
							<tr>

								<td >
									<?php echo $i ?>
								</td>
								<td width="150">
									Data Training <?php echo $datatrain->id ?>
								</td>
								<td>
									<?php echo $datatrain->semester ?>
								</td>
								<td>
									<?php echo $datatrain->a1 ?>
								</td>
								<td>
									<?php echo $datatrain->a2 ?>
								</td>
								<td>
									<?php echo $datatrain->a3 ?>
								</td>
								<td>
									<?php echo $datatrain->a4 ?>
								</td>
								<td>
									<?php echo $datatrain->a5 ?>
								</td>
								<td>
									<?php echo $datatrain->a6 ?>
								</td>
								<td>
									<?php echo $datatrain->hasil ?>
								</td>
							</tr>
							<?php $i++;
							endforeach; 
							}  ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>




