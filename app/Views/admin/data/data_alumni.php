<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <center>
                    <h1 class="heading-data-alumni" style="color: black;">Data Alumni</h1>
                </center>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success" type="submit" name="submit">Cari</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped">
                    <thead style="background-color: #102A6D; color:white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Tahun Masuk</th>
                            <th scope="col">Tahun Lulus</th>
                            <th scope="col">Selengkapnya</th>
                        </tr>
                    </thead>
                    <tbody style="color: black;">
                        <?php $i = 1 + (3 * ($currentPage - 1)); ?>
                        <?php foreach ($alumni as $alum) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/img/<?= $alum['fotoalumni']; ?>" alt="" class="foto-profil"></td>
                                <td><?= $alum['npm']; ?></td>
                                <td><?= $alum['nama']; ?></td>
                                <td><?= $alum['thmasuk']; ?></td>
                                <td><?= $alum['thlulus']; ?></td>
                                <td>
                                    <!-- Menampilkan data alumni dari tabel alumni dengan id -->
                                    <a href="/admin/detailalm/<?= $alum['id']; ?>" class="btn btn-success">Detail</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links('alumni', 'pagination'); ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>