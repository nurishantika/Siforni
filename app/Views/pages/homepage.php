<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Section Slideshow -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/cover 1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/cover 2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/cover 3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </a>
</div>

<!-- Section Berita Alumni -->
<div class="container">
    <h1 id="header-berita">BERITA ALUMNI TERKINI</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
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

    <div class="col-md-12 text-center">
        <a id="btnSelengkapnya1" type="button" class="btn btn-primary" href="/berita">Selengkapnya</a>
    </div>
</div>

<hr width="1000" color="lightgrey">
<!-- Section Lowongan Pekerjaan -->
<div class="container">
    <h1 id="header-lowongan">LOWONGAN PEKERJAAN</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
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

<div class="col-md-12 text-center">
    <a id="btnSelengkapnya2" type="button" class="btn btn-primary" href="/lowongan">Selengkapnya</a>
</div>
</div>
<?= $this->endSection(); ?>