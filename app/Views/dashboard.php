<?php echo $this->extend('template/template'); ?>


<?php echo $this->section('kontainer'); ?>
<aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
        <div>
            <!-- Sidebar toggle -->
            <a href="#" class="yay-toggle">
                <div class="burg1"></div>
                <div class="burg2"></div>
                <div class="burg3"></div>
            </a>
            <!-- Sidebar toggle -->

            <!-- Logo -->
            <a href="#!" class="brand-logo">
                <img src="<?= base_url(); ?>/assets/_con/images/logo-white.png" alt="Con">
            </a>
            <!-- /Logo -->
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">

            <ul>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Temperature</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="temperature">00</span> &deg;C
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Humidity</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="humidity">00</span> %H
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Air Pressure</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="barometer">00</span> mbar
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Sun Radiation</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="sun_rad">00</span> W/m<sup>2</sup>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Sun Duration</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="sun_dur">00</span> minutes
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Wind Direction</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="wind_dir">00</span> &deg;
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Wind Speed</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="wind_spd">00</span> m/sec
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h4 class="yay-user-info-name">Rainfall</h4>
                        <div class="yay-user-location">
                            <i class="fa fa-circle"></i> <span class="rainfall">00</span> mm
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
<!-- /Yay Sidebar -->

<!-- Main Content -->
<section class="content-wrap content-utama">
    <img src="<?= base_url(); ?>/assets/images/background.jpg" class="background">

    <a class="label-bsa1" href="pos/bsa1">Pintu Bagi B.Sa.1</a>
    <a class="label-bpk8" href="pos/bpk8">Pintu Bagi B.Pk.8</a>
    <a class="label-bsa10" href="pos/bsa10">Pintu Bagi B.Sa.10</a>
    <a class="label-bmrn1" href="pos/bmrn1">Pintu Sadap B.Mrn.1.Ki</a>
    <a class="label-bpk8te" href="pos/bpk8te">Pintu Sadap B.Pk.8.Te</a>
    <a class="label-bmj1" href="pos/bmj1">Pintu Sadap B.Mj.1</a>

    <h6 class="ket-bsa1">Supplai air irigasi :<br>Kebutuhan air irigasi :<br>Selisih/Variance :</h6>
    <h6 class="ket-bpk8">Supplai air irigasi :<br>Kebutuhan air irigasi :<br>Selisih/Variance :</h6>
    <h6 class="ket-bsa10">Supplai air irigasi :<br>Kebutuhan air irigasi :<br>Selisih/Variance :</h6>
    <h6 class="ket-rf">RAINFALL<br>Bendung Benteng</h6>
    <h6 class="ket-tma">WATER LEVEL<br>Bendung Benteng</h6>
    <h6 class="ket-ggst1">B.Sa1<br>B.Pk.8<br>B.Sa.10</h6>
    <h6 class="ket-ggst2">B.Mj1<br>B.Mrn.1<br>AWS</h6>

    <a class="bsa1-wlu">00.00 cm</a>
    <a class="bsa1-gt1">00.00 cm</a>
    <a class="bsa1-gt2">00.00 cm</a>
    <a class="bsa1-gt3">00.00 cm</a>
    <a class="bsa1-gt4">00.00 cm</a>
    <a class="bsa1-dbt1">00.00 L/dtk</a>
    <a class="bsa1-dbt2">00.00 L/dtk</a>
    <a class="bsa1-dbt3">00.00 L/dtk</a>
    <a class="bsa1-dbt4">00.00 L/dtk</a>
    <a class="bsa1-wld1">00.00 cm</a>
    <a class="bsa1-wld2">00.00 cm</a>
    <a class="bsa1-wld3">00.00 cm</a>
    <a class="bsa1-wld4">00.00 cm</a>

    <a class="bpk8-wlu">00.00 cm</a>
    <a class="bpk8-gt1">00.00 cm</a>
    <a class="bpk8-gt2">00.00 cm</a>
    <a class="bpk8-gt3">00.00 cm</a>
    <a class="bpk8-gt4">00.00 cm</a>
    <a class="bpk8-dbt1">00.00 L/dtk</a>
    <a class="bpk8-dbt2">00.00 L/dtk</a>
    <a class="bpk8-dbt3">00.00 L/dtk</a>
    <a class="bpk8-dbt4">00.00 L/dtk</a>
    <a class="bpk8-wld1">00.00 cm</a>
    <a class="bpk8-wld2">00.00 cm</a>
    <a class="bpk8-wld3">00.00 cm</a>
    <a class="bpk8-wld4">00.00 cm</a>

    <a class="bsa10-wlu">00.00 cm</a>
    <a class="bsa10-gt1">00.00 cm</a>
    <a class="bsa10-gt2">00.00 cm</a>
    <a class="bsa10-gt3">00.00 cm</a>
    <a class="bsa10-gt4">00.00 cm</a>
    <a class="bsa10-gt5">00.00 cm</a>
    <a class="bsa10-gt6">00.00 cm</a>
    <a class="bsa10-gt7">00.00 cm</a>
    <a class="bsa10-gt8">00.00 cm</a>
    <a class="bsa10-gt9">00.00 cm</a>
    <a class="bsa10-gt10">00.00 cm</a>
    <a class="bsa10-dbt1">00.00 L/dtk</a>
    <a class="bsa10-dbt2">00.00 L/dtk</a>
    <a class="bsa10-dbt3">00.00 L/dtk</a>
    <a class="bsa10-dbt4">00.00 L/dtk</a>
    <a class="bsa10-dbt5">00.00 L/dtk</a>
    <a class="bsa10-dbt6">00.00 L/dtk</a>
    <a class="bsa10-dbt7">00.00 L/dtk</a>
    <a class="bsa10-dbt8">00.00 L/dtk</a>
    <a class="bsa10-dbt9">00.00 L/dtk</a>
    <a class="bsa10-dbt10">00.00 L/dtk</a>
    <a class="bsa10-wld1">00.00 cm</a>
    <a class="bsa10-wld2">00.00 cm</a>
    <a class="bsa10-wld3">00.00 cm</a>
    <a class="bsa10-wld4">00.00 cm</a>
    <a class="bsa10-wld5">00.00 cm</a>
    <a class="bsa10-wld6">00.00 cm</a>
    <a class="bsa10-wld7">00.00 cm</a>
    <a class="bsa10-wld8">00.00 cm</a>
    <a class="bsa10-wld9">00.00 cm</a>
    <a class="bsa10-wld10">00.00 cm</a>

    <a class="bmrn1-wlu">00.00 cm</a>
    <a class="bmrn1-gt1">00.00 cm</a>
    <a class="bmrn1-dbt1">00.00 L/dtk</a>
    <a class="bmrn1-wld">00.00 cm</a>

    <a class="bpk8te-wlu">00.00 cm</a>
    <a class="bpk8te-gt1">00.00 cm</a>
    <a class="bpk8te-dbt1">00.00 L/dtk</a>
    <a class="bpk8te-wld">00.00 cm</a>

    <a class="bmj1-wlu">00.00 cm</a>
    <a class="bmj1-gt1">00.00 cm</a>
    <a class="bmj1-dbt1">00.00 L/dtk</a>
    <a class="bmj1-wld">00.00 cm</a>

    <!-- ============additional info=============== -->

    <a class="bsa1-supplai">00.00 L/dtk</a>
    <a class="bsa1-butuh">00.00 L/dtk</a>
    <a class="bsa1-selisih">00.00 L/dtk</a>
    <a class="bpk8-supplai">00.00 L/dtk</a>
    <a class="bpk8-butuh">00.00 L/dtk</a>
    <a class="bpk8-selisih">00.00 L/dtk</a>
    <a class="bsa10-supplai">00.00 L/dtk</a>
    <a class="bsa10-butuh">00.00 L/dtk</a>
    <a class="bsa10-selisih">00.00 L/dtk</a>

    <a class="rf-nilai">00.00 L/dtk</a>
    <a class="rf-waktu">0000-00-00 00:00:00</a>
    <a class="rf-waktu-bsa1">0000-00-00 00:00:00</a>
    <a class="rf-waktu-bpk8">0000-00-00 00:00:00</a>
    <a class="rf-waktu-bsa10">0000-00-00 00:00:00</a>
    <a class="tma-nilai">00.00 L/dtk</a>
    <a class="tma-waktu">0000-00-00 00:00:00</a>
    <a class="tma-waktu-bmj1">0000-00-00 00:00:00</a>
    <a class="tma-waktu-bmrn1">0000-00-00 00:00:00</a>
    <a class="tma-waktu-aws">0000-00-00 00:00:00</a>


</section>
<!-- /Main Content -->

<?php echo $this->endSection(); ?>