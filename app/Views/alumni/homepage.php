<?= $this->extend('alumni/template'); ?>

<?= $this->section('content'); ?>

<!-- Section Slideshow -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/cover 1-2.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/cover 2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/cover 3.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid mt-3">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0" style="color: black;">Dashboard</h1>
    </div>

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 mt-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold" style="color: #102A6D;">Grafik Jumlah Lulusan Berdasarkan Lama Masa Studi</h6>
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

    <!-- Section Berita Alumni -->
    <div class="container mt-5">
        <center>
            <h1 id="header-berita" style="color: black;">BERITA ALUMNI TERKINI</h1>
        </center>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <?php foreach ($berita as $b) : ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-3" id="the-card">
                        <img src="/img/<?= $b['foto_berita']; ?>" class="card-img-top" id="img-card">
                        <div class="card-body">
                            <a class="card-title" id="title-card" href="/berita/<?= $b['kode_berita']; ?>"><?= $b['judul_berita']; ?></a>
                            <p class="card-text" id="text-card"> <?= $b['created_at']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-md-12 text-center mb-5">
            <a id="btnSelengkapnya1" type="button" class="btn btn-primary" href="/alumni/berita">Selengkapnya</a>
        </div>
    </div>

    <hr width="1000" color="lightgrey">
    <!-- Section Lowongan Pekerjaan -->
    <div class="container mt-5">
        <center>
            <h1 id="header-lowongan" style="color: black;">LOWONGAN PEKERJAAN</h1>
        </center>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <?php foreach ($lokerModel as $l) : ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-3" id="the-card">
                        <img src="/img/<?= $l['foto_loker']; ?>" class="card-img-top" id="img-card">
                        <div class="card-body">
                            <a class="card-title" id="title-card" href="/lowongan/<?= $l['kode_loker']; ?>"><?= $l['judul_loker']; ?></a>
                            <p class="card-text" id="text-card"> <?= $l['created_at']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="col-md-12 text-center mb-5">
        <a id="btnSelengkapnya2" type="button" class="btn btn-primary" href="/alumni/lowongan">Selengkapnya</a>
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