<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nurcahya">
    <link rel="icon" href="<?= base_url(); ?>/assets/images/pu.jpg">

    <title>Monitoring Irigasi Saddang</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- nanoScroller -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/bower_components/nanoscroller/bin/css/nanoscroller.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/bower_components/fontawesome/css/font-awesome.min.css" />

    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/material-design-icons/css/material-design-icons.min.css" />

    <!-- IonIcons -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/bower_components/ionicons/css/ionicons.min.css" />

    <!-- WeatherIcons -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/bower_components/weather-icons/css/weather-icons.min.css" />

    <!-- nvd3 -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/bower_components/nvd3/build/nv.d3.min.css" />

    <!-- Main -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/_con/css/con-base.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/_con/css/tambahan.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <?php
    if ($link != 'dashboard') {
    ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/DataTables/datatables.min.css">
        <script src="<?= base_url(); ?>/assets/Highcharts/code/highcharts.js"></script>
        <script src="<?= base_url(); ?>/assets/Highcharts/code/modules/exporting.js"></script>
        <script src="<?= base_url(); ?>/assets/Highcharts/code/modules/export-data.js"></script>
        <script src="<?= base_url(); ?>/assets/Highcharts/code/modules/accessibility.js"></script>
    <?php
    }
    ?>
</head>

<body onload="startTime()">
    <nav class="navbar-top">
        <div class="nav-wrapper">

            <!-- Sidebar toggle -->
            <!-- <a href="#" class="yay-toggle">
                <div class="burg1"></div>
                <div class="burg2"></div>
                <div class="burg3"></div>
            </a> -->
            <!-- Sidebar toggle -->

            <!-- Logo -->
            <a href="<?= base_url(); ?>" class="brand-logo margin-kiri">
                <img class="logoFull" src="<?= base_url(); ?>/assets/images/title.png" alt="Logo">
                <img class="logoMini" src="<?= base_url(); ?>/assets/images/title.png" alt="Logo">

            </a>
            <!-- /Logo -->
            <ul>
                <li>
                    <h2 class="waktu" id="waktu"></h2>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Top Navbar -->



    <?= $this->renderSection('kontainer'); ?>


    <!-- <footer>Copyright &copy; <?php echo date('Y'); ?>
        <strong>Sartika Mitrasejati</strong>. All rights reserved.</footer> -->

    <!-- DEMO [REMOVE IT ON PRODUCTION] -->
    <!-- <script type="text/javascript" src="<?= base_url(); ?>/assets/_con/js/_demo.js"></script> -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- jQuery RAF (improved animation performance) -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js"></script>

    <!-- nanoScroller -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/materialize/bin/materialize.js"></script>

    <!-- d3 -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/d3/d3.min.js"></script>

    <!-- nvd3 -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/nvd3/build/nv.d3.min.js"></script>

    <!-- Sortable -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/Sortable/Sortable.min.js"></script>

    <!-- Main -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/_con/js/_con.js"></script>

    <!-- Google Prettify -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/bower_components/code-prettify/src/prettify.js"></script>

    <script>
        function startTime() {
            var today = new Date();
            var year = today.getFullYear();
            var month = today.getMonth();
            var months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            var d = today.getDate();
            var day = today.getDay();
            var days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('waktu').innerHTML = days[day] + ', ' + d + ' ' + months[month] + ' ' + year + ' ' + h + ':' + m + ':' + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            };
            return i;
        }

        function ubahGrafik(x) {
            var iframe = document.getElementById("grafik");
            fading(iframe, 500);
            iframe.src = "<?php echo site_url(); ?>frontend/data/" + x;
        }

        function fading(el, duration) {
            var step = 10 / duration,
                opacity = 1;

            function next() {
                if (opacity <= 0) {
                    return fadeIn(el, duration, opacity);
                }
                el.style.opacity = (opacity -= step);
                setTimeout(next, 10);
            }
            next();
        }

        function fadeIn(el, duration, op) {
            var step = 10 / duration,
                opacity = op;

            function next() {
                if (opacity >= 1) {
                    return;
                }
                el.style.opacity = (opacity += step);
                setTimeout(next, 10);
            }
            next();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider').bxSlider({
                auto: true,
                autoControls: true,
                controls: false,
                stopAutoOnClick: true,
                pager: true,
                autoHover: true,
                pause: 5000
            });
        });
    </script>

    <?php if ($link == 'dashboard') { ?>
        <script type="text/javascript" src="<?= base_url(); ?>/assets/js/data.js"></script>
    <?php } ?>
    <?php
    if ($link == 'grafik') {
    ?>
        <script src="<?= base_url(); ?>/assets/DataTables/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabel').DataTable({
                    "bFilter": false,
                    "dom": 'rtip'
                });


                $("#sensor").change(function() {
                    let id = $(this).val();
                    let url = window.location.href.split("/");
                    url[url.length - 1] = "" + id;
                    var newurl = url.join("/");
                    window.location = newurl;
                });
            });
        </script>
    <?php
    }
    ?>

</body>

</html>