<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2>Input Data Alumni</h2>
        <p class="hint-text">Masukkan Data dengan Lengkap dan Valid</p>
        <h4 id="heading-data-diri">Data Diri Alumni</h4>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="npm" placeholder="NPM*" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap*" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="tahun_masuk" placeholder="Tahun Masuk*" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="tahun_lulus" placeholder="Tahun Lulus*" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="alamat" placeholder="Alamat"></div>
                <div class="col"><input type="text" class="form-control" name="no_telepon" placeholder="No. Telepon"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="no_ijazah" placeholder="No. Seri Ijazah*" required="required"></div>
                <div class="col"><input type="email" class="form-control" name="email" placeholder="Email*" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="tahun_bekerja" placeholder="Tahun Mulai Bekerja" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="myfile">Upload Foto (JPG, JPEG, PNG)* :</label>
            <input type="file" id="myfile" name="myfile" required="required">
        </div>
        <h4 id="heading-medsos">Media Sosial</h4>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="facebook" placeholder="Facebook"></div>
                <div class="col"><input type="text" class="form-control" name="instagram" placeholder="Instagram"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="linkedin" placeholder="LinkedIn"></div>
                <div class="col"><input type="text" class="form-control" name="twitter" placeholder="Twitter"></div>
            </div>
        </div>
        <h4 id="heading-histori">Histori Kuliah</h4>

        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="ipk" placeholder="IPK*" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="judul_skripsi" placeholder="Judul Skripsi*" required="required"></div>
            </div>
        </div>

        <div class="form-group">
            <p>Bidang Minat Skripsi (Lab MSI/ Lab Solusi)*</p>
            <input type="radio" id="msi" name="minat" value="MSI" required="required">
            <label for="msi">Lab MSI</label>
            <input type="radio" id="solusi" name="minat" value="Solusi" required="required">
            <label for="solusi">Lab Solusi</label><br>
        </div>

        <div class="form-group">
            <textarea placeholder="Abstrak Skripsi*"></textarea required="required">
        </div>

        <div class="form-group">
            <textarea placeholder="Pencapaian/Penghargaan*"></textarea required="required">
        </div>

        <label for="myfile" id="up-transkrip">Upload Transkrip Nilai (PDF)* : </label>
        <input class="up-transkrip" type="file" id="myfile" name="myfile" required="required">

        <div class="form-group">
            <button id="SimpanData" type="submit" class="btn btn-primary btn-lg">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>