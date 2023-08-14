<div class="pageheader ">
	<h3><i class="fa fa-home"></i> Tambah Data </h3>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li> <a href="home"> Home </a> </li>
			<li class="active"> Tambah Data </li>
		</ol>
	</div>
</div>
<!--Page content-->
<!--===================================================-->
<div id="page-content">

	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><a href="<?php echo site_url('c_datatrain')?>">
						<i class="fa fa-arrow-left"></i>
						Back</a>
			</div>
            <h3>Data diri</h3>
			<form action="<?php echo site_url('c_datatrain/tambah')?>" method="post" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label class="control-label">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" required>
							</div>

                            <h4>Semester</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="semester5" name="semester" value="5" required>
                                <label class="form-check-label" for="semester5">5</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="semester6" name="semester" value="6" required>
                                <label class="form-check-label" for="semester6">6</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="semester7" name="semester" value="7" required>
                                <label class="form-check-label" for="semester7">7</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="semester8" name="semester" value="8" required>
                                <label class="form-check-label" for="semester8">8</label>
							</div>

                            <h4>Status Tinggal</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a1a" name="a1" value="Rumah Sendiri" required>
                                <label class="form-check-label" for="a1a">Rumah Sendiri</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a1b" name="a1" value="Bersama Orang Tua" required>
                                <label class="form-check-label" for="a1b">Bersama Orang Tua</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a1c" name="a1" value="Kos" required>
                                <label class="form-check-label" for="a1c">Kos</label>
                            </div>

                            <h4>Keadaan ekonomi harian</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a2a" name="a2" value="Sangat Buruk" required>
                                <label class="form-check-label" for="a2a">Sangat Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a2b" name="a2" value="Buruk" required>
                                <label class="form-check-label" for="a2b">Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a2c" name="a2" value="Cukup" required>
                                <label class="form-check-label" for="a2c">Cukup</label>
                            </div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a2d" name="a2" value="Baik" required>
                                <label class="form-check-label" for="a2d">Baik</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a2e" name="a2" value="Sangat Baik" required>
                                <label class="form-check-label" for="a2e">Sangat Baik</label>
                            </div>

                            <h4>Hubungan dengan dosen pembimbing</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a3a" name="a3" value="Sangat Buruk" required>
                                <label class="form-check-label" for="a3a">Sangat Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a3b" name="a3" value="Buruk" required>
                                <label class="form-check-label" for="a3b">Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a3c" name="a3" value="Cukup" required>
                                <label class="form-check-label" for="a3c">Cukup</label>
                            </div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a3d" name="a3" value="Baik" required>
                                <label class="form-check-label" for="a3d">Baik</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a3e" name="a3" value="Sangat Baik" required>
                                <label class="form-check-label" for="a3e">Sangat Baik</label>
                            </div>

                            <h4>Kemampuan analisis kasus</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a4a" name="a4" value="Sangat Buruk" required>
                                <label class="form-check-label" for="a4a">Sangat Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a4b" name="a4" value="Buruk" required>
                                <label class="form-check-label" for="a4b">Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a4c" name="a4" value="Cukup" required>
                                <label class="form-check-label" for="a4c">Cukup</label>
                            </div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a4d" name="a4" value="Baik" required>
                                <label class="form-check-label" for="a4d">Baik</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a4e" name="a4" value="Sangat Baik" required>
                                <label class="form-check-label" for="a4e">Sangat Baik</label>
                            </div>

                            <h4>Tingkat kepercayaan diri</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a5a" name="a5" value="Sangat Buruk" required>
                                <label class="form-check-label" for="a5a">Sangat Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a5b" name="a5" value="Buruk" required>
                                <label class="form-check-label" for="a5b">Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a5c" name="a5" value="Cukup" required>
                                <label class="form-check-label" for="a5c">Cukup</label>
                            </div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a5d" name="a5" value="Baik" required>
                                <label class="form-check-label" for="a5d">Baik</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a5e" name="a5" value="Sangat Baik" required>
                                <label class="form-check-label" for="a5e">Sangat Baik</label>
                            </div>

                            <h4>Kesiapan mental terhadap pengujian</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a6a" name="a6" value="Sangat Buruk" required>
                                <label class="form-check-label" for="a6a">Sangat Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a6b" name="a6" value="Buruk" required>
                                <label class="form-check-label" for="a6b">Buruk</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a6c" name="a6" value="Cukup" required>
                                <label class="form-check-label" for="a6c">Cukup</label>
                            </div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a6d" name="a6" value="Baik" required>
                                <label class="form-check-label" for="a6d">Baik</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="a6e" name="a6" value="Sangat Baik" required>
                                <label class="form-check-label" for="a6e">Sangat Baik</label>
                            </div>

                            <h4>Hasil</h4>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="hasil1" name="hasil" value="Gangguan Mood" required>
                                <label class="form-check-label" for="hasil1">Gangguan Mood</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="hasil2" name="hasil" value="Ringan" required>
                                <label class="form-check-label" for="hasil2">Ringan</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="hasil3" name="hasil" value="Sedang" required>
                                <label class="form-check-label" for="hasil3">Sedang</label>
							</div>
                            <div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" id="hasil4" name="hasil" value="Berat" required>
                                <label class="form-check-label" for="hasil4">Berat</label>
							</div>
                            
                            <br>
							<div class="text-center">
								<button class="btn btn-primary btn-block" type="submit">Submit</button>
							</div>			
                            <br><br>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
