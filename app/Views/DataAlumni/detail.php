<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="detail-alumni" class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">

        <h2>Data Alumni</h2>

        <img class="foto-alumni" src="/img/<?= $alumni['fotoalumni']; ?>">

        <h4 id="heading-data-diri">Data Diri Alumni</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">NPM</label>
                    <input type="text" class="form-control" name="npm" placeholder="<?= $alumni['npm']; ?>" required="required" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="<?= $alumni['nama']; ?>" required="required" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Tahun Masuk</label>
                    <input type="text" class="form-control" name="tahun_masuk" placeholder="<?= $alumni['thmasuk']; ?>" required="required" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">Tahun Lulus</label>
                    <input type="text" class="form-control" name="tahun_lulus" placeholder="<?= $alumni['thlulus']; ?>" required="required" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="<?= $alumni['alamat']; ?>" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">No. Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" placeholder="<?= $alumni['notelp']; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">No. Ijazah</label>
                    <input type="text" class="form-control" name="no_ijazah" placeholder="<?= $alumni['noijazah']; ?>" required="required" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="<?= $alumni['email']; ?>" required="required" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Tahun Bekerja</label>
                    <input type="text" class="form-control" name="tahun_bekerja" placeholder="<?= $alumni['thbekerja']; ?>" required="required" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">Perusahaan Tempat Bekerja</label>
                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="<?= $alumni['perusahaan']; ?>" required="required" disabled>
                </div>
            </div>
        </div>

        <h4 id="heading-medsos">Media Sosial</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="<?= $alumni['facebook']; ?>" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="<?= $alumni['instagram']; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="<?= $alumni['linkedin']; ?>" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label-alumni">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="<?= $alumni['twitter']; ?>" disabled>
                </div>
            </div>
        </div>

        <h4 id="heading-histori">Histori Kuliah</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">IPK</label>
                    <input type="text" class="form-control" name="ipk" placeholder="<?= $alumni['ipk']; ?>" required="required" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Judul Skripsi</label>
                    <textarea id="area-judul-skripsi" placeholder="<?= $alumni['judulskripsi']; ?>" disabled></textarea required="required" disabled>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row mb-2">
                <div class="col">
                    <label for="" class="form-label-alumni">Bidang Minat</label>
                    <input type="text" class="form-control" name="bidang-minat" placeholder="<?= $alumni['bidangminat']; ?>" required="required" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Abstrak</label>
                    <textarea id="area-abstrak" placeholder="<?= $alumni['abstrak']; ?>" disabled></textarea required="required" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Pencapaian & Penghargaan</label>
                    <textarea id="area-pencapaian" placeholder="<?= $alumni['pencapaian']; ?>" disabled></textarea required="required" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                <label for="" class="form-label-alumni">Transkrip Nilai Kuliah</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button id="SimpanData" type="submit" class="btn btn-primary btn-lg">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>