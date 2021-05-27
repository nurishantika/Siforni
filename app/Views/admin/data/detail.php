<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div id="detail-alumni" class="signup-form">
        <form action="/admin/alumni/<?= $alumni['id']; ?>" method="POST">
            <?= csrf_field(); ?>

            <h2>Data Alumni</h2>

            <img class="foto-alumni" src="/img/<?= $alumni['fotoalumni']; ?>">

            <h4 id="heading-data-diri">Data Diri Alumni</h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">NPM</label>
                        <label type="text" class="form-control" name="npm" required="required" disabled><?= $alumni['npm']; ?></label>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Nama Lengkap</label>
                        <label type="text" class="form-control" name="nama_lengkap" required="required" disabled><?= $alumni['nama']; ?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Masuk</label>
                        <label type="text" class="form-control" name="tahun_masuk" required="required" disabled><?= $alumni['thmasuk']; ?></label>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Lulus</label>
                        <label type="text" class="form-control" name="tahun_lulus" required="required" disabled><?= $alumni['thlulus']; ?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Alamat</label>
                        <label type="text" class="form-control" name="alamat" disabled><?= $alumni['alamat']; ?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="notelp" class="form-label-alumni">No. Telepon</label>
                        <label type="text" class="form-control" name="notelp" disabled><?= $alumni['notelp']; ?></label>
                    </div>
                    <div class="col">
                        <label for="notelp_ortu" class="form-label-alumni">No. Telepon Orang Tuas</label>
                        <label type="text" class="form-control" name="notelp_ortu" disabled><?= $alumni['notelp_ortu']; ?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">No. Ijazah</label>
                        <label type="text" class="form-control" name="no_ijazah" required="required" disabled><?= $alumni['noijazah']; ?></label>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Email</label>
                        <label type="email" class="form-control" name="email" required="required" disabled><?= $alumni['email']; ?></label>
                    </div>
                    <div class="col">
                        <label for="email_cadangan" class="form-label-alumni">Email</label>
                        <label type="email" class="form-control" name="email_cadangan" required="required" disabled><?= $alumni['email_cadangan']; ?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Bekerja</label>
                        <label type="text" class="form-control" name="tahun_bekerja" required="required" disabled><?= $alumni['thbekerja']; ?></label>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Perusahaan Tempat Bekerja</label>
                        <label type="text" class="form-control" name="nama_perusahaan" required="required" disabled><?= $alumni['perusahaan']; ?></label>
                    </div>
                </div>
            </div>

            <h4 id="heading-medsos">Media Sosial</h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Facebook</label>
                        <label type="text" class="form-control" name="facebook" disabled><?= $alumni['facebook']; ?></label>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Instagram</label>
                        <label type="text" class="form-control" name="instagram" disabled><?= $alumni['instagram']; ?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">LinkedIn</label>
                        <label type="text" class="form-control" name="linkedin" disabled><?= $alumni['linkedin']; ?></label>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Twitter</label>
                        <label type="text" class="form-control" name="twitter" disabled><?= $alumni['twitter']; ?></label>
                    </div>
                </div>
            </div>

            <h4 id="heading-histori">Histori Kuliah</h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">IPK</label>
                        <label type="text" class="form-control" name="ipk" required="required" disabled><?= $alumni['ipk']; ?></label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Judul Skripsi</label>
                        <textarea id="area-judul-skripsi" class="btn-block" placeholder="<?= $alumni['judulskripsi']; ?>" disabled></textarea required="required" disabled>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row mb-2">
                <div class="col">
                    <label for="" class="form-label-alumni">Bidang Minat</label>
                    <label type="text" class="form-control" name="bidang-minat"  required="required" disabled><?= $alumni['bidangminat']; ?></label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Abstrak</label>
                    <textarea id="area-abstrak" class="btn-block" placeholder="<?= $alumni['abstrak']; ?>" disabled></textarea required="required" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label-alumni">Pencapaian & Penghargaan</label>
                    <textarea id="area-pencapaian" class="btn-block" placeholder="<?= $alumni['pencapaian']; ?>" disabled></textarea required="required" disabled>
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

        <a class="btn btn-danger btn-lg" style="color: white;" href="#" data-toggle="modal" data-target="#hapusModal"> Hapus </a>

        <!-- Hapus Modal-->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Hapus" jika anda ingin menghapus.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit" href="/admin/alumni">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    

</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>