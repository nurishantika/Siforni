<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                    <div class="card-header text-white" id="detail-header-admin-create" style="background-color: #102A6D;">Input Berita</div>
                    <div class="card-body bg-light text-dark">

                        <form action="/berita/save" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="judul_berita">Judul Berita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('judul_berita')) ? 'is-invalid' : ''; ?>" id="judul_berita" name="judul_berita" autofocus value="<?= old('judul_berita'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul_berita'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="isi_berita">Isi Berita</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="isi_berita" style="height: 500px;" name="isi_berita"><?php echo old('isi_berita') ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto_berita" class="col-sm-3 col-form-label"> Foto Berita </label>
                                <div class="input-group mb-3 col-sm-7 col-form-label">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto_berita')) ? 'is-invalid' : ''; ?>" id="foto_berita" name="foto_berita">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_berita'); ?>
                                        </div>
                                        <label class="custom-file-label" for="foto_berita">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>