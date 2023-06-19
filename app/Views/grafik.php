<?php echo $this->extend('template/template'); ?>


<?php echo $this->section('kontainer'); ?>

<!-- Main Content -->
<section class="content-wrap pos">

    <div class="row sortable">
        <div class="col l4 s12">

            <div class="card">
                <div class="title">
                    <h5>Sensor : </h5>
                    <select name="sensor" id="sensor">
                        <?php foreach ($sensor as $item) { ?>
                            <option value="<?= $item['sensor'] ?>"><?= $item['sensor'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="card">
                <div class="title">
                    <h5>Tabel</h5>
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">
                    <table id='tabel'>
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tabel as $item) { ?>
                                <tr>
                                    <td><?= $item['created_at'] ?></td>
                                    <td><?= $item['nilai'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col l8 s12">
            <div class="card">
                <div class="title">
                    <h5>Grafik</h5>
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">
                    <div id="kanvas"></div>
                </div>
            </div>
        </div>
        <!-- /Weather -->
        <?php
        if ($pos == 'bsa1') {
            $nama = 'Pintu Bagi B.Sa.1';
        } else if ($pos == 'bsa10') {
            $nama = 'Pintu Bagi B.Sa.10';
        } else if ($pos == 'bpk8') {
            $nama = 'Pintu Bagi B.Pk.8';
        } else if ($pos == 'bmj1') {
            $nama = 'Pintu Sadap B.Mj.1';
        } ?>

    </div>
</section>


<script type="text/javascript">
    Highcharts.chart('kanvas', {
        chart: {
            type: 'line'
        },
        title: {
            text: "Grafik Tinggi Muka Air <?= $nama ?> "
        },
        subtitle: {
            text: ''
        },
        yAxis: {
            title: {
                text: 'Nilai Ketinggian'
            }
        },
        xAxis: {
            type: 'category',
            accessibility: {
                rangeDescription: 'Waktu'
            }
        },
        tooltip: {
            pointFormat: '{point.y} cm'
        },
        plotOptions: {
            area: {
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: [{
            name: 'Tinggi Muka Air',
            lineWidth: 2,
            data: <?= $data ?>
        }]
    });
</script>
<!-- /Main Content -->

<?php echo $this->endSection(); ?>