<?= $this->extend('alumni/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 id="head-card"> BERITA ALUMNI TERKINI </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($berita as $b) : ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-3" id="the-card">
                            <img src="/img/<?= $b['foto_berita']; ?>" class="card-img-top" id="img-card">
                            <div class="card-body">
                                <a class="card-title" id="title-card" href="/alumni/berita_detail/<?= $b['kode_berita']; ?>"><?= $b['judul_berita']; ?></a>
                                <p class="card-text" id="text-card"> <?= $b['created_at']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>