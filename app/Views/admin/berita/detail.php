<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="/berita/<?= $berita['kode_berita']; ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col">
                    <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                        <div class="card-header text-white" id="detail-berita-header" style="background-color: #102A6D;"><?= $berita['judul_berita']; ?></div>
                        <div class="card-body bg-light text-dark">
                            <img src="/img/<?= $berita['foto_berita']; ?>" class="img-detail-berita mt-5">
                            <p class="card-text mt-3" style="text-align: center; font-size:smaller; color:darkgray;">Diposting pada <?= $berita['created_at']; ?></p>
                            <p class="card-text ml-5 mr-5 mb-5" style="margin-top: 30px;"><?= nl2br(stripslashes($berita['isi_berita'])); ?></p>
                        </div>
                    </div>
                    <center>
                        <a class="btn btn-danger btn-lg" style="color: white;" href="#" data-toggle="modal" data-target="#hapusModal"> Hapus </a>
                    </center>
                </div>
            </div>
        </div>

        <!-- Hapus Modal-->
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Hapus" jika anda ingin menghapus.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit" href="/admin/berita/">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>