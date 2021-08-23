<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="signup-form">

    <form action="/alumni/save" method="POST" enctype="multipart/form-data">

        <?= csrf_field(); ?>

        <h2>Input Data Alumni</h2>

        <p class="hint-text">Masukkan Data dengan Lengkap dan Valid</p>

        <h4 id="heading-daftar-akun">Pendaftaran Akun</h4>

        <!-- </?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                </?= $validation->listErrors() ?></div>
        </?php endif; ?> -->

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input for="InputForEmail" id="InputForEmail" type="email" class="form-control mb-4 <?= ($validation->hasError('email_user')) ? 'is-invalid' : ''; ?>" name="email_user" placeholder="Email" />
                    <div class="invalid-feedback">
                        <?= $validation->getError('email_user'); ?>
                    </div>
                </div>
                <div class="col">
                    <input id="InputForPassword" type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" />
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <div class="col">
                    <input id="InputForConfPassword" type="password" class="form-control <?= ($validation->hasError('confpassword')) ? 'is-invalid' : ''; ?>" name="confpassword" placeholder="Confirm Password" />
                    <div class="invalid-feedback">
                        <?= $validation->getError('confpassword'); ?>
                    </div>
                </div>
            </div>
        </div>


        <h4 id="heading-data-diri">Data Diri Alumni</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="npm" class="form-label-alumni">NPM</label>
                    <input type="text" id="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" name="npm" placeholder="Contoh: 18082010036" autofocus value="<?= old('npm'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('npm'); ?>
                    </div>
                </div>
                <div class="col">
                    <label for="nama" class="form-label-alumni">Nama lengkap</label>
                    <input type="text" id="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" placeholder="Contoh: Budi Santoso" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="thmasuk" class="form-label-alumni">Tahun masuk</label>
                    <input type="text" minlength="4" maxlength="4" id="thmasuk" class="form-control <?= ($validation->hasError('thmasuk')) ? 'is-invalid' : ''; ?>" name="thmasuk" placeholder="Contoh: 2015" value="<?= old('thmasuk'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('thmasuk'); ?>
                    </div>
                </div>
                <div class="col">
                    <label for="thlulus" class="form-label-alumni">Tahun lulus</label>
                    <input type="text" minlength="4" maxlength="4" id="thlulus" class="form-control <?= ($validation->hasError('thlulus')) ? 'is-invalid' : ''; ?>" name="thlulus" placeholder="Contoh: 2019" value="<?= old('thlulus'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('thlulus'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat" class="form-label-alumni">Alamat</label>
            <input type="text" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" placeholder="Contoh: Jl Xyz RT 09 RW 03 Kecamatan Gunung Anyar No.B-10" value="<?= old('alamat'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('alamat'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="notelp" class="form-label-alumni">Nomor telepon</label>
                    <input type="text" minlength="10" id="notelp" class="form-control <?= ($validation->hasError('notelp')) ? 'is-invalid' : ''; ?>" name="notelp" placeholder="Contoh: 0812345678" value="<?= old('notelp'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('notelp'); ?>
                    </div>
                </div>
                <div class="col">
                    <label for="notelp_ortu" class="form-label-alumni">Nomor telepon orang tua</label>
                    <input type="text" minlength="10" id="notelp_ortu" class="form-control <?= ($validation->hasError('notelp')) ? 'is-invalid' : ''; ?>" name="notelp_ortu" placeholder="Contoh: 0812345678" value="<?= old('notelp'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('notelp'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class=" form-group">
            <div class="row">
                <div class="col">
                    <label for="noijazah" class="form-label-alumni">Nomor ijazah</label>
                    <input type="text" id="noijazah" class="form-control <?= ($validation->hasError('noijazah')) ? 'is-invalid' : ''; ?>" name="noijazah" placeholder="Contoh: 582013020020150" value="<?= old('noijazah'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('noijazah'); ?>
                    </div>
                </div>
                <div class="col">
                    <label for="email" class="form-label-alumni">Email</label>
                    <input type="text" id="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Contoh: budisantoso@gmail.com" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="col">
                    <label for="email_cadangan" class="form-label-alumni">Email cadangan</label>
                    <input type="text" id="email_cadangan" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email_cadangan" placeholder="Contoh: budisantoso@gmail.com" value="<?= old('email_cadangan'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="fotoalumni" class="col-sm-2 col-form-label">Upload Foto (JPG, JPEG, PNG)* :</label>
            <div class="col-sm-2">
                <img src="/img/default.jpg" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('fotoalumni')) ? 'is-invalid' : ''; ?>" id="fotoalumni" name="fotoalumni" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('fotoalumni'); ?>
                    </div>
                    <label class="custom-file-label" for="fotoalumni">Pilih foto (Maksimum 5MB)</label>
                </div>
            </div>
        </div>

        <h4 id="heading-pekerjaan">Histori Pekerjaan</h4>

        <div class="input-group-md-6 control-group after-add-more-pekerjaan" id="pekerjaan">
            <div class="row">
                <div class="col">
                    <label for="periode_bekerja1" class="form-label-alumni">Periode bekerja</label>
                    <input type="text" id="periode_bekerja1" class="form-control" name="periode_bekerja1" placeholder="Contoh: 2018-sekarang" value="<?= old('periode_bekerja1'); ?>">
                    <input type="hidden" id="jumlah_pekerjaan" name="jumlah_pekerjaan" value="1">
                </div>
                <div class="col">
                    <label for="perusahaan1" class="form-label-alumni">Perusahaan tempat bekerja</label>
                    <input type="text" id="perusahaan1" class="form-control" name="perusahaan1" placeholder="Contoh: Gojek Indonesia" value="<?= old('perusahaan1'); ?>">
                </div>
            </div>
            <div class="input-group-btn">
                <button class="btn btn-success add-more-pekerjaan mt-2" type="button"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
            </div>
        </div>

        <!-- Copy Fields -->
        <!-- <div class="copy-pekerjaan invisible">
            <div class="control-group input-group-md-6" style="margin-top:10px">
                <div class="row">
                    <div class="col">
                        <label for="periode_bekerja2" class="form-label-alumni">Periode bekerja</label>
                        <input type="text" id="periode_bekerja2" class="form-control" name="periode_bekerja2" placeholder="Contoh: 2018-sekarang" value="</?= old('periode_bekerja2'); ?>">
                    </div>
                    <div class="col">
                        <label for="perusahaan2" class="form-label-alumni">Perusahaan tempat bekerja</label>
                        <input type="text" id="perusahaan2" class="form-control" name="perusahaan2" placeholder="Contoh: Gojek Indonesia" value="</?= old('perusahaan2'); ?>">
                    </div>
                </div>
                <div class="input-group-btn mt-2">
                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>
        </div> -->

        <h4 id="heading-medsos">Media Sosial</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="facebook" class="form-label-alumni">Facebook</label>
                    <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Contoh: Budi Santoso" value="<?= old('facebook'); ?>">
                </div>
                <div class="col">
                    <label for="instagram" class="form-label-alumni">Instagram</label>
                    <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Contoh: budi.santoso" value="<?= old('instagram'); ?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="linkedin" class="form-label-alumni">LinkedIn</label>
                    <input type="text" id="linkedin" class="form-control" name="linkedin" placeholder="Contoh: Budi Santoso" value="<?= old('linkedin'); ?>">
                </div>
                <div class="col">
                    <label for="twitter" class="form-label-alumni">Twitter</label>
                    <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Contoh: budi.santoso" value="<?= old('twitter'); ?>">
                </div>
            </div>
        </div>

        <h4 id="heading-kuliah">Histori Kuliah</h4>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="ipk" class="form-label-alumni">IPK</label>
                    <input type="text" minlength="4" class="form-control <?= ($validation->hasError('ipk')) ? 'is-invalid' : ''; ?>" name="ipk" placeholder="Contoh: 3.54" value="<?= old('ipk'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('ipk'); ?>
                    </div>
                </div>
                <div class="col">
                    <label for="semester" class="form-label-alumni">Jumlah semester kumulatif</label>
                    <select class="selectpicker btn dropdown-toggle custom-select" name="semester">
                        <!-- <option value="">Pilih</option> -->
                        <?php foreach ($semester as $l) : ?>
                            <option><?= $l['semester']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="bidangminat" class="form-label-alumni">Bidang minat skripsi</label>
            <select class="selectpicker btn dropdown-toggle custom-select" name="bidangminat">
                <!-- <option value="">Pilih</option> -->
                <?php foreach ($lab as $l) : ?>
                    <option><?= $l['nama_lab']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="judulskripsi" class="form-label-alumni">Judul skripsi</label>
            <textarea id="txtarea-judulskripsi" class="form-control judulskripsi <?= ($validation->hasError('judulskripsi')) ? 'is-invalid' : ''; ?>" name="judulskripsi"><?= old('judulskripsi'); ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('judulskripsi'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="abstrak" class="form-label-alumni">Abstrak skripsi</label>
            <textarea id="txtarea-abstrak" class="form-control abstrak <?= ($validation->hasError('abstrak')) ? 'is-invalid' : ''; ?>" name="abstrak"><?= old('abstrak'); ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('abstrak'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="transkrip" class="col-sm-4 col-form-label">Upload Transkrip (PDF)* :</label>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('transkrip')) ? 'is-invalid' : ''; ?>" id="transkrip" name="transkrip" onchange="previewTranskrip()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('transkrip'); ?>
                    </div>
                    <label class="custom-file-label transkrip" for="transkrip">Pilih file (Maksimum 5MB)</label>
                </div>
            </div>
        </div>

        <h4 id="heading-penghargaan">Penghargaan & Pencapaian</h4>

        <div class="input-group-md-6 control-group after-add-more-pencapaian" id="pencapaian">
            <div class="row">
                <div class="col">
                    <label for="pencapaian1" class="form-label-alumni">Pencapaian & Penghargaan</label>
                    <input type="text" class="form-control" name="pencapaian1" placeholder="Contoh: Juara 1 Lomba Koding" value="<?= old('pencapaian1'); ?>">
                    <input type="hidden" id="jumlah_pencapaian" name="jumlah_pencapaian" value="1">
                </div>
                <div class=" col">
                    <label for="thpencapaian1" class="form-label-alumni">Tahun Pencapaian</label>
                    <input type="text" class="form-control" name="thpencapaian1" placeholder="Contoh: 2018" value="<?= old('thpencapaian1'); ?>">
                </div>
            </div>
            <div class=" form-group mt-3">
                <label for="despencapaian1" class="form-label-alumni">Deskripsi Pencapaian</label>
                <textarea id="txtarea-despencapaian" class="despencapaian" name="despencapaian1"><?= old('despencapaian1'); ?></textarea>
            </div>
            <div class="input-group-btn">
                <button class="btn btn-success add-more-pencapaian" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
            </div>
        </div>

        <!-- Copy Fields -->
        <!-- <div class="copy-pencapaian invisible">
            <div class="control-group input-group-md-6" style="margin-top:10px">
                <div class="row">
                    <div class="col">
                        <label for="pencapaian2" class="form-label-alumni">Pencapaian & Penghargaan</label>
                        <input type="text" class="form-control" name="pencapaian2" placeholder="Contoh: Juara 1 Lomba Karya Ilmiah" value="</?= old('pencapaian2'); ?>">
                    </div>
                    <div class=" col">
                        <label for="thpencapaian2" class="form-label-alumni">Tahun Pencapaian</label>
                        <input type="text" class="form-control" name="thpencapaian2" placeholder="Contoh: 2018" value="</?= old('thpencapaian2'); ?>">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="despencapaian2" class="form-label-alumni">Deskripsi Pencapaian</label>
                    <textarea id="txtarea-despencapaian2" style="height: 100px;" class="despencapaian2" name="despencapaian2"></?= old('despencapaian2'); ?></textarea>
                </div>
                <div class="input-group-btn">
                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>
        </div> -->

        <!-- Script Pekerjaan -->
        <script type="text/javascript">
            let jumlah_pekerjaan = 1;
            $(document).ready(function() {
                let wrapper = $("#pekerjaan");
                $(".add-more-pekerjaan").click(function() {
                    // var html = $(".copy-pekerjaan").html();
                    if (jumlah_pekerjaan < 3) {
                        ++jumlah_pekerjaan;
                        console.log(jumlah_pekerjaan);
                        var html = `<div class="control-group input-group-md-6" style="margin-top:10px">
                <div class="row">
                    <div class="col">
                        <label for="periode_bekerja2" class="form-label-alumni">Periode bekerja</label>
                        <input type="text" id="periode_bekerja${jumlah_pekerjaan}" class="form-control" name="periode_bekerja${jumlah_pekerjaan}" placeholder="Contoh: 2018-sekarang">
                    </div>
                    <div class="col">
                        <label for="perusahaan2" class="form-label-alumni">Perusahaan tempat bekerja</label>
                        <input type="text" id="perusahaan${jumlah_pekerjaan}" class="form-control" name="perusahaan${jumlah_pekerjaan}" placeholder="Contoh: Gojek Indonesia">
                    </div>
                </div>
                <div class="input-group-btn mt-2">
                    <button class="btn btn-danger remove" type="button" ><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>`;
                        // $(".after-add-more-pekerjaan").after(html);
                        $(wrapper).append(html);
                        document.getElementById('jumlah_pekerjaan').value = jumlah_pekerjaan;
                    }
                });
                $(wrapper).on("click", ".remove", function() {
                    $(this).parent("div").parent("div").remove();
                    --jumlah_pekerjaan;
                    document.getElementById('jumlah_pekerjaan').value = jumlah_pekerjaan;
                });
            });
        </script>

        <!-- Script Pencapaian -->

        <script type="text/javascript">
            let jumlah_pencapaian = 1;
            $(document).ready(function() {
                let wrapper = $("#pencapaian");
                $(".add-more-pencapaian").click(function() {
                    // var html = $(".copy-pencapaian").html();
                    if (jumlah_pencapaian < 3) {
                        ++jumlah_pencapaian;
                        console.log(jumlah_pencapaian);
                        var html = `<div class="control-group input-group-md-6" style="margin-top:10px">
                <div class="row">
                    <div class="col">
                        <label for="pencapaian2" class="form-label-alumni">Pencapaian & Penghargaan</label>
                        <input type="text" class="form-control" name="pencapaian${jumlah_pencapaian}" id="pencapaian${jumlah_pencapaian}" placeholder="Contoh: Juara 1 Lomba Karya Ilmiah">
                    </div>
                    <div class=" col">
                        <label for="thpencapaian2" class="form-label-alumni">Tahun Pencapaian</label>
                        <input type="text" class="form-control" name="thpencapaian${jumlah_pencapaian}" id="thpencapaian${jumlah_pencapaian}" placeholder="Contoh: 2018">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="despencapaian2" class="form-label-alumni">Deskripsi Pencapaian</label>
                    <textarea id="despencapaian${jumlah_pencapaian}" style="height: 100px;" class="despencapaian2" name="despencapaian${jumlah_pencapaian}"></textarea>
                </div>
                <div class="input-group-btn">
                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>`;
                        // $(".after-add-more-pekerjaan").after(html);
                        $(wrapper).append(html);
                        document.getElementById('jumlah_pencapaian').value = jumlah_pencapaian;
                    }
                });
                $(wrapper).on("click", ".remove", function() {
                    $(this).parent("div").parent("div").remove();
                    --jumlah_pencapaian;
                    document.getElementById('jumlah_pencapaian').value = jumlah_pencapaian;
                });
            });
        </script>

        <!-- <script type="text/javascript">
            $(document).ready(function() {
                $(".add-more-pencapaian").click(function() {
                    var html = $(".copy-pencapaian").html();
                    $(".after-add-more-pencapaian").after(html);
                });
                $("body").on("click", ".remove", function() {
                    $(this).parents(".control-group").remove();
                });
            });
        </script> -->

        <div class="form-group">
            <button id="SimpanData" type="submit" class="btn btn-primary btn-lg">Simpan</button>
        </div>

    </form>

</div>

<?= $this->endSection(); ?>