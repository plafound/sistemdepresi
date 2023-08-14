<div class="pageheader ">
	<h3><i class="fa fa-home"></i> Penghitungan </h3>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li> <a href="home"> Home </a> </li>
			<li class="active"> Penghitungan </li>
		</ol>
	</div>
</div>
<!--Page content-->
<!--===================================================-->
<div id="page-content">

	<div class="col-md-12">
		<div class="panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-ml-10">
                        <h1>Hasil Prediksi Diagnosa</h1>
                        <h4>Hasil ini berdasarkan penghitungan menggunakan algoritma Naive Bayes</h4>

                        <li>Probabilitas Diagnosa "Gangguan Mood" ==> <?php echo $prob_GangguanMood?> ( <?php echo $prob_GangguanMood_percent?>% ) </li>
						<li>Probabilitas Diagnosa "Ringan" ==> <?php echo $prob_Ringan?> ( <?php echo $prob_Ringan_percent?>% )</li>
						<li>Probabilitas Diagnosa "Sedang" ==> <?php echo $prob_Sedang?> ( <?php echo $prob_Sedang_percent?>% )</li>
						<li>Probabilitas Diagnosa "Berat" ==> <?php echo $prob_Berat?> ( <?php echo $prob_Berat_percent?>% )</li>
                        <br>
						<br>
						<h2>Hasil Prediksi Depresi berdasarkan kondisi Pengerjaan Tugas Akhir/Skripsi :
						    <?php 
							if($hasil=="Gangguan Mood"){ ?>
								<span class="badge badge-primary">Gangguan Mood</span>
							<?php }
							else if($hasil=="Ringan"){?>
								<span class="badge badge-success">Ringan</span>
							<?php }
							else if($hasil=="Sedang"){?>
								<span class="badge badge-warning">Sedang</span>
							<?php }
							else if ($hasil=="Berat"){ ?>
						        <span class="badge badge-danger">Berat</span>
							<?php } ?>
						</h2>
						<!-- <h2>Hasil Diagnosa Depresi saat ini :
							<?php if($hasil_bobot=="Gangguan Mood"){ ?>
									<span class="badge badge-primary">Gangguan Mood</span>
							<?php }
							else if($hasil_bobot=="Ringan"){?>
									<span class="badge badge-success">Ringan</span>
							<?php }
							else if($hasil_bobot=="Sedang"){?>
									<span class="badge badge-warning">Sedang</span>
							<?php }
							 else if ($hasil_bobot=="Berat"){ ?>
									<span class="badge badge-danger">Berat</span>
							<?php }?>
						</h2> -->
						<br>
						<br>
						<?php if(isset($solusi) OR isset($solusiA2) OR isset($solusiA3) OR isset($solusiA4) OR isset($solusiA5) OR isset($solusiA6)){?>
						<h3>---Solusi---</h3>
						<?php if (isset($solusi)) {
								foreach ($solusi as $val): ?>
									<li>
										<?php echo $val->problem ?>
									</li>
									<ul>
										<?php echo $val->solusi1 ?> <br>
										<?php echo $val->solusi2 ?> <br>
										<?php echo $val->solusi3 ?> <br>
										<?php echo $val->solusi4 ?> <br>
										<?php echo $val->solusi5 ?> <br>
									</ul>
								<?php endforeach;
							} ?>
							<?php if (isset($solusiA2)) {
								foreach ($solusiA2 as $val): ?>
									<li>
										<?php echo $val->problem . ' (' . $a2 . ')' ?>
									</li>
									<ul>
										<?php echo $val->solusi1 ?> <br>
										<?php echo $val->solusi2 ?> <br>
										<?php echo $val->solusi3 ?> <br>
										<?php echo $val->solusi4 ?> <br>
										<?php echo $val->solusi5 ?> <br>
									</ul>
								<?php endforeach;
							} ?>
							<?php if (isset($solusiA3)) {
								foreach ($solusiA3 as $val): ?>
									<li>
										<?php echo $val->problem . ' (' . $a3 . ')' ?>
									</li>
									<ul>
										<?php echo $val->solusi1 ?> <br>
										<?php echo $val->solusi2 ?> <br>
										<?php echo $val->solusi3 ?> <br>
										<?php echo $val->solusi4 ?> <br>
										<?php echo $val->solusi5 ?> <br>
									</ul>
								<?php endforeach;
							} ?>
							<?php if (isset($solusiA4)) {
								foreach ($solusiA4 as $val): ?>
									<li>
										<?php echo $val->problem . ' (' . $a4 . ')' ?>
									</li>
									<ul>
										<?php echo $val->solusi1 ?> <br>
										<?php echo $val->solusi2 ?> <br>
										<?php echo $val->solusi3 ?> <br>
										<?php echo $val->solusi4 ?> <br>
										<?php echo $val->solusi5 ?> <br>
									</ul>
								<?php endforeach;
							} ?>
							<?php if (isset($solusiA5)) {
								foreach ($solusiA5 as $val): ?>
									<li>
										<?php echo $val->problem . ' (' . $a5 . ')' ?>
									</li>
									<ul>
										<?php echo $val->solusi1 ?> <br>
										<?php echo $val->solusi2 ?> <br>
										<?php echo $val->solusi3 ?> <br>
										<?php echo $val->solusi4 ?> <br>
										<?php echo $val->solusi5 ?> <br>
									</ul>
								<?php endforeach;
							} ?>
							<?php if (isset($solusiA6)) {
								foreach ($solusiA6 as $val): ?>
									<li>
										<?php echo $val->problem . ' (' . $a6 . ')' ?>
									</li>
									<ul>
										<?php echo $val->solusi1 ?> <br>
										<?php echo $val->solusi2 ?> <br>
										<?php echo $val->solusi3 ?> <br>
										<?php echo $val->solusi4 ?> <br>
										<?php echo $val->solusi5 ?> <br>
									</ul>
								<?php endforeach;
							}
						} ?>
						</div>
                    </div>
                </div>
		</div>
	</div>
</div>