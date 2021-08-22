<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div id="detail-alumni" class="signup-form">
        <form action="/alumni">

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
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="notelp" class="form-label-alumni">No. Telepon</label>
                        <input type="text" class="form-control" name="notelp" placeholder="<?= $alumni['notelp']; ?>" disabled>
                    </div>
                    <div class="col">
                        <label for="notelp_ortu" class="form-label-alumni">No. Telepon Orang Tuas</label>
                        <input type="text" class="form-control" name="notelp_ortu" placeholder="<?= $alumni['notelp_ortu']; ?>" disabled>
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
                    <div class="col">
                        <label for="email_cadangan" class="form-label-alumni">Email</label>
                        <input type="email" class="form-control" name="email_cadangan" placeholder="<?= $alumni['email_cadangan']; ?>" required="required" disabled>
                    </div>
                </div>
            </div>

            <h4 id="heading-pekerjaan">Histori Pekerjaan</h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <thead style="background-color: #2C5CD6; color:white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Periode Bekerja</th>
                                    <th scope="col">Perusahaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pekerjaan as $pekerjaan) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $pekerjaan['periode_bekerja']; ?></td>
                                        <td><?= $pekerjaan['perusahaan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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

            <h4 id="heading-kuliah">Histori Kuliah</h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">IPK</label>
                        <input type="text" class="form-control" name="ipk" placeholder="<?= $alumni['ipk']; ?>" required="required" disabled>
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
                        <label for="" class="form-label-alumni">Judul Skripsi</label>
                        <textarea id="area-judul-skripsi" placeholder="<?= $alumni['judulskripsi']; ?>" disabled></textarea required="required" disabled>
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

        <h4 id="heading-penghargaan">Pencapaian & Penghargaan</h4>

        <div class="form-group">
            <div class="row mb-2">
                <div class="col">
                <table class="table table-striped">
                            <thead style="background-color: #2C5CD6; color:white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pencapaian</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Deskripsi Pencapaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pencapaian as $pencapaian) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $pencapaian['pencapaian']; ?></td>
                                        <td><?= $pencapaian['thpencapaian']; ?></td>
                                        <td><?= $pencapaian['despencapaian']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        

        <div class="form-group">
            <button id="SimpanData" class="btn btn-primary btn-lg">Kembali</button>
        </div>
    </form>
</div>
</div>

<?= $this->endSection(); ?>