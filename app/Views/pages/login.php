<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper">

    <form class="form-signin" action="/login/auth" method="post">

        <div class="form-header">
            <h2 class="form-signin-heading">Masuk</h2>
        </div>

        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <input id="InputForEmail" type="email" class="form-control mb-2" name="email" placeholder="Email" />

        <input id="InputForPassword" type="password" class="form-control" name="password" placeholder="Password" required="" />

        <button id="btnMasuk" class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>

        <p id="daftar">Belum mempunyai akun? Silahkan mendaftar <a href="/pages/daftar">disini</a></p>
    </form>
</div>

<?= $this->endSection(); ?>