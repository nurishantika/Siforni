<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 id="head-card"> INFO LOWONGAN PEKERJAAN </h1>
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
    </div>
</div>


<?= $this->endSection(); ?>