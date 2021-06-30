<?= $this->extend('alumni/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1 class="heading-data-alumni">Data Nilai Alumni</h1>
            <!-- <form action="" method="post">
                <div class="input-group mb-3">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form> -->
            <table class="table table-striped">
                <thead style="background-color: #2C5CD6; color:white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nilai as $n) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $n['fotoalumni']; ?>" alt="" class="foto-profil"></td>
                            <td><?= $n['npm']; ?></td>
                            <td><?= $n['nama']; ?></td>
                            <td><?= $n['thlulus']; ?></td>
                            <td>
                                <a href="/nilai/details/<?= $n['id_nilai']; ?>" class="btn btn-success">Nilai</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>