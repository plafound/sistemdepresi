<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    /* 
    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    } */

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
</style>
<div class="pageheader ">
    <h3><i class="fa fa-home"></i> Diagnosa </h3>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li> <a href="home"> Home </a> </li>
            <li class="active"> Diagnosa </li>
        </ol>
    </div>
</div>
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
    <div class="col-md-12">
        <div class="panel">
            <form id="regForm" action="<?php echo site_url('c_diagnosa/tambah') ?>" method="post"
                enctype="multipart/form-data" autocomplete="false">

                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <h1>Data Diri:</h1>
                    <div class="form-group">
                        <label class="control-label" style="font-size:30px;">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size:30px;">Asal Universitas</label>
                        <input type="text" class="form-control" id="univ" name="univ" required>
                    </div>
                    <p style="font-size:30px;">Semester</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="semester5" name="semester" value="5" required>
                        <label class="form-check-label" style="font-size:20px;" for="semester5">semester 5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="semester6" name="semester" value="6" required>
                        <label class="form-check-label" style="font-size:20px;" for="semester6">semester 6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="semester7" name="semester" value="7" required>
                        <label class="form-check-label" style="font-size:20px;" for="semester7">semester 7</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="semester8" name="semester" value="8" required>
                        <label class="form-check-label" style="font-size:20px;" for="semester8">semester 8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="semester9" name="semester" value=">8" required>
                        <label class="form-check-label" style="font-size:20px;" for="semester8">diatas semester 8
                        </label>
                    </div>
                </div>

                <div class="tab">
                    <h1>Faktor Penyebab Depresi :</h1><br><br>
                    <p style="font-size:30px;">Status Tinggal</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a1a" name="a1" value="Rumah Sendiri" required>
                        <label class="form-check-label" style="font-size:20px;" for="a1a">Rumah Sendiri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a1b" name="a1" value="Bersama Orang Tua"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="a1b">Bersama Orang Tua</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a1c" name="a1" value="Kos" required>
                        <label class="form-check-label" style="font-size:20px;" for="a1c">Kos</label>
                    </div>
                </div>

                <div class="tab">
                    <h1>Faktor Penyebab Depresi :</h1><br><br>
                    <p style="font-size:30px;">Keadaan ekonomi harian</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a2a" name="a2" value="Sangat Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a2a">Sangat Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a2b" name="a2" value="Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a2b">Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a2c" name="a2" value="Cukup" required>
                        <label class="form-check-label" style="font-size:20px;" for="a2c">Cukup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a2d" name="a2" value="Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a2d">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a2e" name="a2" value="Sangat Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a2e">Sangat Baik</label>
                    </div>
                </div>

                <div class="tab">
                    <h1>Faktor Penyebab Depresi :</h1><br><br>
                    <p style="font-size:30px;">Hubungan dengan dosen pembimbing</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a3a" name="a3" value="Sangat Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a3a">Sangat Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a3b" name="a3" value="Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a3b">Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a3c" name="a3" value="Cukup" required>
                        <label class="form-check-label" style="font-size:20px;" for="a3c">Cukup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a3d" name="a3" value="Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a3d">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a3e" name="a3" value="Sangat Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a3e">Sangat Baik</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Faktor Penyebab Depresi :</h1><br><br>
                    <p style="font-size:30px;">Kemampuan analisis kasus</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a4a" name="a4" value="Sangat Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a4a">Sangat Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a4b" name="a4" value="Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a4b">Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a4c" name="a4" value="Cukup" required>
                        <label class="form-check-label" style="font-size:20px;" for="a4c">Cukup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a4d" name="a4" value="Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a4d">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a4e" name="a4" value="Sangat Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a4e">Sangat Baik</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Faktor Penyebab Depresi :</h1><br><br>
                    <p style="font-size:30px;">Tingkat kepercayaan diri</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a5a" name="a5" value="Sangat Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a5a">Sangat Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a5b" name="a5" value="Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a5b">Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a5c" name="a5" value="Cukup" required>
                        <label class="form-check-label" style="font-size:20px;" for="a5c">Cukup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a5d" name="a5" value="Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a5d">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a5e" name="a5" value="Sangat Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a5e">Sangat Baik</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Faktor Penyebab Depresi :</h1><br><br>
                    <p style="font-size:30px;">Kesiapan mental terhadap pengujian</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a6a" name="a6" value="Sangat Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a6a">Sangat Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a6b" name="a6" value="Buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="a6b">Buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a6c" name="a6" value="Cukup" required>
                        <label class="form-check-label" style="font-size:20px;" for="a6c">Cukup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a6d" name="a6" value="Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a6d">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="a6e" name="a6" value="Sangat Baik" required>
                        <label class="form-check-label" style="font-size:20px;" for="a6e">Sangat Baik</label>
                    </div>
                </div>


                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kesedihan</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b1a" name="b1" value="Saya tidak merasa sedih"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b1a">Saya tidak merasa
                            sedih</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b1b" name="b1" value="Saya merasa sedih"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b1b">Saya merasa sedih</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b1c" name="b1"
                            value="Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b1c">Sepanjang waktu saya sedih dan
                            tidak bisa menghilangkan perasaan itu.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b1d" name="b1"
                            value="Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b1d">Saya sedemikian sedih atau
                            tidak bahagia sehingga saya tidak tahan lagi rasanya</label>
                    </div>
                </div>

                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Pesimisme</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b2a" name="b2"
                            value="Saya tidak terlalu berkecil hati mengenai masa depan" required>
                        <label class="form-check-label" style="font-size:20px;" for="b2a">Saya tidak terlalu berkecil
                            hati mengenai masa depan.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b2b" name="b2"
                            value="Saya merasa kecil hati mengenai masa depan" required>
                        <label class="form-check-label" style="font-size:20px;" for="b2b">Saya merasa kecil hati
                            mengenai masa depan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b2c" name="b2"
                            value="Sepanjang merasa bahwa tidak ada satupun yang dapat saya harapkan" required>
                        <label class="form-check-label" style="font-size:20px;" for="b2c">Sepanjang waktu merasa bahwa
                            tidak ada satupun yang dapat saya harapkan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b2d" name="b2"
                            value="Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b2d">Saya merasa bahwa masa depan
                            saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kegagalan Masa Lalu</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b3a" name="b3"
                            value="Saya tidak menganggap diri saya sebagai orang yang gagal" required>
                        <label class="form-check-label" style="font-size:20px;" for="b3a">Saya tidak menganggap diri
                            saya sebagai orang yang gagal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b3b" name="b3"
                            value="Saya merasa bahwa saya telah gagal lebih daripada kebanyakan orang" required>
                        <label class="form-check-label" style="font-size:20px;" for="b3b">Saya merasa bahwa saya telah
                            gagal lebih daripada kebanyakan orang</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b3c" name="b3"
                            value="Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b3c">Saat saya menengok masa lalu,
                            maka yang terlihat oleh saya hanyalah kegagalan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b3d" name="b3"
                            value="Saya merasa bahwa saya adalah orang yang gagal total" required>
                        <label class="form-check-label" style="font-size:20px;" for="b3d">Saya merasa bahwa saya adalah
                            orang yang gagal total</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Hilangnya Kesenangan</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b4a" name="b4"
                            value="Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b4a">Saya memperoleh banyak
                            kepuasan dari hal-hal yang saya lakukan, sama seperti sebelumnya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b4b" name="b4"
                            value="Saya tidak menikmati berbagai hal, seperti yang pernah saya rasakan dulu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b4b">Saya tidak menikmati berbagai
                            hal, seperti yang pernah saya rasakan dulu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b4c" name="b4"
                            value="Saya tidak memperoleh kepuasan sejati dari apapun lagi" required>
                        <label class="form-check-label" style="font-size:20px;" for="b4c">Saya tidak memperoleh kepuasan
                            sejati dari apapun lagi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b4d" name="b4"
                            value="Saya tidak puas atau bosan dengan segalanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b4d">Saya tidak puas atau bosan
                            dengan segalanya</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Perasaan Bersalah</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b5a" name="b5"
                            value="Saya tidak terlalu merasa bersalah" required>
                        <label class="form-check-label" style="font-size:20px;" for="b5a">Saya tidak terlalu merasa
                            bersalah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b5b" name="b5"
                            value="Saya merasa bersalah di hampir seluruh waktu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b5b">Saya merasa bersalah di hampir
                            seluruh waktu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b5c" name="b5"
                            value="Saya agak merasa bersalah di sebagian besar waktu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b5c">Saya agak merasa bersalah di
                            sebagian besar waktu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b5d" name="b5"
                            value="Saya merasa bersalah sepanjang waktu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b5d">Saya merasa bersalah sepanjang
                            waktu</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Perasaan Tentang Hukuman</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b6a" name="b6"
                            value="Saya tidak merasa seolah saya sedang dihukum" required>
                        <label class="form-check-label" style="font-size:20px;" for="b6a">Saya tidak merasa seolah saya
                            sedang dihukum</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b6b" name="b6"
                            value="Saya merasa mungkin saya sedang dihukum" required>
                        <label class="form-check-label" style="font-size:20px;" for="b6b">Saya merasa mungkin saya
                            sedang dihukum</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b6c" name="b6"
                            value="Saya pikir saya akan dihukum" required>
                        <label class="form-check-label" style="font-size:20px;" for="b6c">Saya pikir saya akan
                            dihukum</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b6d" name="b6"
                            value="Saya merasa bahwa saya sedang dihukum" required>
                        <label class="form-check-label" style="font-size:20px;" for="b6d">Saya merasa bahwa saya sedang
                            dihukum</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kecewa terhadap diri sendiri</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b7a" name="b7"
                            value="Saya tidak merasa kecewa terhadap diri saya sendiri" required>
                        <label class="form-check-label" style="font-size:20px;" for="b7a">Saya tidak merasa kecewa
                            terhadap diri saya sendiri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b7b" name="b7"
                            value="Saya kecewa dengan diri saya sendiri" required>
                        <label class="form-check-label" style="font-size:20px;" for="b7b">Saya kecewa dengan diri saya
                            sendiri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b7c" name="b7"
                            value="Saya muak terhadap diri saya sendiri" required>
                        <label class="form-check-label" style="font-size:20px;" for="b7c">Saya muak terhadap diri saya
                            sendiri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b7d" name="b7"
                            value="Saya membenci diri saya sendiri" required>
                        <label class="form-check-label" style="font-size:20px;" for="b7d">Saya membenci diri saya
                            sendiri</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kritikan terhadap diri sendiri</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b8a" name="b8"
                            value="Saya tidak merasa lebih buruk dari orang lain" required>
                        <label class="form-check-label" style="font-size:20px;" for="b8a">Saya tidak merasa lebih buruk
                            dari orang lain</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b8b" name="b8"
                            value="Saya menghina diri saya sendiri karena kelemahan atau kesalahan saya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b8b">Saya menghina diri saya
                            sendiri karena kelemahan atau kesalahan saya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b8c" name="b8"
                            value="Saya menyalahkan diri saya sepanjang waktu karena kesalahan saya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b8c">Saya menyalahkan diri saya
                            sepanjang waktu karena kesalahan saya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b8d" name="b8"
                            value="Saya menyalahkan diri saya untuk semua hal buruk yang terjadi" required>
                        <label class="form-check-label" style="font-size:20px;" for="b8d">Saya menyalahkan diri saya
                            untuk semua hal buruk yang terjadi</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Keinginan untuk bunuh diri</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b9a" name="b9"
                            value="Saya tidak punya sedikitpun pikiran untuk bunuh diri" required>
                        <label class="form-check-label" style="font-size:20px;" for="b9a">Saya tidak punya sedikitpun
                            pikiran untuk bunuh diri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b9b" name="b9"
                            value="Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b9b">Saya mempunyai pikiran-pikiran
                            untuk bunuh diri, namun saya tidak akan melakukannya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b9c" name="b9" value="Saya ingin bunuh diri"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b9c">Saya ingin bunuh diri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b9d" name="b9"
                            value="Saya akan bunuh diri jika saja ada kesempatan" required>
                        <label class="form-check-label" style="font-size:20px;" for="b9d">Saya akan bunuh diri jika saja
                            ada kesempatan</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Menangis</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b10a" name="b10"
                            value="Saya tidak lebih banyak menangis dibandingkan biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b10a">Saya tidak lebih banyak
                            menangis dibandingkan biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b10b" name="b10"
                            value="Sekarang saya lebih banyak menangis daripada sebelumya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b10b">Sekarang saya lebih banyak
                            menangis daripada sebelumya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b10c" name="b10"
                            value="Sekarang saya menangis sepanjang waktu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b10c">Sekarang saya menangis
                            sepanjang waktu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b10d" name="b10"
                            value="Biasanya saya mampu menangis, namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya"
                            required>
                        <label class="form-check-label" style="font-size:18px;" for="b10d">Biasanya saya mampu menangis,
                            namun kini saya tidak lagi dapat menangis walaupun saya menginginkannya</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Sifat Mudah Marah</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b11a" name="b11"
                            value="Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b11a">Saya tidak lebih terganggu
                            oleh berbagai hal dibandingkan biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b11b" name="b11"
                            value="Kini saya sedikit lebih pemarah dari biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b11b">Kini saya sedikit lebih
                            pemarah dari biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b11c" name="b11"
                            value="Saya agak jengkel atau terganggu di sebagian besar waktu saya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b11c">Saya agak jengkel atau
                            terganggu di sebagian besar waktu saya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b11d" name="b11"
                            value="Kini saya merasa jengkel sepanjang waktu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b11d">Kini saya merasa jengkel
                            sepanjang waktu</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kehilangan Minat</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b12a" name="b12"
                            value="Saya tidak kehilangan minat saya terhadap orang lain" required>
                        <label class="form-check-label" style="font-size:20px;" for="b12a">Saya tidak kehilangan minat
                            saya terhadap orang lain</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b12b" name="b12"
                            value="Saya agak kurang berminat terhadap orang lain dibandingkan biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b12b">Saya agak kurang berminat
                            terhadap orang lain dibandingkan biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b12c" name="b12"
                            value="Saya kehilangan hampir seluruh minat saya pada orang lain" required>
                        <label class="form-check-label" style="font-size:20px;" for="b12c">Saya kehilangan hampir
                            seluruh minat saya pada orang lain</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b12d" name="b12"
                            value="Saya telah kehilangan seluruh minat saya pada orang lain" required>
                        <label class="form-check-label" style="font-size:20px;" for="b12d">Saya telah kehilangan seluruh
                            minat saya pada orang lain</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Keraguan</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b13a" name="b13"
                            value="Saya mengambil keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b13a">Saya mengambil
                            keputusan-keputusan hampir sama baiknya dengan yang biasa saya lakukan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b13b" name="b13"
                            value="Saya menunda mengambil keputusan-keputusan lebih sering dari yang biasa saya lakukan"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b13b">Saya menunda mengambil
                            keputusan-keputusan lebih sering dari yang biasa saya lakukan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b13c" name="b13"
                            value="Saya mengalami kesulitan besar dalam mengambil keputusaan-keputusan daripada sebelumnya"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b13c">Saya mengalami kesulitan
                            besar dalam mengambil keputusaan-keputusan daripada sebelumnya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b13d" name="b13"
                            value="Saya sama sekali tidak dapat mengambil keputusan-keputusan lagi" required>
                        <label class="form-check-label" style="font-size:20px;" for="b13d">Saya sama sekali tidak dapat
                            mengambil keputusan-keputusan lagi</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Perasaan tidak berguna</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b14a" name="b14"
                            value="Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b14a">Saya tidak merasa bahwa
                            keadaan saya tampak lebih buruk dari yang biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b14b" name="b14"
                            value="Saya khawatir saya tampak tua dan tidak menarik" required>
                        <label class="form-check-label" style="font-size:20px;" for="b14b">Saya khawatir saya tampak tua
                            dan tidak menarik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b14c" name="b14"
                            value="Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak menarik"
                            required>
                        <label class="form-check-label" style="font-size:14px;" for="b14c">Saya merasa bahwa ada
                            perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya tampak tidak
                            menarik</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b14d" name="b14"
                            value="Saya yakin bahwa saya tampak jelek" required>
                        <label class="form-check-label" style="font-size:20px;" for="b14d">Saya yakin bahwa saya tampak
                            jelek</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Level Konsentrasi</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b15a" name="b15"
                            value="Saya dapat bekerja sama baiknya dengan waktu-waktu sebelumnya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b15a">Saya dapat bekerja sama
                            baiknya dengan waktu-waktu sebelumnya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b15b" name="b15"
                            value="Saya membutuhkan suatu usaha ekstra untuk mulai melakukan sesuatu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b15b">Saya membutuhkan suatu usaha
                            ekstra untuk mulai melakukan sesuatu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b15c" name="b15"
                            value="Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu" required>
                        <label class="form-check-label" style="font-size:20px;" for="b15c">Saya harus memaksa diri
                            sekuat tenaga untuk melakukan sesuatu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b15d" name="b15"
                            value="Saya tidak mampu untuk mengerjakan apa pun lagi" required>
                        <label class="form-check-label" style="font-size:20px;" for="b15d">Saya tidak mampu untuk
                            mengerjakan apa pun lagi</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Perubahan Pola Tidur</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b16a" name="b16"
                            value="Saya dapat tidur seperti biasa" required>
                        <label class="form-check-label" style="font-size:20px;" for="b16a">Saya dapat tidur seperti
                            biasa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b16b" name="b16"
                            value="Tidur saya tidak sebanyak biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b16b">Tidur saya tidak sebanyak
                            biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b16c" name="b16"
                            value="Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b16c">Saya bangun 1-2 jam lebih
                            awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b16d" name="b16"
                            value="Saya bangun beberapa jam lebih awal dari biasanya serta tidak dapat tidur kembali"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b16d">Saya bangun beberapa jam
                            lebih awal dari biasanya serta tidak dapat tidur kembali</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kelelahan atau keletihan</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b17a" name="b17"
                            value="Saya merasa tidak lelah seperti biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b17a">Saya merasa tidak lelah
                            seperti biasanya.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b17b" name="b17"
                            value="Saya merasa lebih mudah lelah dari biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b17b">Saya merasa lebih mudah lelah
                            dari biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b17c" name="b17"
                            value="Saya merasa setelah melakukan apa saja" required>
                        <label class="form-check-label" style="font-size:20px;" for="b17c">Saya merasa lelah setelah
                            melakukan apa saja</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b17d" name="b17"
                            value="Saya terlalu untuk melakukan apapun" required>
                        <label class="form-check-label" style="font-size:20px;" for="b17d">Saya terlalu lelah untuk
                            melakukan apapun</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Perubahan Nafsu Makan</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b18a" name="b18"
                            value="Nafsu makan saya tidak lebih buruk dari biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b18a">Nafsu makan saya tidak lebih
                            buruk dari biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b18b" name="b18"
                            value="Nafsu makan saya tidak sebaik biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b18b">Nafsu makan saya tidak sebaik
                            biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b18c" name="b18"
                            value="Nafsu makan saya kini jauh lebih buruk" required>
                        <label class="form-check-label" style="font-size:20px;" for="b18c">Nafsu makan saya kini jauh
                            lebih buruk</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b18d" name="b18"
                            value="Saya tak memiliki nafsu makan lagi" required>
                        <label class="form-check-label" style="font-size:20px;" for="b18d">Saya tak memiliki nafsu makan
                            lagi</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kehilangan Energi</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b19a" name="b19"
                            value="Berat badan saya tidak turun banyak, atau bahkan tetap, akhir-akhir ini" required>
                        <label class="form-check-label" style="font-size:20px;" for="b19a">Berat badan saya tidak turun
                            banyak, atau bahkan tetap, akhir-akhir ini.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b19b" name="b19"
                            value="Berat badan saya turun lebih dari dua kilogram" required>
                        <label class="form-check-label" style="font-size:20px;" for="b19b">Berat badan saya turun lebih
                            dari dua kilogram</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b19c" name="b19"
                            value="Berat badan saya turun lebih dari lima kilogram" required>
                        <label class="form-check-label" style="font-size:20px;" for="b19c">Berat badan saya turun lebih
                            dari lima kilogram</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b19d" name="b19"
                            value="Berat badan saya turun lebih dari tujuh kilogram" required>
                        <label class="form-check-label" style="font-size:20px;" for="b19d">Berat badan saya turun lebih
                            dari tujuh kilogram</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kecemasan</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b20a" name="b20"
                            value="Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b20a">Saya tidak lebih cemas
                            mengenai kesehatan saya daripada biasanya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b20b" name="b20"
                            value="Saya cemas mengenal masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau peut mual atau sembelit"
                            required>
                        <label class="form-check-label" style="font-size:18px;" for="b20b">Saya cemas mengenal
                            masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau perut mual atau
                            sembelit</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b20c" name="b20"
                            value="Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b20c">Saya sangat cemas mengenai
                            masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b20d" name="b20"
                            value="Saya begitu cemas mengenal masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya"
                            required>
                        <label class="form-check-label" style="font-size:18px;" for="b20d">Saya begitu cemas mengenal
                            masalah-masalah fisik saya sehingga tidak dapat berpikir tentang hal lainnya</label>
                    </div>
                </div>
                <div class="tab">
                    <h1>Beck Depression Inventory II :</h1><br><br>
                    <p style="font-size:30px;">Kehilangan minat terhadap hubungan dengan lawan jenis</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b21a" name="b21"
                            value="Saya tidak melihat adanya perubahan dalam minat saya terhadap hubungan dengan lawan jenis"
                            required>
                        <label class="form-check-label" style="font-size:20px;" for="b21a">Saya tidak melihat adanya
                            perubahan dalam minat saya terhadap hubungan dengan lawan jenis</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b21b" name="b21"
                            value="Saya kurang berminat di bidang ini dibandingkan biasanya" required>
                        <label class="form-check-label" style="font-size:20px;" for="b21b">Saya kurang berminat di
                            bidang ini dibandingkan biasanya.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b21c" name="b21"
                            value="Kini saya sangat kurang berminat terhadap hubungan dengan lawan jenis" required>
                        <label class="form-check-label" style="font-size:20px;" for="b21c">Kini saya sangat kurang
                            berminat terhadap hubungan dengan lawan jenis</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="b21d" name="b21"
                            value="Saya telah kehilangan minat terhadap itu sama sekali" required>
                        <label class="form-check-label" style="font-size:20px;" for="b21d">Saya telah kehilangan minat
                            terhadap itu sama sekali</label>
                    </div>
                </div>
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>


                </div>

            </form>
            <script>
                var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab

                function showTab(n) {
                    // This function will display the specified tab of the form ...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    // ... and fix the Previous/Next buttons:
                    if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                    } else {
                        document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").innerHTML = "Submit";
                    } else {
                        document.getElementById("nextBtn").innerHTML = "Next";
                    }
                    // ... and run a function that displays the correct step indicator:
                    fixStepIndicator(n)
                }

                function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");
                    // Exit the function if any field in the current tab is invalid:
                    if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    // if you have reached the end of the form... :
                    if (currentTab >= x.length) {
                        //...the form gets submitted:
                        document.getElementById("regForm").submit();
                        return false;
                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                }

                function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");

                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                            // add an "invalid" class to the field:
                            y[i].className += " invalid";
                            // and set the current valid status to false:
                            valid = false;
                        }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                }
                // function validateForm() {
                //     // This function deals with validation of the form fields
                //     var x, y, i, valid = true;
                //     x = document.getElementsByClassName("tab");
                //     y = x[currentTab].getElementsByTagName("input");
                //     // A loop that checks every input field in the current tab:
                //     for (i = 0; i < y.length; i++) {
                //         // If a field is empty...
                //         if (y[i].value == "") {
                //             // add an "invalid" class to the field:
                //             y[i].className += " invalid";
                //             // and set the current valid status to false:
                //             valid = false;
                //         }
                //     }
                //     // If the valid status is true, mark the step as finished and valid:
                //     if (valid) {
                //         document.getElementsByClassName("step")[currentTab].className += " finish";
                //     }
                //     return valid; // return the valid status
                // }

                // function validateFormRadio(tab) {
                //     let isValid = true;
                //     switch (step) {
                //         case 1:
                //             const smtInput = document.getElementsByName('semester');
                //             const smtError = document.getElementById('errorName');
                //             errorName.textContent = '';
                //             let isValid = false;
                //             for (const smtInput of smtInputs) {
                //                 if (smtInput.checked) {
                //                     isValid = true;
                //                     break;
                //                 }
                //             }
                //             if (!isValid) {
                //                 errorGender.textContent = 'Pilih salah satu';
                //             }
                //             if (isValid){
                //                 document.getElementsByClassName("step")[currentTab].className += " finish";
                //             }
                //             break;
                //         case 2:
                //             const a1Input = document.getElementsByName('semester');
                //             const a1Error = document.getElementById('errorName');
                //             errorName.textContent = '';
                //             let isValid = false;
                //             for (const a1Input of a1Inputs) {
                //                 if (a1Input.checked) {
                //                     isValid = true;
                //                     break;
                //                 }
                //             }
                //             if (!isValid) {
                //                 errorGender.textContent = 'Pilih salah satu';
                //             }
                //             if (isValid){
                //                 document.getElementsByClassName("step")[currentTab].className += " finish";
                //             }
                //             break;
                //         // Add more cases for additional steps if needed
                //     }
                //     return isValid;
                // }

                function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");
                    for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class to the current step:
                    x[n].className += " active";
                }
            </script>
        </div>
    </div>
</div>