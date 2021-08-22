<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h1 id="head-card" style="color: #102A6D;"> BERITA ALUMNI TERKINI </h1>
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashData('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($berita as $b) : ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-3" id="the-card">
                            <img src="/img/<?= $b['foto_berita']; ?>" class="card-img-top" id="img-card">
                            <div class="card-body">
                                <a class="card-title" id="title-card" href="/admin/berita/<?= $b['kode_berita']; ?>"><?= $b['judul_berita']; ?></a>
                                <p class="card-text" id="text-card"> <?= $b['created_at']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>