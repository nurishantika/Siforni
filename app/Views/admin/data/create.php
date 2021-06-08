<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="signup-form">

    <form action="#" method="POST">

        <?= csrf_field(); ?>

        <h2>Input Data Alumni</h2>

        <p class="hint-text">Masukkan Data dengan Lengkap dan Valid</p>

        <h4 id="heading-data-diri">Data Diri Alumni</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="npm" class="form-label-alumni">NPM</label>
                    <input type="text" class="form-control" name="npm" placeholder="NPM*" required="required" autofocus>
                </div>
                <div class="col">
                    <label for="nama" class="form-label-alumni">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap*" required="required">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="thmasuk" class="form-label-alumni">Tahun Masuk</label>
                    <input type="text" class="form-control" name="thmasuk" placeholder="Tahun Masuk*" required="required">
                </div>
                <div class="col">
                    <label for="thlulus" class="form-label-alumni">Tahun Lulus</label>
                    <input type="text" class="form-control" name="thlulus" placeholder="Tahun Lulus*" required="required">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="alamat" class="form-label-alumni">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="notelp" class="form-label-alumni">No. Telepon</label>
                    <input type="text" class="form-control" name="notelp" placeholder="No. Telepon">
                </div>
                <div class="col">
                    <label for="notelp_ortu" class="form-label-alumni">No. Telepon Orang Tua</label>
                    <input type="text" class="form-control" name="notelp_ortu" placeholder="No. Telepon">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="noijazah" class="form-label-alumni">No. Ijazah</label>
                    <input type="text" class="form-control" name="noijazah" placeholder="No. Seri Ijazah*" required="required">
                </div>
                <div class="col">
                    <label for="email" class="form-label-alumni">Email Utama</label>
                    <input type="email" class="form-control" name="email" placeholder="Email*" required="required">
                </div>
                <div class="col">
                    <label for="email_cadangan" class="form-label-alumni">Email Cadangan</label>
                    <input type="email" class="form-control" name="email_cadangan" placeholder="Email*" required="required">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="thbekerja" class="form-label-alumni">Tahun Bekerja</label>
                    <input type="text" class="form-control" name="thbekerja" placeholder="Tahun Mulai Bekerja" required="required">
                </div>
                <div class="col">
                    <label for="perusahaan" class="form-label-alumni">Perusahaan tempat bekerja</label>
                    <input type="text" class="form-control" name="perusahaan" placeholder="Nama Perusahaan" required="required">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fotoalumni">Upload Foto (JPG, JPEG, PNG)* :</label>
            <input type="file" id="myfile" name="fotoalumni" required="required">
        </div>

        <h4 id="heading-medsos">Media Sosial</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="facebook" class="form-label-alumni">Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                </div>
                <div class="col">
                    <label for="instagram" class="form-label-alumni">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="linkedin" class="form-label-alumni">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn">
                </div>
                <div class="col">
                    <label for="twitter" class="form-label-alumni">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Twitter">
                </div>
            </div>
        </div>

        <h4 id="heading-histori">Histori Kuliah</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="ipk" class="form-label-alumni">IPK</label>
                    <input type="text" class="form-control" name="ipk" placeholder="IPK*" required="required">
                </div>
                <div class="col">
                    <label for="judulskripsi" class="form-label-alumni">Judul Skripsi</label>
                    <input type="text" class="form-control" name="judulskripsi" placeholder="Judul Skripsi*" required="required">
                </div>
            </div>
        </div>

        <div class="form-group">
            <p>Bidang Minat Skripsi (Lab MSI/ Lab Solusi)*</p>
            <input type="radio" id="msi" for="bidangminat" name="bidangminat" value="MSI" required="required">
            <label for="bidangminat">Lab MSI</label>
            <input type="radio" id="solusi" for="bidangminat" name="bidangminat" value="Solusi" required="required">
            <label for="bidangminat">Lab Solusi</label><br>
        </div>

        <div class="form-group">
            <label for="abstrak" class="form-label-alumni">Abstrak Skripsi</label>
            <textarea id="txtarea-abstrak" name="abstrak" placeholder="Abstrak Skripsi*"></textarea required="required">
        </div>

        <div class="form-group">
            <label for="pencapaian" class="form-label-alumni">Pencapaian & Penghargaan</label>
            <textarea placeholder="Pencapaian/Penghargaan*" for="pencapaian" name="pencapaian"></textarea required="required">
        </div>

        <label for="transkrip" id="up-transkrip">Upload Transkrip Nilai (PDF)* : </label>
        <input class="up-transkrip" type="file" id="myfile" name="transkrip" required="required">

        <div class="form-group">
            <button id="SimpanData" type="submit" class="btn btn-primary btn-lg">Tambah</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>