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
                        <h1>Probabilitas Kelas</h1>
                        <h4>Untuk mengetahui hasil probabilitas diagnosa, bagikan jumlah data kelas dengan semua data:</h4>
                        <li>P (Gangguan Mood)  =  <?php echo $HasilGangguanMood. '/' .$All ?> </li>
                        <li>P (Ringan) = <?php echo $HasilRingan. '/' .$All ?> </li>
                        <li>P (Sedang) = <?php echo $HasilSedang. '/' .$All ?> </li>
                        <li>P (Berat) = <?php echo $HasilBerat. '/' .$All ?> </li>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th>Gangguan Mood</th>
                                <th>Ringan</th>
                                <th>Sedang</th>
                                <th>Berat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><?php echo $P_HasilGangguanMood ?></td>
                                <td><?php echo $P_HasilRingan ?></td>
                                <td><?php echo $P_HasilSedang ?></td>
                                <td><?php echo $P_HasilBerat ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-ml-10">
                        <h1>Probabilitas Diagnosa Gangguan Mood</h1>
                        <h4>Untuk mengetahui hasil probabilitas, bagikan jumlah data variabel dengan jumlah data diagnosa:</h4>
                        <li>P (Gangguan Mood | A1) </li>
                        <ul>P (A1 | Bersama Orang Tua) = <?php echo $HasilGangguanMoodA1Ortu. '/' .$HasilGangguanMood ?> <br>
                        P (A1 | Kos) = <?php echo $HasilGangguanMoodA1Kos. '/' .$HasilGangguanMood ?> <br>
                        P (A1 | Rumah Sendiri) = <?php echo $HasilGangguanMoodA1Sendiri. '/' .$HasilGangguanMood ?> <br>
                        </ul>
                        <li>P (Gangguan Mood | A2) </li>
                        <ul>P (A2 | Sangat Buruk) = <?php echo $HasilGangguanMoodA2SangatBuruk. '/' .$HasilGangguanMood ?> <br>
                        P (A2 | Buruk) = <?php echo $HasilGangguanMoodA2Buruk. '/' .$HasilGangguanMood ?> <br>
                        P (A2 | Cukup) = <?php echo $HasilGangguanMoodA2Cukup. '/' .$HasilGangguanMood ?> <br>
                        P (A2 | Baik) = <?php echo $HasilGangguanMoodA2Baik. '/' .$HasilGangguanMood ?> <br>
                        P (A2 | Sangat Baik) = <?php echo $HasilGangguanMoodA2SangatBaik. '/' .$HasilGangguanMood ?> <br>
                        </ul>
                        <li>P (Gangguan Mood | A3)</li>
                        <ul>P (A3 | Sangat Buruk) = <?php echo $HasilGangguanMoodA3SangatBuruk. '/' .$HasilGangguanMood ?> <br>
                        P (A3 | Buruk) = <?php echo $HasilGangguanMoodA3Buruk. '/' .$HasilGangguanMood ?> <br>
                        P (A3 | Cukup) = <?php echo $HasilGangguanMoodA3Cukup. '/' .$HasilGangguanMood ?> <br>
                        P (A3 | Baik) = <?php echo $HasilGangguanMoodA3Baik. '/' .$HasilGangguanMood ?> <br>
                        P (A3 | Sangat Baik) = <?php echo $HasilGangguanMoodA3SangatBaik. '/' .$HasilGangguanMood ?> <br>
                        </ul>
                        <li>P (Gangguan Mood | A4)</li>
                        <ul>P (A4 | Sangat Buruk) = <?php echo $HasilGangguanMoodA4SangatBuruk. '/' .$HasilGangguanMood ?> <br>
                        P (A4 | Buruk) = <?php echo $HasilGangguanMoodA4Buruk. '/' .$HasilGangguanMood ?> <br>
                        P (A4 | Cukup) = <?php echo $HasilGangguanMoodA4Cukup. '/' .$HasilGangguanMood ?> <br>
                        P (A4 | Baik) = <?php echo $HasilGangguanMoodA4Baik. '/' .$HasilGangguanMood ?> <br>
                        P (A4 | Sangat Baik) = <?php echo $HasilGangguanMoodA4SangatBaik. '/' .$HasilGangguanMood ?> <br>
                        </ul>
                        <li>P (Gangguan Mood | A5)</li>
                        <ul>P (A5 | Sangat Buruk) = <?php echo $HasilGangguanMoodA5SangatBuruk. '/' .$HasilGangguanMood ?> <br>
                        P (A5 | Buruk) = <?php echo $HasilGangguanMoodA5Buruk. '/' .$HasilGangguanMood ?> <br>
                        P (A5 | Cukup) = <?php echo $HasilGangguanMoodA5Cukup. '/' .$HasilGangguanMood ?> <br>
                        P (A5 | Baik) = <?php echo $HasilGangguanMoodA5Baik. '/' .$HasilGangguanMood ?> <br>
                        P (A5 | Sangat Baik) = <?php echo $HasilGangguanMoodA5SangatBaik. '/' .$HasilGangguanMood ?> <br>
                        </ul>
                        <li>P (Gangguan Mood | A6)</li>
                        <ul>P (A6 | Sangat Buruk) = <?php echo $HasilGangguanMoodA6SangatBuruk. '/' .$HasilGangguanMood ?> <br>
                        P (A6 | Buruk) = <?php echo $HasilGangguanMoodA6Buruk. '/' .$HasilGangguanMood ?> <br>
                        P (A6 | Cukup) = <?php echo $HasilGangguanMoodA6Cukup. '/' .$HasilGangguanMood ?> <br>
                        P (A6 | Baik) = <?php echo $HasilGangguanMoodA6Baik. '/' .$HasilGangguanMood ?> <br>
                        P (A6 | Sangat Baik) = <?php echo $HasilGangguanMoodA6SangatBaik. '/' .$HasilGangguanMood ?> <br>
                        </ul>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Bersama Orang Tua</th>
                                <th>Kos</th>
                                <th>Rumah Sendiri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Status Tinggal</td>
                                <td><?php echo $P_HasilGangguanMoodA1Ortu ?></td>
                                <td><?php echo $P_HasilGangguanMoodA1Kos ?></td>
                                <td><?php echo $P_HasilGangguanMoodA1Sendiri ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Sangat Buruk</th>
                                <th>Buruk</th>
                                <th>Cukup</th>
                                <th>Baik</th>
                                <th>Sangat Baik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Keadaan Ekonomi</td>
                                <td><?php echo $P_HasilGangguanMoodA2SangatBuruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA2Buruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA2Cukup ?></td>
                                <td><?php echo $P_HasilGangguanMoodA2Baik ?></td>
                                <td><?php echo $P_HasilGangguanMoodA2SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Hubungan Dosen Pembimbing</td>
                                <td><?php echo $P_HasilGangguanMoodA3SangatBuruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA3Buruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA3Cukup ?></td>
                                <td><?php echo $P_HasilGangguanMoodA3Baik ?></td>
                                <td><?php echo $P_HasilGangguanMoodA3SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kemampuan Analisis Kasus</td>
                                <td><?php echo $P_HasilGangguanMoodA4SangatBuruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA4Buruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA4Cukup ?></td>
                                <td><?php echo $P_HasilGangguanMoodA4Baik ?></td>
                                <td><?php echo $P_HasilGangguanMoodA4SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Tingkat Kepercayaan Diri</td>
                                <td><?php echo $P_HasilGangguanMoodA5SangatBuruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA5Buruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA5Cukup ?></td>
                                <td><?php echo $P_HasilGangguanMoodA5Baik ?></td>
                                <td><?php echo $P_HasilGangguanMoodA5SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kesiapan Mental Terhadap Penguji</td>
                                <td><?php echo $P_HasilGangguanMoodA6SangatBuruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA6Buruk ?></td>
                                <td><?php echo $P_HasilGangguanMoodA6Cukup ?></td>
                                <td><?php echo $P_HasilGangguanMoodA6Baik ?></td>
                                <td><?php echo $P_HasilGangguanMoodA6SangatBaik ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-ml-10">
                        <h1>Probabilitas Diagnosa Ringan</h1>
                        <h4>Untuk mengetahui hasil probabilitas, bagikan jumlah data variabel dengan jumlah data diagnosa:</h4>
                        <li>P (Ringan | A1) </li>
                        <ul>P (A1 | Bersama Orang Tua) = <?php echo $HasilRinganA1Ortu. '/' .$HasilRingan ?> <br>
                        P (A1 | Kos) = <?php echo $HasilRinganA1Kos. '/' .$HasilRingan ?> <br>
                        P (A1 | Rumah Sendiri) = <?php echo $HasilRinganA1Sendiri. '/' .$HasilRingan ?> <br>
                        </ul>
                        <li>P (Ringan | A2) </li>
                        <ul>P (A2 | Sangat Buruk) = <?php echo $HasilRinganA2SangatBuruk. '/' .$HasilRingan ?> <br>
                        P (A2 | Buruk) = <?php echo $HasilRinganA2Buruk. '/' .$HasilRingan ?> <br>
                        P (A2 | Cukup) = <?php echo $HasilRinganA2Cukup. '/' .$HasilRingan ?> <br>
                        P (A2 | Baik) = <?php echo $HasilRinganA2Baik. '/' .$HasilRingan ?> <br>
                        P (A2 | Sangat Baik) = <?php echo $HasilRinganA2SangatBaik. '/' .$HasilRingan ?> <br>
                        </ul>
                        <li>P (Ringan | A3)  = </li>
                        <ul>P (A3 | Sangat Buruk) = <?php echo $HasilRinganA3SangatBuruk. '/' .$HasilRingan ?> <br>
                        P (A3 | Buruk) = <?php echo $HasilRinganA3Buruk. '/' .$HasilRingan ?> <br>
                        P (A3 | Cukup) = <?php echo $HasilRinganA3Cukup. '/' .$HasilRingan ?> <br>
                        P (A3 | Baik) = <?php echo $HasilRinganA3Baik. '/' .$HasilRingan ?> <br>
                        P (A3 | Sangat Baik) = <?php echo $HasilRinganA3SangatBaik. '/' .$HasilRingan ?> <br>
                        </ul>
                        <li>P (Ringan | A4)  = </li>
                        <ul>P (A4 | Sangat Buruk) = <?php echo $HasilRinganA4SangatBuruk. '/' .$HasilRingan ?> <br>
                        P (A4 | Buruk) = <?php echo $HasilRinganA4Buruk. '/' .$HasilRingan ?> <br>
                        P (A4 | Cukup) = <?php echo $HasilRinganA4Cukup. '/' .$HasilRingan ?> <br>
                        P (A4 | Baik) = <?php echo $HasilRinganA4Baik. '/' .$HasilRingan ?> <br>
                        P (A4 | Sangat Baik) = <?php echo $HasilRinganA4SangatBaik. '/' .$HasilRingan ?> <br>
                        </ul>
                        <li>P (Ringan | A5)  = </li>
                        <ul>P (A5 | Sangat Buruk) = <?php echo $HasilRinganA5SangatBuruk. '/' .$HasilRingan ?> <br>
                        P (A5 | Buruk) = <?php echo $HasilRinganA5Buruk. '/' .$HasilRingan ?> <br>
                        P (A5 | Cukup) = <?php echo $HasilRinganA5Cukup. '/' .$HasilRingan ?> <br>
                        P (A5 | Baik) = <?php echo $HasilRinganA5Baik. '/' .$HasilRingan ?> <br>
                        P (A5 | Sangat Baik) = <?php echo $HasilRinganA5SangatBaik. '/' .$HasilRingan ?> <br>
                        </ul>
                        <li>P (Ringan | A6)  = </li>
                        <ul>P (A6 | Sangat Buruk) = <?php echo $HasilRinganA6SangatBuruk. '/' .$HasilRingan ?> <br>
                        P (A6 | Buruk) = <?php echo $HasilRinganA6Buruk. '/' .$HasilRingan ?> <br>
                        P (A6 | Cukup) = <?php echo $HasilRinganA6Cukup. '/' .$HasilRingan ?> <br>
                        P (A6 | Baik) = <?php echo $HasilRinganA6Baik. '/' .$HasilRingan ?> <br>
                        P (A6 | Sangat Baik) = <?php echo $HasilRinganA6SangatBaik. '/' .$HasilRingan ?> <br>
                        </ul>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Bersama Orang Tua</th>
                                <th>Kos</th>
                                <th>Rumah Sendiri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Status Tinggal</td>
                                <td><?php echo $P_HasilRinganA1Ortu ?></td>
                                <td><?php echo $P_HasilRinganA1Kos ?></td>
                                <td><?php echo $P_HasilRinganA1Sendiri ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Sangat Buruk</th>
                                <th>Buruk</th>
                                <th>Cukup</th>
                                <th>Baik</th>
                                <th>Sangat Baik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Keadaan Ekonomi</td>
                                <td><?php echo $P_HasilRinganA2SangatBuruk ?></td>
                                <td><?php echo $P_HasilRinganA2Buruk ?></td>
                                <td><?php echo $P_HasilRinganA2Cukup ?></td>
                                <td><?php echo $P_HasilRinganA2Baik ?></td>
                                <td><?php echo $P_HasilRinganA2SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Hubungan Dosen Pembimbing</td>
                                <td><?php echo $P_HasilRinganA3SangatBuruk ?></td>
                                <td><?php echo $P_HasilRinganA3Buruk ?></td>
                                <td><?php echo $P_HasilRinganA3Cukup ?></td>
                                <td><?php echo $P_HasilRinganA3Baik ?></td>
                                <td><?php echo $P_HasilRinganA3SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kemampuan Analisis Kasus</td>
                                <td><?php echo $P_HasilRinganA4SangatBuruk ?></td>
                                <td><?php echo $P_HasilRinganA4Buruk ?></td>
                                <td><?php echo $P_HasilRinganA4Cukup ?></td>
                                <td><?php echo $P_HasilRinganA4Baik ?></td>
                                <td><?php echo $P_HasilRinganA4SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Tingkat Kepercayaan Diri</td>
                                <td><?php echo $P_HasilRinganA5SangatBuruk ?></td>
                                <td><?php echo $P_HasilRinganA5Buruk ?></td>
                                <td><?php echo $P_HasilRinganA5Cukup ?></td>
                                <td><?php echo $P_HasilRinganA5Baik ?></td>
                                <td><?php echo $P_HasilRinganA5SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kesiapan Mental Terhadap Penguji</td>
                                <td><?php echo $P_HasilRinganA6SangatBuruk ?></td>
                                <td><?php echo $P_HasilRinganA6Buruk ?></td>
                                <td><?php echo $P_HasilRinganA6Cukup ?></td>
                                <td><?php echo $P_HasilRinganA6Baik ?></td>
                                <td><?php echo $P_HasilRinganA6SangatBaik ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-ml-10">
                        <h1>Probabilitas Diagnosa Sedang</h1>
                        <h4>Untuk mengetahui hasil probabilitas, bagikan jumlah data variabel dengan jumlah data diagnosa:</h4>
                        <li>P (Sedang | A1) </li>
                        <ul>P (A1 | Bersama Orang Tua) = <?php echo $HasilSedangA1Ortu. '/' .$HasilSedang ?> <br>
                        P (A1 | Kos) = <?php echo $HasilSedangA1Kos. '/' .$HasilSedang ?> <br>
                        P (A1 | Rumah Sendiri) = <?php echo $HasilSedangA1Sendiri. '/' .$HasilSedang ?> <br>
                        </ul>
                        <li>P (Sedang | A2) </li>
                        <ul>P (A2 | Sangat Buruk) = <?php echo $HasilSedangA2SangatBuruk. '/' .$HasilSedang ?> <br>
                        P (A2 | Buruk) = <?php echo $HasilSedangA2Buruk. '/' .$HasilSedang ?> <br>
                        P (A2 | Cukup) = <?php echo $HasilSedangA2Cukup. '/' .$HasilSedang ?> <br>
                        P (A2 | Baik) = <?php echo $HasilSedangA2Baik. '/' .$HasilSedang ?> <br>
                        P (A2 | Sangat Baik) = <?php echo $HasilSedangA2SangatBaik. '/' .$HasilSedang ?> <br>
                        </ul>
                        <li>P (Sedang | A3)  = </li>
                        <ul>P (A3 | Sangat Buruk) = <?php echo $HasilSedangA3SangatBuruk. '/' .$HasilSedang ?> <br>
                        P (A3 | Buruk) = <?php echo $HasilSedangA3Buruk. '/' .$HasilSedang ?> <br>
                        P (A3 | Cukup) = <?php echo $HasilSedangA3Cukup. '/' .$HasilSedang ?> <br>
                        P (A3 | Baik) = <?php echo $HasilSedangA3Baik. '/' .$HasilSedang ?> <br>
                        P (A3 | Sangat Baik) = <?php echo $HasilSedangA3SangatBaik. '/' .$HasilSedang ?> <br>
                        </ul>
                        <li>P (Sedang | A4)  = </li>
                        <ul>P (A4 | Sangat Buruk) = <?php echo $HasilSedangA4SangatBuruk. '/' .$HasilSedang ?> <br>
                        P (A4 | Buruk) = <?php echo $HasilSedangA4Buruk. '/' .$HasilSedang ?> <br>
                        P (A4 | Cukup) = <?php echo $HasilSedangA4Cukup. '/' .$HasilSedang ?> <br>
                        P (A4 | Baik) = <?php echo $HasilSedangA4Baik. '/' .$HasilSedang ?> <br>
                        P (A4 | Sangat Baik) = <?php echo $HasilSedangA4SangatBaik. '/' .$HasilSedang ?> <br>
                        </ul>
                        <li>P (Sedang | A5)  = </li>
                        <ul>P (A5 | Sangat Buruk) = <?php echo $HasilSedangA5SangatBuruk. '/' .$HasilSedang ?> <br>
                        P (A5 | Buruk) = <?php echo $HasilSedangA5Buruk. '/' .$HasilSedang ?> <br>
                        P (A5 | Cukup) = <?php echo $HasilSedangA5Cukup. '/' .$HasilSedang ?> <br>
                        P (A5 | Baik) = <?php echo $HasilSedangA5Baik. '/' .$HasilSedang ?> <br>
                        P (A5 | Sangat Baik) = <?php echo $HasilSedangA5SangatBaik. '/' .$HasilSedang ?> <br>
                        </ul>
                        <li>P (Sedang | A6)  = </li>
                        <ul>P (A6 | Sangat Buruk) = <?php echo $HasilSedangA6SangatBuruk. '/' .$HasilSedang ?> <br>
                        P (A6 | Buruk) = <?php echo $HasilSedangA6Buruk. '/' .$HasilSedang ?> <br>
                        P (A6 | Cukup) = <?php echo $HasilSedangA6Cukup. '/' .$HasilSedang ?> <br>
                        P (A6 | Baik) = <?php echo $HasilSedangA6Baik. '/' .$HasilSedang ?> <br>
                        P (A6 | Sangat Baik) = <?php echo $HasilSedangA6SangatBaik. '/' .$HasilSedang ?> <br>
                        </ul>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Bersama Orang Tua</th>
                                <th>Kos</th>
                                <th>Rumah Sendiri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Status Tinggal</td>
                                <td><?php echo $P_HasilSedangA1Ortu ?></td>
                                <td><?php echo $P_HasilSedangA1Kos ?></td>
                                <td><?php echo $P_HasilSedangA1Sendiri ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Sangat Buruk</th>
                                <th>Buruk</th>
                                <th>Cukup</th>
                                <th>Baik</th>
                                <th>Sangat Baik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Keadaan Ekonomi</td>
                                <td><?php echo $P_HasilSedangA2SangatBuruk ?></td>
                                <td><?php echo $P_HasilSedangA2Buruk ?></td>
                                <td><?php echo $P_HasilSedangA2Cukup ?></td>
                                <td><?php echo $P_HasilSedangA2Baik ?></td>
                                <td><?php echo $P_HasilSedangA2SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Hubungan Dosen Pembimbing</td>
                                <td><?php echo $P_HasilSedangA3SangatBuruk ?></td>
                                <td><?php echo $P_HasilSedangA3Buruk ?></td>
                                <td><?php echo $P_HasilSedangA3Cukup ?></td>
                                <td><?php echo $P_HasilSedangA3Baik ?></td>
                                <td><?php echo $P_HasilSedangA3SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kemampuan Analisis Kasus</td>
                                <td><?php echo $P_HasilSedangA4SangatBuruk ?></td>
                                <td><?php echo $P_HasilSedangA4Buruk ?></td>
                                <td><?php echo $P_HasilSedangA4Cukup ?></td>
                                <td><?php echo $P_HasilSedangA4Baik ?></td>
                                <td><?php echo $P_HasilSedangA4SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Tingkat Kepercayaan Diri</td>
                                <td><?php echo $P_HasilSedangA5SangatBuruk ?></td>
                                <td><?php echo $P_HasilSedangA5Buruk ?></td>
                                <td><?php echo $P_HasilSedangA5Cukup ?></td>
                                <td><?php echo $P_HasilSedangA5Baik ?></td>
                                <td><?php echo $P_HasilSedangA5SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kesiapan Mental Terhadap Penguji</td>
                                <td><?php echo $P_HasilSedangA6SangatBuruk ?></td>
                                <td><?php echo $P_HasilSedangA6Buruk ?></td>
                                <td><?php echo $P_HasilSedangA6Cukup ?></td>
                                <td><?php echo $P_HasilSedangA6Baik ?></td>
                                <td><?php echo $P_HasilSedangA6SangatBaik ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-ml-10">
                        <h1>Probabilitas Diagnosa Berat</h1>
                        <h4>Untuk mengetahui hasil probabilitas, bagikan jumlah data variabel dengan jumlah data diagnosa:</h4>
                        <li>P (Berat | A1) </li>
                        <ul>P (A1 | Bersama Orang Tua) = <?php echo $HasilBeratA1Ortu. '/' .$HasilBerat ?> <br>
                        P (A1 | Kos) = <?php echo $HasilBeratA1Kos. '/' .$HasilBerat ?> <br>
                        P (A1 | Rumah Sendiri) = <?php echo $HasilBeratA1Sendiri. '/' .$HasilBerat ?> <br>
                        </ul>
                        <li>P (Berat | A2) </li>
                        <ul>P (A2 | Sangat Buruk) = <?php echo $HasilBeratA2SangatBuruk. '/' .$HasilBerat ?> <br>
                        P (A2 | Buruk) = <?php echo $HasilBeratA2Buruk. '/' .$HasilBerat ?> <br>
                        P (A2 | Cukup) = <?php echo $HasilBeratA2Cukup. '/' .$HasilBerat ?> <br>
                        P (A2 | Baik) = <?php echo $HasilBeratA2Baik. '/' .$HasilBerat ?> <br>
                        P (A2 | Sangat Baik) = <?php echo $HasilBeratA2SangatBaik. '/' .$HasilBerat ?> <br>
                        </ul>
                        <li>P (Berat | A3)  = </li>
                        <ul>P (A3 | Sangat Buruk) = <?php echo $HasilBeratA3SangatBuruk. '/' .$HasilBerat ?> <br>
                        P (A3 | Buruk) = <?php echo $HasilBeratA3Buruk. '/' .$HasilBerat ?> <br>
                        P (A3 | Cukup) = <?php echo $HasilBeratA3Cukup. '/' .$HasilBerat ?> <br>
                        P (A3 | Baik) = <?php echo $HasilBeratA3Baik. '/' .$HasilBerat ?> <br>
                        P (A3 | Sangat Baik) = <?php echo $HasilBeratA3SangatBaik. '/' .$HasilBerat ?> <br>
                        </ul>
                        <li>P (Berat | A4)  = </li>
                        <ul>P (A4 | Sangat Buruk) = <?php echo $HasilBeratA4SangatBuruk. '/' .$HasilBerat ?> <br>
                        P (A4 | Buruk) = <?php echo $HasilBeratA4Buruk. '/' .$HasilBerat ?> <br>
                        P (A4 | Cukup) = <?php echo $HasilBeratA4Cukup. '/' .$HasilBerat ?> <br>
                        P (A4 | Baik) = <?php echo $HasilBeratA4Baik. '/' .$HasilBerat ?> <br>
                        P (A4 | Sangat Baik) = <?php echo $HasilBeratA4SangatBaik. '/' .$HasilBerat ?> <br>
                        </ul>
                        <li>P (Berat | A5)  = </li>
                        <ul>P (A5 | Sangat Buruk) = <?php echo $HasilBeratA5SangatBuruk. '/' .$HasilBerat ?> <br>
                        P (A5 | Buruk) = <?php echo $HasilBeratA5Buruk. '/' .$HasilBerat ?> <br>
                        P (A5 | Cukup) = <?php echo $HasilBeratA5Cukup. '/' .$HasilBerat ?> <br>
                        P (A5 | Baik) = <?php echo $HasilBeratA5Baik. '/' .$HasilBerat ?> <br>
                        P (A5 | Sangat Baik) = <?php echo $HasilBeratA5SangatBaik. '/' .$HasilBerat ?> <br>
                        </ul>
                        <li>P (Berat | A6)  = </li>
                        <ul>P (A6 | Sangat Buruk) = <?php echo $HasilBeratA6SangatBuruk. '/' .$HasilBerat ?> <br>
                        P (A6 | Buruk) = <?php echo $HasilBeratA6Buruk. '/' .$HasilBerat ?> <br>
                        P (A6 | Cukup) = <?php echo $HasilBeratA6Cukup. '/' .$HasilBerat ?> <br>
                        P (A6 | Baik) = <?php echo $HasilBeratA6Baik. '/' .$HasilBerat ?> <br>
                        P (A6 | Sangat Baik) = <?php echo $HasilBeratA6SangatBaik. '/' .$HasilBerat ?> <br>
                        </ul>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Bersama Orang Tua</th>
                                <th>Kos</th>
                                <th>Rumah Sendiri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Status Tinggal</td>
                                <td><?php echo $P_HasilBeratA1Ortu ?></td>
                                <td><?php echo $P_HasilBeratA1Kos ?></td>
                                <td><?php echo $P_HasilBeratA1Sendiri ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                <th width="200">Faktor Depresi</th>
                                <th>Sangat Buruk</th>
                                <th>Buruk</th>
                                <th>Cukup</th>
                                <th>Baik</th>
                                <th>Sangat Baik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Keadaan Ekonomi</td>
                                <td><?php echo $P_HasilBeratA2SangatBuruk ?></td>
                                <td><?php echo $P_HasilBeratA2Buruk ?></td>
                                <td><?php echo $P_HasilBeratA2Cukup ?></td>
                                <td><?php echo $P_HasilBeratA2Baik ?></td>
                                <td><?php echo $P_HasilBeratA2SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Hubungan Dosen Pembimbing</td>
                                <td><?php echo $P_HasilBeratA3SangatBuruk ?></td>
                                <td><?php echo $P_HasilBeratA3Buruk ?></td>
                                <td><?php echo $P_HasilBeratA3Cukup ?></td>
                                <td><?php echo $P_HasilBeratA3Baik ?></td>
                                <td><?php echo $P_HasilBeratA3SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kemampuan Analisis Kasus</td>
                                <td><?php echo $P_HasilBeratA4SangatBuruk ?></td>
                                <td><?php echo $P_HasilBeratA4Buruk ?></td>
                                <td><?php echo $P_HasilBeratA4Cukup ?></td>
                                <td><?php echo $P_HasilBeratA4Baik ?></td>
                                <td><?php echo $P_HasilBeratA4SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Tingkat Kepercayaan Diri</td>
                                <td><?php echo $P_HasilBeratA5SangatBuruk ?></td>
                                <td><?php echo $P_HasilBeratA5Buruk ?></td>
                                <td><?php echo $P_HasilBeratA5Cukup ?></td>
                                <td><?php echo $P_HasilBeratA5Baik ?></td>
                                <td><?php echo $P_HasilBeratA5SangatBaik ?></td>
                                </tr>
                                <tr>
                                <td>Kesiapan Mental Terhadap Penguji</td>
                                <td><?php echo $P_HasilBeratA6SangatBuruk ?></td>
                                <td><?php echo $P_HasilBeratA6Buruk ?></td>
                                <td><?php echo $P_HasilBeratA6Cukup ?></td>
                                <td><?php echo $P_HasilBeratA6Baik ?></td>
                                <td><?php echo $P_HasilBeratA6SangatBaik ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		</div>
	</div>
</div>
