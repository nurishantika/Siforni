<?= $this->extend('alumni/template'); ?>

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
            <img src="/img/slidesatu.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/slidedua.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/slidetiga.png" class="d-block w-100" alt="...">
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
<!-- <div class="container">
    <h1 id="header-berita">BERITA ALUMNI TERKINI</h1>
    <div class="box1">
        <div class="card" style="width: 18rem;">
            <img src="/img/cready.png" class="card-img-top" alt="box1">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="box2">
        <div class="card" style="width: 18rem;">
            <img src="/img/cready.png" class="card-img-top" alt="box1">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="box3">
        <div class="card" style="width: 18rem;">
            <img src="/img/cready.png" class="card-img-top" alt="box1">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <a id="btnSelengkapnya1" type="button" class="btn btn-primary" href="/alumni/berita">Selengkapnya</a>
    </div>
</div> -->

<!-- <hr width="1000" color="lightgrey"> -->
<!-- Section Lowongan Pekerjaan -->

<!-- <h1 id="header-lowongan">LOWONGAN PEKERJAAN</h1>
<div class="card1">
    <div class="card" style="width: 18rem;">
        <img src="/img/cready.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
<div class="card2">
    <div class="card" style="width: 18rem;">
        <img src="/img/cready.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
<div class="card3">
    <div class="card" style="width: 18rem;">
        <img src="/img/cready.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
<div class="col-md-12 text-center">
    <a id="btnSelengkapnya2" type="button" class="btn btn-primary" href="/alumni/lowongan">Selengkapnya</a>
</div>
</div> -->
<?= $this->endSection(); ?>