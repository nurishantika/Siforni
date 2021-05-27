<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                    <div class="card-header text-white" id="detail-berita-header" style="background-color: #4e73df;">Input Lowongan</div>
                    <div class="card-body bg-light text-dark">

                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h4>Periksa Entrian Form Anda</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <form action="/lowongan/save" method="POST">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="judul_loker">Judul Lowongan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('judul_loker')) ? 'is-invalid' : ''; ?>" id="judul_loker" name="judul_loker" value="<?= old('judul_loker'); ?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="isi_loker">Isi Lowongan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control <?= ($validation->hasError('isi_loker')) ? 'is-invalid' : ''; ?>" rows="5" id="isi_loker" style="height: 500px;" name="isi_loker" value="<?= old('isi_loker'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto_loker" class="control-label col-sm-2">Gambar</label>
                                <div class="col-sm-10 mb-4">
                                    <input id="foto_loker" type="file" name="foto_loker">
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