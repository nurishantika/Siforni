<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="signup-form">

    <form action="/alumni/save" method="POST" enctype="multipart/form-data">

        <?= csrf_field(); ?>

        <h2>Input Data Alumni</h2>

        <p class="hint-text">Masukkan Data dengan Lengkap dan Valid</p>

        <h4 id="heading-data-diri">Data Diri Alumni</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="npm" class="form-label-alumni">NPM</label>
                    <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" name="npm" placeholder="NPM*" autofocus value="<?= old('npm'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('npm'); ?></div>
                </div>
                <div class="col">
                    <label for="nama" class="form-label-alumni">Nama Lengkap</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" placeholder="Nama Lengkap*" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('nama'); ?></div>
                </div>
            </div>
        </div>

        <div class=" form-group">
            <div class="row">
                <div class="col">
                    <label for="thmasuk" class="form-label-alumni">Tahun Masuk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('thmasuk')) ? 'is-invalid' : ''; ?>" name="thmasuk" placeholder="Tahun Masuk*" value="<?= old('thmasuk'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('thmasuk'); ?></div>
                </div>
                <div class="col">
                    <label for="thlulus" class="form-label-alumni">Tahun Lulus</label>
                    <input type="text" class="form-control <?= ($validation->hasError('thlulus')) ? 'is-invalid' : ''; ?>" name="thlulus" placeholder="Tahun Lulus*" value="<?= old('thlulus'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('thlulus'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="alamat" class="form-label-alumni">Alamat</label>
                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" placeholder="Contoh: Jl Udang RT 09 RW 03, Kecamatan Bangil, Kabupaten Pasuruan." value="<?= old('alamat'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="notelp" class="form-label-alumni">No. Telepon</label>
                    <input type="text" class="form-control <?= ($validation->hasError('notelp')) ? 'is-invalid' : ''; ?>" name="notelp" placeholder="No. Telepon" value="<?= old('notelp'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('notelp'); ?></div>
                </div>
                <div class="col">
                    <label for="notelp_ortu" class="form-label-alumni">No. Telepon Orang Tua</label>
                    <input type="text" class="form-control <?= ($validation->hasError('notelp_ortu')) ? 'is-invalid' : ''; ?>" name="notelp_ortu" placeholder="No. Telepon" value="<?= old('notelp_ortu'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('notelp_ortu'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="noijazah" class="form-label-alumni">No. Ijazah</label>
                    <input type="text" class="form-control <?= ($validation->hasError('noijazah')) ? 'is-invalid' : ''; ?>" name="noijazah" placeholder="No. Seri Ijazah*" value="<?= old('noijazah'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('noijazah'); ?></div>
                </div>
                <div class="col">
                    <label for="email" class="form-label-alumni">Email Utama</label>
                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Email*" value="<?= old('email'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                </div>
                <div class="col">
                    <label for="email_cadangan" class="form-label-alumni">Email Cadangan</label>
                    <input type="email" class="form-control <?= ($validation->hasError('email_cadangan')) ? 'is-invalid' : ''; ?>" name="email_cadangan" placeholder="Email*" value="<?= old('email_cadangan'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('email_cadangan'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fotoalumni">Upload Foto (JPG, JPEG, PNG)* :</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('fotoalumni')) ? 'is-invalid' : ''; ?>" id="fotoalumni" name="fotoalumni" value="<?= old('fotoalumni'); ?>" onchange="previewImg">
                <div class="invalid-feedback"><?= $validation->getError('fotoalumni'); ?></div>
                <label class="custom-file-label" for="fotoalumni">Pilih foto</label>
            </div>
        </div>

        <h4 id="heading-medsos">Histori Pekerjaan</h4>

        <div class="input-group control-group after-add-more-pekerjaan">
            <div class="row">
                <div class="col">
                    <label for="thbekerja" class="form-label-alumni">Periode Bekerja</label>
                    <input type="text" class="form-control <?= ($validation->hasError('thbekerja')) ? 'is-invalid' : ''; ?>" name="thbekerja" placeholder="Contoh: 2020-2022" value="<?= old('thbekerja'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('thbekerja'); ?></div>
                </div>
                <div class="col">
                    <label for="perusahaan" class="form-label-alumni">Perusahaan tempat bekerja</label>
                    <input type="text" class="form-control <?= ($validation->hasError('perusahaan')) ? 'is-invalid' : ''; ?>" name="perusahaan" placeholder="Nama Perusahaan" value="<?= old('perusahaan'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('perusahaan'); ?></div>
                </div>
            </div>
        </div>
        <div class="input-group-btn">
            <button class="btn btn-success add-more-pekerjaan mt-2" type="button"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
        </div>
        <!-- Copy Fields -->
        <div class="copy-pekerjaan invisible">
            <div class="control-group input-group" style="margin-top:10px">
                <div class="row">
                    <div class="col">
                        <label for="thbekerja" class="form-label-alumni">Periode Bekerja</label>
                        <input type="text" class="form-control <?= ($validation->hasError('thbekerja')) ? 'is-invalid' : ''; ?>" name="thbekerja" placeholder="Contoh: 2020-2022" value="<?= old('thbekerja'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('thbekerja'); ?></div>
                    </div>
                    <div class="col">
                        <label for="perusahaan" class="form-label-alumni">Perusahaan tempat bekerja</label>
                        <input type="text" class="form-control <?= ($validation->hasError('perusahaan')) ? 'is-invalid' : ''; ?>" name="perusahaan" placeholder="Nama Perusahaan" value="<?= old('perusahaan'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('perusahaan'); ?></div>
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>
        </div>

        <h4 id="heading-medsos">Media Sosial</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="facebook" class="form-label-alumni">Facebook</label>
                    <input type="text" class="form-control <?= ($validation->hasError('facebook')) ? 'is-invalid' : ''; ?>" name="facebook" placeholder="Facebook" value="<?= old('facebook'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('facebook'); ?></div>
                </div>
                <div class="col">
                    <label for="instagram" class="form-label-alumni">Instagram</label>
                    <input type="text" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : ''; ?>" name="instagram" placeholder="Instagram" value="<?= old('instagram'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('instagram'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="linkedin" class="form-label-alumni">LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" value="<?= old('linkedin'); ?>">
                </div>
                <div class="col">
                    <label for="twitter" class="form-label-alumni">Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="<?= old('twitter'); ?>">
                </div>
            </div>
        </div>

        <h4 id="heading-histori">Histori Kuliah</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="ipk" class="form-label-alumni">IPK</label>
                    <input type="text" class="form-control <?= ($validation->hasError('ipk')) ? 'is-invalid' : ''; ?>" name="ipk" placeholder="IPK*" value="<?= old('ipk'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('ipk'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <p>Bidang Minat Skripsi*</p>
            <select class="selectpicker btn dropdown-toggle" name="bidangminat">
                <option value="">Pilih</option>
                <?php foreach ($lab as $l) : ?>
                    <option value="<?= $l['nama_lab']; ?>"><?= $l['nama_lab']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="judulskripsi" class="form-label-alumni">Judul Skripsi Skripsi</label>
            <textarea id="txtarea-judulskripsi" class="judulskripsi <?= ($validation->hasError('judulskripsi')) ? 'is-invalid' : ''; ?>" name="judulskripsi" placeholder="Judul Skripsi*" value="<?= old('judulskripsi'); ?>" required></textarea>
            <div class="invalid-feedback"><?= $validation->getError('judulskripsi'); ?></div>
        </div>

        <div class="form-group">
            <label for="abstrak" class="form-label-alumni">Abstrak Skripsi</label>
            <textarea id="txtarea-abstrak" class="abstrak <?= ($validation->hasError('abstrak')) ? 'is-invalid' : ''; ?>" name="abstrak" placeholder="Abstrak Skripsi*" value="<?= old('abstrak'); ?>" required></textarea>
            <div class="invalid-feedback"><?= $validation->getError('abstrak'); ?></div>
        </div>

        <div class="form-group">
            <label for="transkrip">Upload Transkrip Nilai (PDF)* :</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('transkrip')) ? 'is-invalid' : ''; ?>" id="transkrip" name="transkrip" value="<?= old('transkrip'); ?>">
                <div class="invalid-feedback"><?= $validation->getError('transkrip'); ?></div>
                <label class="custom-file-label" for="transkrip">Pilih file</label>
            </div>
        </div>

        <h4 id="heading-histori">Penghargaan & Pencapaian</h4>
        <div class="input-group control-group after-add-more-pencapaian">
            <div class="row">
                <div class="col">
                    <label for="pencapaian" class="form-label-alumni">Pencapaian & Penghargaan</label>
                    <input type="text" class="form-control <?= ($validation->hasError('pencapaian')) ? 'is-invalid' : ''; ?>" name="pencapaian" placeholder="Pencapaian" value="<?= old('pencapaian'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('pencapaian'); ?></div>
                </div>
                <div class=" col">
                    <label for="thpencapaian" class="form-label-alumni">Tahun Pencapaian</label>
                    <input type="text" class="form-control <?= ($validation->hasError('thpencapaian')) ? 'is-invalid' : ''; ?>" name="thpencapaian" placeholder="Contoh: 2018" value="<?= old('thpencapaian'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('thpencapaian'); ?></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="despencapaian" class="form-label-alumni">Deskripsi Pencapaian</label>
                <textarea id="txtarea-despencapaian" class="despencapaian <?= ($validation->hasError('despencapaian')) ? 'is-invalid' : ''; ?>" name="despencapaian" placeholder="Deskripsi Pencapaian" value="<?= old('despencapaian'); ?>" required></textarea>
                <div class="invalid-feedback"><?= $validation->getError('despencapaian'); ?></div>
            </div>
            <div class="input-group-btn">
                <button class="btn btn-success add-more-pencapaian" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
            </div>
        </div>
        <!-- Copy Fields -->
        <div class="copy-pencapaian invisible">
            <div class="control-group input-group" style="margin-top:10px">
                <div class="row">
                    <div class="col">
                        <label for="pencapaian" class="form-label-alumni">Pencapaian & Penghargaan</label>
                        <input type="text" class="form-control <?= ($validation->hasError('pencapaian')) ? 'is-invalid' : ''; ?>" name="pencapaian" placeholder="Pencapaian" value="<?= old('pencapaian'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('pencapaian'); ?></div>
                    </div>
                    <div class=" col">
                        <label for="thpencapaian" class="form-label-alumni">Tahun Pencapaian</label>
                        <input type="text" class="form-control <?= ($validation->hasError('thpencapaian')) ? 'is-invalid' : ''; ?>" name="thpencapaian" placeholder="Contoh: 2018" value="<?= old('thpencapaian'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('thpencapaian'); ?></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="despencapaian" class="form-label-alumni">Deskripsi Pencapaian</label>
                    <textarea id="txtarea-despencapaian" class="despencapaian <?= ($validation->hasError('despencapaian')) ? 'is-invalid' : ''; ?>" name="despencapaian" placeholder="Deskripsi Pencapaian" value="<?= old('despencapaian'); ?>" required></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('despencapaian'); ?></div>
                </div>
                <div class="input-group-btn">
                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>
        </div>

        <!-- Script Pekerjaan -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".add-more-pekerjaan").click(function() {
                    var html = $(".copy-pekerjaan").html();
                    $(".after-add-more-pekerjaan").after(html);
                });
                $("body").on("click", ".remove", function() {
                    $(this).parents(".control-group").remove();
                });
            });
        </script>

        <!-- Script Pencapaian -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".add-more-pencapaian").click(function() {
                    var html = $(".copy-pencapaian").html();
                    $(".after-add-more-pencapaian").after(html);
                });
                $("body").on("click", ".remove", function() {
                    $(this).parents(".control-group").remove();
                });
            });
        </script>

        <div class="form-group">
            <button id="SimpanData" type="submit" class="btn btn-primary btn-lg">Tambah</button>
        </div>
    </form>
</div>


<?= $this->endSection(); ?>