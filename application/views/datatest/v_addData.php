<div class="pageheader ">
	<h3> <a href="home " style="color:#fff;"><i class="fa fa-home "></i> </a>Add to Data Training</h3>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li> <a href="home"> Home </a> </li>
			<li> <a href="datatest"> Datatest </a> </li>
			<li class="active"> Add to Data Training </li>
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
            <form action="<?php echo site_url('c_datatest/AddData') ?>" method="post" enctype="multipart/form-data">
				<div class="panel-heading" style="padding: 10px;">
                    <input class="btn btn-success" type="submit" name="addData" value="Add to Data Training">
                    <input class="btn btn-danger" type="submit" name="hapus" value="Hapus">
				</div>
				<div class="panel-body" style="padding: 5px;">
					<table id="demo-dt-basic" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Status Tinggal</th>
								<th>Keadaan Ekonomi</th>
								<th>Hubungan Dosen Pembimbing</th>
								<th>Kemampuan Analisis Kasus</th>
								<th>Tingkat Kepercayaan Diri</th>
								<th>Kesiapan Mental Terhadap Pengujian</th>
                                <th>Hasil Diagnosa</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							if (!empty($datatest)) {
								$i=1;
							foreach ($datatest as $datatest): ?>
							<tr>

								<td>
                                    <input type="checkbox" name="data[]" value="<?php echo $datatest->id ?>">
								</td>
								<td>
									<?php echo $datatest->nama ?>
								</td>
								<td>
									<?php echo $datatest->a1 ?>
								</td>
								<td>
									<?php echo $datatest->a2 ?>
								</td>
								<td>
									<?php echo $datatest->a3 ?>
								</td>
								<td>
									<?php echo $datatest->a4 ?>
								</td>
								<td>
									<?php echo $datatest->a5 ?>
								</td>
								<td>
									<?php echo $datatest->a6 ?>
								</td>
								<td>
									<?php echo $datatest->hasil_bobot ?>
								</td>
							</tr>
							<?php $i++;
							endforeach; 
							}  ?>
						</tbody>
					</table>
				</div>
            </form>
			</div>
		</div>
	</div>
</div>




