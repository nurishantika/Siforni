<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Jumlah Lulusan Berdasarkan Lama Masa Studi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-grafik1" role="tab" aria-controls="pills-home" aria-selected="true">3.5 Tahun</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-grafik2" role="tab" aria-controls="pills-profile" aria-selected="false">4 Tahun</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-grafik3" role="tab" aria-controls="pills-contact" aria-selected="false">> 4 Tahun</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-grafik1" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div id="grafik1" style="height: 500px;"></div>
                        </div>
                        <div class="tab-pane fade" id="pills-grafik2" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div id="grafik2" style="height: 500px;"></div>
                        </div>
                        <div class="tab-pane fade" id="pills-grafik3" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div id="grafik3" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <?php
    foreach ($grafik1 as $grafik1) {
        $hasil1[] = $grafik1['total'];
        $thmasuk1[] = $grafik1['thmasuk'];
    }
    $data1 = json_encode($hasil1);
    $data2 = str_replace('"', '', $data1);
    $thmasuk1 = json_encode($thmasuk1);

    foreach ($grafik2 as $grafik2) {
        $hasil2[] = $grafik2['total'];
        $thmasuk2[] = $grafik2['thmasuk'];
    }
    $data3 = json_encode($hasil2);
    $data4 = str_replace('"', '', $data3);
    $thmasuk2 = json_encode($thmasuk2);

    foreach ($grafik3 as $grafik3) {
        $hasil3[] = $grafik3['total'];
        $thmasuk3[] = $grafik3['thmasuk'];
    }
    $data5 = json_encode($hasil3);
    $data6 = str_replace('"', '', $data5);
    $thmasuk3 = json_encode($thmasuk3);
    ?>

    <script>
        // CHART LULUSAN 3.5 TAHUN //
        document.addEventListener('DOMContentLoaded', function() {
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'grafik1',
                    type: 'column'
                },
                title: {
                    text: 'Lulusan 3.5 Tahun'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: <?= $thmasuk1; ?>,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    maxTicksLimit: 1,
                    title: {
                        text: 'Jumlah Lulusan'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:1f} Alumni</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.3,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Jumlah Lulusan',
                    data: <?= $data2; ?>,
                    dataLabels: {
                        enabled: true,
                        rotation: 360,
                        color: '#000',
                        align: 'right',
                        format: '{point.y:1f}', // format label
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '20px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }

                }]
            });
        });
        // CHART LULUSAN 4 TAHUN //
        document.addEventListener('DOMContentLoaded', function() {
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'grafik2',
                    type: 'column'
                },
                title: {
                    text: 'Lulusan 4 Tahun'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: <?= $thmasuk2; ?>,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    maxTicksLimit: 1,
                    title: {
                        text: 'Jumlah Lulusan'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:1f} Alumni</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.3,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Jumlah Lulusan',
                    data: <?= $data4; ?>,
                    dataLabels: {
                        enabled: true,
                        rotation: 360,
                        color: '#000',
                        align: 'right',
                        format: '{point.y:1f}', // format label
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '20px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }

                }]
            });
        });
        // CHART LULUSAN > 4 TAHUN //
        document.addEventListener('DOMContentLoaded', function() {
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'grafik3',
                    type: 'column'
                },
                title: {
                    text: 'Lulusan > 4 Tahun'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: <?= $thmasuk3; ?>,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    maxTicksLimit: 1,
                    title: {
                        text: 'Jumlah Lulusan'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:1f} Alumni</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.3,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Jumlah Lulusan',
                    data: <?= $data6; ?>,
                    dataLabels: {
                        enabled: true,
                        rotation: 360,
                        color: '#000',
                        align: 'right',
                        format: '{point.y:1f}', // format label
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '20px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }

                }]
            });
        });
    </script>
    <?= $this->endSection(); ?>