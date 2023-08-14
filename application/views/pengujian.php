<div class="pageheader ">
    <h3><i class="fa fa-home"></i> Confusion Matrix </h3>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li> <a href="home"> Home </a> </li>
            <li class="active"> Pengujian </li>
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
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2" width="200">Actual</th>
                                        <th class="text-center" colspan="4">Predict</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" width="200">Gangguan Mood</th>
                                        <th class="text-center" width="200">Ringan</th>
                                        <th class="text-center" width="200">Sedang</th>
                                        <th class="text-center" width="200">Berat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Gangguan Mood</td>
                                        <td class="alert alert-success">
                                            <?php echo $GG?>
                                        </td>
                                        <td>
                                            <?php echo $GR?>
                                        </td>
                                        <td>
                                            <?php echo $GS?>
                                        </td>
                                        <td>
                                            <?php echo $GB?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ringan</td>
                                        <td>
                                            <?php echo $RG?>
                                        </td>
                                        <td class="alert alert-success">
                                            <?php echo $RR?>
                                        </td>
                                        <td>
                                            <?php echo $RS?>
                                        </td>
                                        <td>
                                            <?php echo $RB?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sedang</td>
                                        <td>
                                            <?php echo $SG?>
                                        </td>
                                        <td>
                                            <?php echo $SR?>
                                        </td>
                                        <td class="alert alert-success">
                                            <?php echo $SS?>
                                        </td>
                                        <td>
                                            <?php echo $SB?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Berat</td>
                                        <td>
                                            <?php echo $BG?>
                                        </td>
                                        <td>
                                            <?php echo $BR?>
                                        </td>
                                        <td>
                                            <?php echo $BS?>
                                        </td>
                                        <td class="alert alert-success">
                                            <?php echo $BB?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h2>Pengujian Akurasi</h2>
                        <ul>Accuracy = ( TP(Gangguan Mood) + TP(Ringan) + TP(Sedang) + TP(Berat) ) / Total Data<br>
                            Accuracy = (<?php echo $GG. '+' .$RR. '+' .$SS. '+' .$BB ?>) / <?php echo $countAll ?> = <?php echo $accuracy?><br>
                            <h3>Accuracy = <?php echo $accuracy_percent ?> % </h3>
                        </ul><br>
                        <h2>Pengujian Precision</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center" width="200">Gangguan Mood</th>
                                        <th class="text-center" width="200">Ringan</th>
                                        <th class="text-center" width="200">Sedang</th>
                                        <th class="text-center" width="200">Berat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TP</td>
                                        <td>
                                            <?php echo $GG?>
                                        </td>
                                        <td>
                                            <?php echo $RR?>
                                        </td>
                                        <td>
                                            <?php echo $SS?>
                                        </td>
                                        <td>
                                            <?php echo $BB?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FP</td>
                                        <td>
                                            <?php echo $GR.'+'.$GS.'+'.$GB?>
                                        </td>
                                        <td>
                                            <?php echo $RG.'+'.$RS.'+'.$RB?>
                                        </td>
                                        <td>
                                            <?php echo $SG.'+'.$SR.'+'.$SB?>
                                        </td>
                                        <td>
                                            <?php echo $BG.'+'.$BR.'+'.$BS?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Precision</td>
                                        <td>
                                            <?php echo $precision_GM?>
                                        </td>
                                        <td>
                                            <?php echo $precision_R?>
                                        </td>
                                        <td>
                                            <?php echo $precision_S?>
                                        </td>
                                        <td>
                                            <?php echo $precision_B?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul>Precision = ( Precision (Gangguan Mood) + Precision(Ringan) + Precision(Sedang) + Precision(Berat) ) / Total Kelas <br>
                            Precision = (<?php echo $precision_GM. '+' .$precision_R. '+' .$precision_S. '+' .$precision_B ?>) / 4 = <?php echo $precision_All?><br>
                            <h3>Precision = <?php echo $precision_percent ?> % </h3>
                        </ul><br>
                        <h2>Pengujian Recall</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center" width="200">Gangguan Mood</th>
                                        <th class="text-center" width="200">Ringan</th>
                                        <th class="text-center" width="200">Sedang</th>
                                        <th class="text-center" width="200">Berat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TP</td>
                                        <td>
                                            <?php echo $GG?>
                                        </td>
                                        <td>
                                            <?php echo $RR?>
                                        </td>
                                        <td>
                                            <?php echo $SS?>
                                        </td>
                                        <td>
                                            <?php echo $BB?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FN</td>
                                        <td>
                                            <?php echo $RG.'+'.$SG.'+'.$BG?>
                                        </td>
                                        <td>
                                            <?php echo $GR.'+'.$SR.'+'.$BR?>
                                        </td>
                                        <td>
                                            <?php echo $GS.'+'.$RS.'+'.$BS?>
                                        </td>
                                        <td>
                                            <?php echo $GB.'+'.$RB.'+'.$SB?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>recall</td>
                                        <td>
                                            <?php echo $recall_GM?>
                                        </td>
                                        <td>
                                            <?php echo $recall_R?>
                                        </td>
                                        <td>
                                            <?php echo $recall_S?>
                                        </td>
                                        <td>
                                            <?php echo $recall_B?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul>Recall = ( Recall (Gangguan Mood) + Recall(Ringan) + Recall(Sedang) + Recall(Berat) ) / Total Kelas <br>
                            Recall = (<?php echo $recall_GM. '+' .$recall_R. '+' .$recall_S. '+' .$recall_B ?>) / 4 = <?php echo $recall_All?><br>
                            <h3>Recall = <?php echo $recall_percent ?> % </h3>
                        </ul><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>