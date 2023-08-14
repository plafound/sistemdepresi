<div class="pageheader ">
	<h3> <a href="home " style="color:#fff;"><i class="fa fa-home "></i> </a>Data Admin</h3>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li> <a href="home"> Home </a> </li>
			<li class="active"> Data Admin </li>
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
					<a href="<?php echo site_url('c_admin/form_tambah') ?>" class="btn btn-success "><i
							class="fa fa-plus"></i>
						Add
						Admin</a>
				</div>
				<div class="panel-body" style="padding: 5px;">
					<table id="demo-dt-basic" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Admin</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							if (!empty($admin)) {
								$i=1;
							foreach ($admin as $admin): ?>
							<tr>

								<td width="70">
									<?php echo $i ?>
								</td>
								<td>
									<?php echo $admin->nama ?>
								</td>

								<td width="350">
									<a href="<?php echo site_url('c_admin/form_ubah/'.$admin->id) ?>"
										class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
									<a href="<?php echo site_url('c_admin/hapus/'.$admin->id) ?>"
										class="btn btn-small text-danger"><i class="fa fa-trash"></i>
										Hapus</a>
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




