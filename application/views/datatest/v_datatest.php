<div class="pageheader ">
	<h3> <a href="home " style="color:#fff;"><i class="fa fa-home "></i> </a>Data Testing</h3>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li> <a href="c_home"> Home </a> </li>
			<li class="active"> Data Testing </li>
		</ol>
	</div>
</div>
<!-- Basic Data Tables -->
<!--===================================================-->
<!--Page content-->
<!--===================================================-->
<div id="page-content">
	<div class="row">
		<div class="col-md-12">

			<div class="panel">
				<div class="panel-heading" style="padding: 10px;">
					<a href="<?php echo site_url('c_datatest/form_AddData') ?>" class="btn btn-success "><i
							class="fa fa-plus"></i>
						Manage Data</a>
				</div>
				<div class="panel-body" style="padding: 5px;">
					<table id="demo-dt-basic" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Asal Universitas</th>
								<th>Semester</th>
								<th>Status Tinggal</th>
								<th>Keadaan Ekonomi</th>
								<th>Hubungan Dosen Pembimbing</th>
								<th>Kemampuan Analisis Kasus</th>
								<th>Tingkat Kepercayaan Diri</th>
								<th>Kesiapan Mental Terhadap Pengujian</th>
                                <th>Hasil Bobot</th>
								<th>Hasil Prediksi</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							if (!empty($datatest)) {
								$i=1;
							foreach ($datatest as $datatest): ?>
							<tr>

								<td>
									<?php echo $i ?>
								</td>
								<td>
									<?php echo $datatest->nama ?>
								</td>
								<td>
									<?php echo $datatest->univ ?>
								</td>
								<td>
									<?php echo $datatest->semester ?>
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
                                <td>
									<?php echo $datatest->hasil ?>
								</td>
								<td>
									<a href="<?php echo site_url('c_datatest/penghitungan/'.$datatest->id) ?>"
										class="btn btn-small text-danger"><i class="fa fa-calculator"></i> Lihat Penghitungan</a>
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




