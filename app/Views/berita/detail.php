<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                <div class="card-header text-white" id="detail-berita-header" style="background-color: #2c5cd6"><?= $berita['judul_berita']; ?></div>
                <div class="card-body bg-light text-dark">
                    <img src="/img/<?= $berita['foto_berita']; ?>" class="img-detail-berita mt-5">
                    <p class="card-text mt-3" style="text-align: center; font-size:smaller; color:darkgray;">Diposting pada <?= $berita['created_at']; ?></p>
                    <p class="card-text ml-5 mr-5 mb-5" style="margin-top: 30px;"><?= nl2br(stripslashes($berita['isi_berita'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>