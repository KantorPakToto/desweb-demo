<?php echo $this->extend('template/template'); ?>


<?php echo $this->section('kontainer'); ?>

<!-- Main Content -->
<section class="content-wrap pos">

    <div class="row sortable">
        <!-- Weather -->
        <div class="col l4 s12">
            <div class="card">
                <div class="title">
                    <h5>CCTV</h5>
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">
                    <img src="/upload/<?= $cctv ?>" alt="" class="cctv">
                    &nbsp;
                    <h5>Waktu screenshot : <?= date('Y-m-d H:i:s', $waktu) ?></h5>
                </div>
            </div>
            <div class="card">
                <div class="title">
                    <h5>Tabulasi</h5>
                    <!-- <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a> -->
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">

                </div>
            </div>
        </div>
        <div class="col l8 s12">
            <div class="card">
                <div class="title">
                    <h5>PEMANTAUAN PINTU AIR JARINGAN DAERAH IRIGASI SADDANG - PINTU BAGI <?= $pos ?></h5>
                    <h6>Balai Besar Wilayah Sungai Pompengan Jeneberang, Sulawesi Selatan</h6>
                    <a class="minimize" href="#">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
                <div class="content">
                    <?php if ($pos == 'bsa1') { ?>
                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate1.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas2"></div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            Highcharts.chart('kanvas1', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });
                            Highcharts.chart('kanvas2', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category',
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
                                    name: 'debit intake',
                                    lineWidth: 2,
                                    data: <?= $grafik2 ?>
                                }]
                            });
                        </script>
                    <?php } else if ($pos == 'bsa10') { ?>
                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate1.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas2"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1b"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate2.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas3"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1c"></div>
                            </div>
                            <div class=" col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate1.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas4"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1d"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate2.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas5"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1e"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate4.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas6"></div>
                            </div>
                        </div>



                        <script type="text/javascript">
                            Highcharts.chart('kanvas1', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });
                            Highcharts.chart('kanvas1b', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });
                            Highcharts.chart('kanvas1c', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });
                            Highcharts.chart('kanvas1d', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });
                            Highcharts.chart('kanvas1e', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });

                            Highcharts.chart('kanvas2', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category',
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
                                    name: 'debit intake',
                                    lineWidth: 2,
                                    data: <?= $grafik2 ?>
                                }]
                            });
                            Highcharts.chart('kanvas3', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik3 ?>
                                }]
                            });
                            Highcharts.chart('kanvas4', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik4 ?>
                                }]
                            });
                            Highcharts.chart('kanvas5', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik5 ?>
                                }]
                            });
                            Highcharts.chart('kanvas6', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik6 ?>
                                }]
                            });
                        </script>
                    <?php } else if ($pos == 'bpk8') { ?>
                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate2.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas2"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l4 kanvas-container">
                                <div id="kanvas1b"></div>
                            </div>
                            <div class="col l4 pos-tengah kanvas-container"><img src="<?= base_url(); ?>/assets/images/gate2.png" alt=""></div>
                            <div class="col l4 kanvas-container">
                                <div id="kanvas3"></div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            Highcharts.chart('kanvas1', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });
                            Highcharts.chart('kanvas1b', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Menuju hilir',
                                    lineWidth: 2,
                                    data: <?= $grafik1 ?>
                                }]
                            });

                            Highcharts.chart('kanvas2', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category',
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
                                    name: 'debit intake',
                                    lineWidth: 2,
                                    data: <?= $grafik2 ?>
                                }]
                            });
                        </script>
                        <script type="text/javascript">
                            Highcharts.chart('kanvas3', {
                                chart: {
                                    type: 'line',
                                    height: '250px'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    type: 'category'
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
                                    name: 'Debit Intake',
                                    lineWidth: 2,
                                    data: <?= $grafik3 ?>
                                }]
                            });
                        </script>
                    <?php } else if ($pos == 'bmj1') { ?>
                        <div class="kanvas"></div>

                    <?php } ?>
                    </>
                </div>
            </div>
            <!-- /Weather -->
            <div class="flex-container">
                <?php foreach ($sensor as $item) { ?>
                    <div class="btn"><a href="/grafik/<?= $item['pos'] ?>/<?= $item['sensor'] ?>">Sensor <?= $item['sensor'] ?></a></div>
                <?php } ?>
            </div>
        </div>
</section>
<!-- /Main Content -->

<?php echo $this->endSection(); ?>