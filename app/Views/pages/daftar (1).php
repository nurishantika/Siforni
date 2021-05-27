<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper">
    <form class="form-signup" action="/register/save" method="post">

        <div class="form-header">
            <h2 class="form-signup-heading">Daftar Akun</h2>
        </div>

        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <input for="InputForEmail" id="InputForEmail" type="email" class="form-control mb-4" name="email" placeholder="Email" />

        <input id="InputForPassword" type="password" class="form-control" name="password" placeholder="Password" />

        <input id="InputForConfPassword" type="password" class="form-control" name="confpassword" placeholder="Confirm Password" />

        <button id="btnDaftar" button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>

        <p id="daftar">Sudah mempunyai akun ? Silahkan login <a href="/pages/login">disini</a></p>

    </form>
</div>

<?= $this->endSection(); ?>