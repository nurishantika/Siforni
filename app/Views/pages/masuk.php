<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper">

    <form class="form-signin" action="/masuk/auth" method="post">

        <div class="form-header">
            <h2 class="form-signin-heading">Login Admin</h2>
        </div>

        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <input id="InputForUsername" type="username" class="form-control mb-2" name="username" placeholder="Username" />

        <input id="InputForPassword" type="password" class="form-control" name="password" placeholder="Password" required="" />

        <button id="btnMasuk" class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>

    </form>
</div>

<?= $this->endSection(); ?>