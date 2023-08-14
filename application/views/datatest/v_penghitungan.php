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
                                                <h3>Probabilitas setiap diagnosa</h3>
                                                <li> Probabilitas (Gangguan Mood) = <?php echo $HasilGangguanMood. '/' .$All ?> </li>
                                                <li> Probabilitas (Ringan) = <?php echo $HasilRingan. '/' .$All ?> </li>
                                                <li> Probabilitas (Sedang) = <?php echo $HasilSedang. '/' .$All ?> </li>
                                                <li> Probabilitas (Berat) = <?php echo $HasilBerat. '/' .$All ?> </li>
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
                                                <br>
                                                <br>
                                                <h3>Data Diri User</h3>
                                                <div class="form-group">
                                                        <label class="control-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama" name="nama"
                                                                value="<?= $user['nama'] ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                        <label class="control-label">Status Tinggal</label>
                                                        <input type="text" class="form-control" id="a1" name="a1"
                                                                value="<?= $user['a1'] ?>" disabled>
                                                </div>
                                                <?php if($user['a1']=="Bersama Orang Tua"){ ?>
                                                        <li> Probabilitas (Ortu | Gangguan Mood) = <?php echo $A1GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Ortu | Ringan) = <?php echo $A1Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Ortu | Sedang) = <?php echo $A1Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Ortu | Berat) = <?php echo $A1Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A1GangguanMood ?></td>
                                                                        <td><?php echo $P_A1Ringan ?></td>
                                                                        <td><?php echo $P_A1Sedang ?></td>
                                                                        <td><?php echo $P_A1Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a1']=="Kos"){ ?>
                                                        <li> Probabilitas (Kos | Gangguan Mood) = <?php echo $A1GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Kos | Ringan) = <?php echo $A1Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Kos | Sedang) = <?php echo $A1Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Kos | Berat) = <?php echo $A1Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A1GangguanMood ?></td>
                                                                        <td><?php echo $P_A1Ringan ?></td>
                                                                        <td><?php echo $P_A1Sedang ?></td>
                                                                        <td><?php echo $P_A1Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a1']=="Rumah Sendiri"){ ?>
                                                        <li> Probabilitas (Sendiri | Gangguan Mood) = <?php echo $A1GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sendiri | Ringan) = <?php echo $A1Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sendiri | Sedang) = <?php echo $A1Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sendiri | Berat) = <?php echo $A1Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A1GangguanMood ?></td>
                                                                        <td><?php echo $P_A1Ringan ?></td>
                                                                        <td><?php echo $P_A1Sedang ?></td>
                                                                        <td><?php echo $P_A1Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php } ?>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label">Keadaan Ekonomi</label>
                                                        <input type="text" class="form-control" id="a2" name="a2"
                                                                value="<?= $user['a2'] ?>" disabled>
                                                </div>
                                                <?php if($user['a2']=="Sangat Buruk"){ ?>
                                                        <li> Probabilitas (Sangat Buruk | Gangguan Mood) = <?php echo $A2GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Ringan) = <?php echo $A2Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Sedang) = <?php echo $A2Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Berat) = <?php echo $A2Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A2GangguanMood ?></td>
                                                                        <td><?php echo $P_A2Ringan ?></td>
                                                                        <td><?php echo $P_A2Sedang ?></td>
                                                                        <td><?php echo $P_A2Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a2']=="Buruk"){ ?>
                                                        <li> Probabilitas (Buruk | Gangguan Mood) = <?php echo $A2GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Buruk | Ringan) = <?php echo $A2Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Buruk | Sedang) = <?php echo $A2Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Buruk | Berat) = <?php echo $A2Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A2GangguanMood ?></td>
                                                                        <td><?php echo $P_A2Ringan ?></td>
                                                                        <td><?php echo $P_A2Sedang ?></td>
                                                                        <td><?php echo $P_A2Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a2']=="Cukup"){ ?>
                                                        <li> Probabilitas (Cukup | Gangguan Mood) = <?php echo $A2GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Cukup | Ringan) = <?php echo $A2Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Cukup | Sedang) = <?php echo $A2Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Cukup | Berat) = <?php echo $A2Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A2GangguanMood ?></td>
                                                                        <td><?php echo $P_A2Ringan ?></td>
                                                                        <td><?php echo $P_A2Sedang ?></td>
                                                                        <td><?php echo $P_A2Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a2']=="Baik"){ ?>
                                                        <li> Probabilitas (Baik | Gangguan Mood) = <?php echo $A2GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Baik | Ringan) = <?php echo $A2Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Baik | Sedang) = <?php echo $A2Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Baik | Berat) = <?php echo $A2Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A2GangguanMood ?></td>
                                                                        <td><?php echo $P_A2Ringan ?></td>
                                                                        <td><?php echo $P_A2Sedang ?></td>
                                                                        <td><?php echo $P_A2Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a2']=="Sangat Baik"){ ?>
                                                        <li> Probabilitas (Sangat Baik | Gangguan Mood) = <?php echo $A2GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Ringan) = <?php echo $A2Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Sedang) = <?php echo $A2Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Berat) = <?php echo $A2Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A2GangguanMood ?></td>
                                                                        <td><?php echo $P_A2Ringan ?></td>
                                                                        <td><?php echo $P_A2Sedang ?></td>
                                                                        <td><?php echo $P_A2Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php } ?>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label">Hubungan Dengan Dosen
                                                                Pembimbing</label>
                                                        <input type="text" class="form-control" id="a3" name="a3"
                                                                value="<?= $user['a3'] ?>" disabled>
                                                </div>
                                                <?php if($user['a3']=="Sangat Buruk"){ ?>
                                                        <li> Probabilitas (Sangat Buruk | Gangguan Mood) = <?php echo $A3GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Ringan) = <?php echo $A3Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Sedang) = <?php echo $A3Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Berat) = <?php echo $A3Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A3GangguanMood ?></td>
                                                                        <td><?php echo $P_A3Ringan ?></td>
                                                                        <td><?php echo $P_A3Sedang ?></td>
                                                                        <td><?php echo $P_A3Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a3']=="Buruk"){ ?>
                                                        <li> Probabilitas (Buruk | Gangguan Mood) = <?php echo $A3GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Buruk | Ringan) = <?php echo $A3Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Buruk | Sedang) = <?php echo $A3Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Buruk | Berat) = <?php echo $A3Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A3GangguanMood ?></td>
                                                                        <td><?php echo $P_A3Ringan ?></td>
                                                                        <td><?php echo $P_A3Sedang ?></td>
                                                                        <td><?php echo $P_A3Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a3']=="Cukup"){ ?>
                                                        <li> Probabilitas (Cukup | Gangguan Mood) = <?php echo $A3GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Cukup | Ringan) = <?php echo $A3Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Cukup | Sedang) = <?php echo $A3Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Cukup | Berat) = <?php echo $A3Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A3GangguanMood ?></td>
                                                                        <td><?php echo $P_A3Ringan ?></td>
                                                                        <td><?php echo $P_A3Sedang ?></td>
                                                                        <td><?php echo $P_A3Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a3']=="Baik"){ ?>
                                                        <li> Probabilitas (Baik | Gangguan Mood) = <?php echo $A3GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Baik | Ringan) = <?php echo $A3Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Baik | Sedang) = <?php echo $A3Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Baik | Berat) = <?php echo $A3Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A3GangguanMood ?></td>
                                                                        <td><?php echo $P_A3Ringan ?></td>
                                                                        <td><?php echo $P_A3Sedang ?></td>
                                                                        <td><?php echo $P_A3Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a3']=="Sangat Baik"){ ?>
                                                        <li> Probabilitas (Sangat Baik | Gangguan Mood) = <?php echo $A3GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Ringan) = <?php echo $A3Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Sedang) = <?php echo $A3Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Berat) = <?php echo $A3Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A3GangguanMood ?></td>
                                                                        <td><?php echo $P_A3Ringan ?></td>
                                                                        <td><?php echo $P_A3Sedang ?></td>
                                                                        <td><?php echo $P_A3Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php } ?>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label">Kemampuan Analisis Kasus</label>
                                                        <input type="text" class="form-control" id="a4" name="a4"
                                                                value="<?= $user['a4'] ?>" disabled>
                                                </div>
                                                <?php if($user['a4']=="Sangat Buruk"){ ?>
                                                        <li> Probabilitas (Sangat Buruk | Gangguan Mood) = <?php echo $A4GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Ringan) = <?php echo $A4Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Sedang) = <?php echo $A4Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Berat) = <?php echo $A4Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A4GangguanMood ?></td>
                                                                        <td><?php echo $P_A4Ringan ?></td>
                                                                        <td><?php echo $P_A4Sedang ?></td>
                                                                        <td><?php echo $P_A4Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a4']=="Buruk"){ ?>
                                                        <li> Probabilitas (Buruk | Gangguan Mood) = <?php echo $A4GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Buruk | Ringan) = <?php echo $A4Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Buruk | Sedang) = <?php echo $A4Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Buruk | Berat) = <?php echo $A4Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A4GangguanMood ?></td>
                                                                        <td><?php echo $P_A4Ringan ?></td>
                                                                        <td><?php echo $P_A4Sedang ?></td>
                                                                        <td><?php echo $P_A4Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a4']=="Cukup"){ ?>
                                                        <li> Probabilitas (Cukup | Gangguan Mood) = <?php echo $A4GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Cukup | Ringan) = <?php echo $A4Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Cukup | Sedang) = <?php echo $A4Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Cukup | Berat) = <?php echo $A4Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A4GangguanMood ?></td>
                                                                        <td><?php echo $P_A4Ringan ?></td>
                                                                        <td><?php echo $P_A4Sedang ?></td>
                                                                        <td><?php echo $P_A4Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a4']=="Baik"){ ?>
                                                        <li> Probabilitas (Baik | Gangguan Mood) = <?php echo $A4GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Baik | Ringan) = <?php echo $A4Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Baik | Sedang) = <?php echo $A4Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Baik | Berat) = <?php echo $A4Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A4GangguanMood ?></td>
                                                                        <td><?php echo $P_A4Ringan ?></td>
                                                                        <td><?php echo $P_A4Sedang ?></td>
                                                                        <td><?php echo $P_A4Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a4']=="Sangat Baik"){ ?>
                                                        <li> Probabilitas (Sangat Baik | Gangguan Mood) = <?php echo $A4GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Ringan) = <?php echo $A4Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Sedang) = <?php echo $A4Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Berat) = <?php echo $A4Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A4GangguanMood ?></td>
                                                                        <td><?php echo $P_A4Ringan ?></td>
                                                                        <td><?php echo $P_A4Sedang ?></td>
                                                                        <td><?php echo $P_A4Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php } ?>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label">Tingkat Kepercayaan Diri</label>
                                                        <input type="text" class="form-control" id="a5" name="a5"
                                                                value="<?= $user['a5'] ?>" disabled>
                                                </div>
                                                <?php if($user['a5']=="Sangat Buruk"){ ?>
                                                        <li> Probabilitas (Sangat Buruk | Gangguan Mood) = <?php echo $A5GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Ringan) = <?php echo $A5Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Sedang) = <?php echo $A5Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Berat) = <?php echo $A5Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A5GangguanMood ?></td>
                                                                        <td><?php echo $P_A5Ringan ?></td>
                                                                        <td><?php echo $P_A5Sedang ?></td>
                                                                        <td><?php echo $P_A5Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a5']=="Buruk"){ ?>
                                                        <li> Probabilitas (Buruk | Gangguan Mood) = <?php echo $A5GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Buruk | Ringan) = <?php echo $A5Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Buruk | Sedang) = <?php echo $A5Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Buruk | Berat) = <?php echo $A5Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A5GangguanMood ?></td>
                                                                        <td><?php echo $P_A5Ringan ?></td>
                                                                        <td><?php echo $P_A5Sedang ?></td>
                                                                        <td><?php echo $P_A5Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a5']=="Cukup"){ ?>
                                                        <li> Probabilitas (Cukup | Gangguan Mood) = <?php echo $A5GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Cukup | Ringan) = <?php echo $A5Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Cukup | Sedang) = <?php echo $A5Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Cukup | Berat) = <?php echo $A5Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A5GangguanMood ?></td>
                                                                        <td><?php echo $P_A5Ringan ?></td>
                                                                        <td><?php echo $P_A5Sedang ?></td>
                                                                        <td><?php echo $P_A5Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a5']=="Baik"){ ?>
                                                        <li> Probabilitas (Baik | Gangguan Mood) = <?php echo $A5GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Baik | Ringan) = <?php echo $A5Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Baik | Sedang) = <?php echo $A5Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Baik | Berat) = <?php echo $A5Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A5GangguanMood ?></td>
                                                                        <td><?php echo $P_A5Ringan ?></td>
                                                                        <td><?php echo $P_A5Sedang ?></td>
                                                                        <td><?php echo $P_A5Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a5']=="Sangat Baik"){ ?>
                                                        <li> Probabilitas (Sangat Baik | Gangguan Mood) = <?php echo $A5GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Ringan) = <?php echo $A5Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Sedang) = <?php echo $A5Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Berat) = <?php echo $A5Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A5GangguanMood ?></td>
                                                                        <td><?php echo $P_A5Ringan ?></td>
                                                                        <td><?php echo $P_A5Sedang ?></td>
                                                                        <td><?php echo $P_A5Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php } ?>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label">Kesiapan Terhadap Pengujian</label>
                                                        <input type="text" class="form-control" id="a6" name="a6"
                                                                value="<?= $user['a6'] ?>" disabled>
                                                </div>
                                                <?php if($user['a6']=="Sangat Buruk"){ ?>
                                                        <li> Probabilitas (Sangat Buruk | Gangguan Mood) = <?php echo $A6GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Ringan) = <?php echo $A6Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Sedang) = <?php echo $A6Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Buruk | Berat) = <?php echo $A6Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A6GangguanMood ?></td>
                                                                        <td><?php echo $P_A6Ringan ?></td>
                                                                        <td><?php echo $P_A6Sedang ?></td>
                                                                        <td><?php echo $P_A6Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a6']=="Buruk"){ ?>
                                                        <li> Probabilitas (Buruk | Gangguan Mood) = <?php echo $A6GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Buruk | Ringan) = <?php echo $A6Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Buruk | Sedang) = <?php echo $A6Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Buruk | Berat) = <?php echo $A6Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A6GangguanMood ?></td>
                                                                        <td><?php echo $P_A6Ringan ?></td>
                                                                        <td><?php echo $P_A6Sedang ?></td>
                                                                        <td><?php echo $P_A6Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a6']=="Cukup"){ ?>
                                                        <li> Probabilitas (Cukup | Gangguan Mood) = <?php echo $A6GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Cukup | Ringan) = <?php echo $A6Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Cukup | Sedang) = <?php echo $A6Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Cukup | Berat) = <?php echo $A6Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A6GangguanMood ?></td>
                                                                        <td><?php echo $P_A6Ringan ?></td>
                                                                        <td><?php echo $P_A6Sedang ?></td>
                                                                        <td><?php echo $P_A6Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a6']=="Baik"){ ?>
                                                        <li> Probabilitas (Baik | Gangguan Mood) = <?php echo $A6GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Baik | Ringan) = <?php echo $A6Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Baik | Sedang) = <?php echo $A6Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Baik | Berat) = <?php echo $A6Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A6GangguanMood ?></td>
                                                                        <td><?php echo $P_A6Ringan ?></td>
                                                                        <td><?php echo $P_A6Sedang ?></td>
                                                                        <td><?php echo $P_A6Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php
                                                } else if($user['a6']=="Sangat Baik"){ ?>
                                                        <li> Probabilitas (Sangat Baik | Gangguan Mood) = <?php echo $A6GangguanMood. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Ringan) = <?php echo $A6Ringan. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Sedang) = <?php echo $A6Sedang. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Sangat Baik | Berat) = <?php echo $A6Berat. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo $P_A6GangguanMood ?></td>
                                                                        <td><?php echo $P_A6Ringan ?></td>
                                                                        <td><?php echo $P_A6Sedang ?></td>
                                                                        <td><?php echo $P_A6Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <?php } ?>
                                                <h3>Beck Depresion Inventory II</h3>
                                                <?php for($i=0;$i<=20;$i++){ $j=$i+1;?>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label"><?php echo $pertanyaan[$i] ?> </label>
                                                        <input type="text" class="form-control" id="b<?php $j ?>" name="b<?php $j ?>"
                                                        value="<?= $user["b".$j] ?>" disabled>
                                                </div> 
                                                        <li> Probabilitas (Gangguan Mood) = <?php echo ${"B".$j."GangguanMood"}. '/' .$HasilGangguanMood ?> </li>
                                                        <li> Probabilitas (Ringan) = <?php echo ${"B".$j."Ringan"}. '/' .$HasilRingan ?> </li>
                                                        <li> Probabilitas (Sedang) = <?php echo ${"B".$j."Sedang"}. '/' .$HasilSedang ?> </li>
                                                        <li> Probabilitas (Berat) = <?php echo ${"B".$j."Berat"}. '/' .$HasilBerat ?> </li>
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
                                                                        <td><?php echo ${"P_B".$j."GangguanMood"} ?></td>
                                                                        <td><?php echo ${"P_B".$j."Ringan"} ?></td>
                                                                         <td><?php echo ${"P_B".$j."Sedang"} ?></td>
                                                                        <td><?php echo ${"P_B".$j."Berat"} ?></td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                </div>
                                                        
                                                <?php } ?>
                                                <h3>Penghitungan Probabilitas</h3>
                                                <li> Probabilitas (Hasil | Gangguan Mood) = <?php echo $P_A1GangguanMood. '*' .$P_A2GangguanMood. '*' .$P_A3GangguanMood. '*.....................*'.$P_B19GangguanMood. '*' .$P_B20GangguanMood. '*' .$P_B21GangguanMood ?> </li>
                                                <li> Probabilitas (Hasil | Ringan) = <?php echo $P_A1Ringan. '*' .$P_A2Ringan. '*' .$P_A3Ringan. '*.....................*' .$P_B19Ringan. '*' .$P_B20Ringan. '*' .$P_B21Ringan ?> </li>
                                                <li> Probabilitas (Hasil | Sedang) = <?php echo $P_A1Sedang. '*' .$P_A2Sedang. '*' .$P_A3Sedang. '*.....................*' .$P_B19Sedang. '*' .$P_B20Sedang. '*' .$P_B21Sedang ?> </li>
                                                <li> Probabilitas (Hasil | Berat) = <?php echo $P_A1Berat. '*' .$P_A2Berat. '*' .$P_A3Berat. '*.....................*' .$P_B19Berat. '*' .$P_B20Berat. '*' .$P_B21Berat ?> </li>
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
                                                                        <td><?php echo $Hasil_GangguanMood ?></td>
                                                                        <td><?php echo $Hasil_Ringan ?></td>
                                                                        <td><?php echo $Hasil_Sedang?></td>
                                                                        <td><?php echo $Hasil_Berat ?></td>
                                                                        </tr>
                                                                </tbody>
                                                                </table>
                                                        </div>
                                                <li>Probabilitas Tertinggi : <?php echo $Hasil_Final. ' (' .$hasil. ')' ?></li>
                                                <br>
                                                <div class="form-group">
                                                        <label class="control-label">Hasil Prediksi Diagnosa</label>
                                                        <input type="text" class="form-control" id="hasil" name="hasil"
                                                                value="<?= $user['hasil'] ?>" disabled>
                                                </div>
                                                <br>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>