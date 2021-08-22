<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 id="head-card" style="color: #102A6D;"> Laboratorium SI </h1>
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashData('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="row mt-3">
                <div class="col">
                    <table class="table table-striped">
                        <thead style="background-color: #102A6D; color:white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Laboratorium</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody style="color: black;">
                            <?php $i = 1; ?>
                            <?php foreach ($lab as $l) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $l['nama_lab']; ?></td>
                                    <td> <a <?= $l['id_lab']; ?> class="btn btn-danger" style="color: white;" href="#" data-toggle="modal" data-target="#hapusModal"> Hapus </a> </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
                <!-- <button class="btn btn-danger" type="submit" href="/laboratorium/lab">Hapus</button> -->
                <a href="<?= base_url() ?>/laboratorium/delete/<?= $l['id_lab'] ?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>