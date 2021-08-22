<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="card mb-3 mx-auto" style="max-width: 50rem;">
                    <div class="card-header text-white" id="detail-header-admin-create" style="background-color: #102A6D;">Input Laboratorium</div>
                    <div class="card-body bg-light text-dark">

                        <form action="/laboratorium/save" method="POST">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label col-sm-5" for="nama_lab">Nama Laboratorium</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_lab" name="nama_lab" autofocus>
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