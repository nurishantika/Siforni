<?= $this->extend('alumni/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1 class="heading-data-alumni">Data Alumni</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">Selengkapnya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($alumni as $alum) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $alum['fotoalumni']; ?>" alt="" class="foto-profil"></td>
                            <td><?= $alum['npm']; ?></td>
                            <td><?= $alum['nama']; ?></td>
                            <td><?= $alum['thlulus']; ?></td>
                            <td>
                                <a href="/alumni/detailed/<?= $alum['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>