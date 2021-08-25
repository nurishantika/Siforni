<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                    <div class="card-header text-white" id="detail-header-admin-create" style="background-color: #102A6D;">Input Lowongan</div>
                    <div class="card-body bg-light text-dark">
                        <form action="/lowongan/save" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="judul_loker">Judul Lowongan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('judul_loker')) ? 'is-invalid' : ''; ?>" id="judul_loker" name="judul_loker" value="<?= old('judul_loker'); ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul_loker'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="isi_loker">Isi Lowongan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control <?= ($validation->hasError('isi_loker')) ? 'is-invalid' : ''; ?>" rows="5" id="isi_loker" style="height: 500px;" name="isi_loker"><?php echo old('isi_loker') ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto_loker" class="col-sm-5 col-form-label">Foto Lowongan</label>
                                <div class="input-group mb-3 col-sm-7 col-form-label">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto_loker')) ? 'is-invalid' : ''; ?>" id="foto_loker" name="foto_loker">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_loker'); ?>
                                        </div>
                                        <label class="custom-file-label" for="foto_loker">Choose file</label>
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