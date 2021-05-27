<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                <div class="card-header text-white" id="detail-berita-header">Input Berita</div>
                <div class="card-body bg-light text-dark">

                    <form action="/berita/save" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="judul_berita">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul_berita" name="judul_berita" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="isi_berita">Isi Berita</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="isi_berita" style="height: 500px;" name="isi_berita"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="foto_berita" class="control-label col-sm-2">Gambar</label>
                            <div class="col-sm-10 mb-4">
                                <input id="foto_berita" type="file" name="foto_berita">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>