<?= $this->extend('alumni/template'); ?>

<?= $this->section('content'); ?>

<center>
    <div class="signup-form col-md-8" style="color: black;">
        <form action="/alumni/update" method="POST" enctype="multipart/form-data">

            <?= csrf_field(); ?>

            <h2 id="heading-data-diri">Edit Data Alumni</h2>

            <h4 id="heading-data-diri" class="mt-5">Data Diri Alumni</h4>

            <input type="hidden" id="id_alumni" name="id_alumni" value="<?= $alumni['id']; ?>">

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="npm" class="form-label-alumni">NPM</label>
                        <input type="text" id="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" name="npm" autofocus value="<?= $alumni['npm']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('npm'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="nama" class="form-label-alumni">Nama lengkap</label>
                        <input type="text" id="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" placeholder="Contoh: Budi Santoso" value="<?= $alumni['nama']; ?>">
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
                        <input type="text" minlength="4" maxlength="4" id="thmasuk" class="form-control <?= ($validation->hasError('thmasuk')) ? 'is-invalid' : ''; ?>" name="thmasuk" placeholder="Contoh: 2015" value="<?= $alumni['thmasuk']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('thmasuk'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="thlulus" class="form-label-alumni">Tahun lulus</label>
                        <input type="text" minlength="4" maxlength="4" id="thlulus" class="form-control <?= ($validation->hasError('thlulus')) ? 'is-invalid' : ''; ?>" name="thlulus" placeholder="Contoh: 2019" value="<?= $alumni['thlulus']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('thlulus'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat" class="form-label-alumni">Alamat</label>
                <input type="text" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" placeholder="Contoh: Jl Xyz RT 09 RW 03 Kecamatan Gunung Anyar No.B-10" value="<?= $alumni['alamat']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="notelp" class="form-label-alumni">Nomor telepon</label>
                        <input type="text" id="notelp" class="form-control <?= ($validation->hasError('notelp')) ? 'is-invalid' : ''; ?>" name="notelp" placeholder="Contoh: 0812345678" value="<?= $alumni['notelp']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('notelp'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="notelp_ortu" class="form-label-alumni">Nomor telepon orang tua</label>
                        <input type="text" id="notelp_ortu" class="form-control <?= ($validation->hasError('notelp')) ? 'is-invalid' : ''; ?>" name="notelp_ortu" placeholder="Contoh: 0812345678" value="<?= $alumni['notelp_ortu']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('notelp_ortu'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" form-group">
                <div class="row">
                    <div class="col">
                        <label for="noijazah" class="form-label-alumni">Nomor ijazah</label>
                        <input type="text" id="noijazah" class="form-control <?= ($validation->hasError('noijazah')) ? 'is-invalid' : ''; ?>" name="noijazah" placeholder="Contoh: 582013020020150" value="<?= $alumni['noijazah']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('noijazah'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label-alumni">Email</label>
                        <input type="text" id="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Contoh: budisantoso@gmail.com" value="<?= $alumni['email']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="email_cadangan" class="form-label-alumni">Email cadangan</label>
                        <input type="text" id="email_cadangan" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email_cadangan" placeholder="Contoh: budisantoso@gmail.com" value="<?= $alumni['email_cadangan']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email_cadangan'); ?>
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
                        <label class="custom-file-label" for="fotoalumni"><?= $alumni['fotoalumni']; ?></label>
                    </div>
                </div>
            </div>

            <h4 id="heading-pekerjaan">Histori Pekerjaan</h4>

            <input type="hidden" id="jumlah_pekerjaan" name="jumlah_pekerjaan" value="<?= sizeof($pekerjaan_alumni); ?>">
            <input type="hidden" id="deleted_pekerjaan" name="deleted_pekerjaan">
            <?php $index = 1; ?>
            <div id="wrapper-pekerjaan">
                <?php foreach ($pekerjaan_alumni as $pekerjaan) : ?>
                    <div class="input-group-md-6 control-group after-add-more-pekerjaan" id="pekerjaan<?= $index; ?>">
                        <div class="row">
                            <div class="col">
                                <label for="periode_bekerja1" class="form-label-alumni">Periode bekerja</label>
                                <input type="text" id="periode_bekerja<?= $index; ?>" class="form-control" name="periode_bekerja<?= $index; ?>" placeholder="Contoh: 2018-sekarang" value="<?= $pekerjaan['periode_bekerja']; ?>">
                                <input type="hidden" id="id_pekerjaan<?= $index; ?>" name="id_pekerjaan<?= $index; ?>" value="<?= $pekerjaan['id_pekerjaan']; ?>">
                            </div>
                            <div class="col">
                                <label for="perusahaan1" class="form-label-alumni">Perusahaan tempat bekerja</label>
                                <input type="text" id="perusahaan<?= $index; ?>" class="form-control" name="perusahaan<?= $index; ?>" placeholder="Contoh: Gojek Indonesia" value="<?= $pekerjaan['perusahaan']; ?>">
                            </div>
                            <div class="input-group-btn mt-2">
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapusModal" onclick="setDeletedPekerjaan(<?= $index; ?>)"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                            </div>
                        </div>
                    </div>
                    <?php ++$index; ?>
                <?php endforeach; ?>
            </div>
            <div class="input-group-btn">
                <button class="btn btn-success add-more-pekerjaan mt-2" id="tambah-pekerjaan" type="button"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
            </div>

            <h4 id="heading-medsos">Media Sosial</h4>
            <!-- <center> -->
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="facebook" class="form-label-alumni">Facebook</label>
                        <input type="text" id="facebook" class="form-control <?= ($validation->hasError('facebook')) ? 'is-invalid' : ''; ?>" name="facebook" placeholder="Contoh: Budi Santoso" value="<?= $alumni['facebook']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('facebook'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="instagram" class="form-label-alumni">Instagram</label>
                        <input type="text" id="instagram" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : ''; ?>" name="instagram" placeholder="Contoh: budi.santoso" value="<?= $alumni['instagram']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('instagram'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="linkedin" class="form-label-alumni">LinkedIn</label>
                        <input type="text" id="linkedin" class="form-control" name="linkedin" placeholder="Contoh: Budi Santoso" value="<?= $alumni['linkedin']; ?>">
                    </div>
                    <div class="col">
                        <label for="twitter" class="form-label-alumni">Twitter</label>
                        <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Contoh: budi.santoso" value="<?= $alumni['twitter']; ?>">
                    </div>
                </div>
            </div>

            <h4 id="heading-kuliah">Histori Kuliah</h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="ipk" class="form-label-alumni">IPK</label>
                        <input type="text" class="form-control <?= ($validation->hasError('ipk')) ? 'is-invalid' : ''; ?>" name="ipk" placeholder="Contoh: 3.54" value="<?= $alumni['ipk']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('ipk'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <label for="semester" class="form-label-alumni">Jumlah semester kumulatif</label>
                        <select class="selectpicker btn dropdown-toggle custom-select" name="semester">
                            <option value="">Pilih</option>
                            <?php foreach ($semester as $s) : ?>
                                <option value="<?= $s['semester']; ?>" <?= $s['semester'] == $alumni['semester'] ? 'selected' : null; ?>><?= $s['semester']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="bidangminat" class="form-label-alumni">Bidang minat skripsi</label>
                <select class="selectpicker btn dropdown-toggle custom-select" name="bidangminat">
                    <option value="">Pilih</option>
                    <?php foreach ($lab as $l) : ?>
                        <option value="<?= $l['nama_lab']; ?>" <?= $l['nama_lab'] == $alumni['bidangminat'] ? 'selected' : null; ?>><?= $l['nama_lab']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="judulskripsi" class="form-label-alumni">Judul skripsi</label>
                <textarea id="txtarea-judulskripsi" class="form-control judulskripsi <?= ($validation->hasError('judulskripsi')) ? 'is-invalid' : ''; ?>" name="judulskripsi"><?= $alumni['judulskripsi']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('judulskripsi'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="abstrak" class="form-label-alumni">Abstrak skripsi</label>
                <textarea id="txtarea-abstrak" style="width: 800px; height: 250px;" class="form-control abstrak <?= ($validation->hasError('abstrak')) ? 'is-invalid' : ''; ?>" name="abstrak"><?= $alumni['abstrak']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('abstrak'); ?>
                </div>
            </div>

            <h4 id="heading-penghargaan">Penghargaan & Pencapaian</h4>

            <input type="hidden" id="jumlah_pencapaian" name="jumlah_pencapaian" value="<?= sizeof($pencapaian_alumni); ?>">
            <input type="hidden" id="deleted_pencapaian" name="deleted_pencapaian">
            <?php $index2 = 1; ?>
            <div id="wrapper-pencapaian">
                <?php foreach ($pencapaian_alumni as $pencapaian) : ?>
                    <div class="input-group-md-6 control-group after-add-more-pencapaian" id="pencapaian<?= $index2; ?>">
                        <div class="row">
                            <div class="col">
                                <label for="pencapaian1" class="form-label-alumni">Pencapaian & Penghargaan</label>
                                <input type="text" class="form-control" id="pencapaian<?= $index2; ?>" name="pencapaian<?= $index2; ?>" placeholder="Contoh: Juara 1 Lomba Koding" value="<?= $pencapaian['pencapaian']; ?>">
                                <input type="hidden" id="id_pencapaian<?= $index2; ?>" name="id_pencapaian<?= $index2; ?>" value="<?= $pencapaian['id_pencapaian']; ?>">
                            </div>
                            <div class=" col">
                                <label for="thpencapaian1" class="form-label-alumni">Tahun Pencapaian</label>
                                <input type="text" class="form-control" id="pencapaian<?= $index2; ?>" name="thpencapaian<?= $index2; ?>" placeholder="Contoh: 2018" value="<?= $pencapaian['thpencapaian']; ?>">
                            </div>
                        </div>
                        <div class=" form-group mt-3">
                            <label for="despencapaian1" class="form-label-alumni">Deskripsi Pencapaian</label>
                            <textarea style="width: 815px; height: 100px;" id="despencapaian<?= $index2; ?>" class="despencapaian" name="despencapaian<?= $index2; ?>"><?= $pencapaian['despencapaian']; ?></textarea>
                        </div>

                        <div class="input-group-btn my-2">
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapusModal2" onclick="setDeletedPencapaian(<?= $index2; ?>)"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                        </div>
                    </div>
                    <?php ++$index2; ?>
                <?php endforeach; ?>
            </div>
            <div class="input-group-btn">
                <button class="btn btn-success add-more-pencapaian" id="tambah-pencapaian" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
            </div>


            <!-- Hapus Modal Pekerjaan-->
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
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapusModal" onclick="delete_pekerjaan()"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hapus Modal Pencapaian-->
            <div class="modal fade" id="hapusModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapusModal2" onclick="delete_pencapaian()"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Script Pekerjaan -->
            <script type="text/javascript">
                let jumlah_pekerjaan = parseInt(document.getElementById('jumlah_pekerjaan').value);
                let listDeletedPekerjaan = [];
                let deletedPekerjaan;
                $(document).ready(function() {
                    let wrapper = $("#wrapper-pekerjaan");
                    $("#tambah-pekerjaan").click(function() {
                        // var html = $(".copy-pekerjaan").html();
                        if (jumlah_pekerjaan < 3) {
                            ++jumlah_pekerjaan;
                            console.log(jumlah_pekerjaan);
                            var html = `<div class="control-group input-group-md-6" id="pekerjaan${jumlah_pekerjaan}" style="margin-top:10px">
                    <div class="row">
                    <div class="col">
                    <label for="periode_bekerja2" class="form-label-alumni">Periode bekerja</label>
                    <input type="text" id="periode_bekerja${jumlah_pekerjaan}" class="form-control" name="periode_bekerja${jumlah_pekerjaan}" placeholder="Contoh: 2018-sekarang">
                    <input type="hidden" id="id_pekerjaan${jumlah_pekerjaan}" name="id_pekerjaan${jumlah_pekerjaan}" value="">
                    </div>
                    <div class="col">
                    <label for="perusahaan2" class="form-label-alumni">Perusahaan tempat bekerja</label>
                    <input type="text" id="perusahaan${jumlah_pekerjaan}" class="form-control" name="perusahaan${jumlah_pekerjaan}" placeholder="Contoh: Gojek Indonesia">
                    </div>
                    </div>
                    <div class="input-group-btn mt-2">
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapusModal" onclick="setDeletedPekerjaan(${jumlah_pekerjaan})"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                    </div>
                    </div>`;
                            // $(".after-add-more-pekerjaan").after(html);
                            $(wrapper).append(html);
                            document.getElementById('jumlah_pekerjaan').value = jumlah_pekerjaan;
                        }
                    });
                    $(wrapper).on("click", "#remove", function() {
                        $(this).parent("div").parent("div").remove();
                        --jumlah_pekerjaan;
                        document.getElementById('jumlah_pekerjaan').value = jumlah_pekerjaan;
                    });
                });

                function delete_pekerjaan() {
                    let deleted_id = document.getElementById(`id_pekerjaan${deletedPekerjaan}`).value;
                    $(`#pekerjaan${deletedPekerjaan}`).remove();
                    --jumlah_pekerjaan;
                    document.getElementById('jumlah_pekerjaan').value = jumlah_pekerjaan;
                    listDeletedPekerjaan.push(deleted_id);
                    document.getElementById('deleted_pekerjaan').value = JSON.stringify(listDeletedPekerjaan);
                }

                function setDeletedPekerjaan(index) {
                    deletedPekerjaan = index;
                }
            </script>

            <!-- Script Pencapaian -->
            <script type="text/javascript">
                let jumlah_pencapaian = parseInt(document.getElementById('jumlah_pencapaian').value);
                let listDeletedPencapaian = [];
                let deletedPencapaian;
                $(document).ready(function() {
                    let wrapper = $("#wrapper-pencapaian");
                    $("#tambah-pencapaian").click(function() {
                        // var html = $(".copy-pencapaian").html();
                        if (jumlah_pencapaian < 3) {
                            ++jumlah_pencapaian;
                            console.log(jumlah_pencapaian);
                            var html = `<div class="input-group-md-6 control-group after-add-more-pencapaian" id="pencapaian${jumlah_pencapaian}">
                    <div class="row">
                        <div class="col">
                            <label for="pencapaian1" class="form-label-alumni">Pencapaian & Penghargaan</label>
                            <input type="text" class="form-control" id="pencapaian${jumlah_pencapaian}" name="pencapaian${jumlah_pencapaian}" placeholder="Contoh: Juara 1 Lomba Koding>
                            <input type="hidden" id="id_pencapaian${jumlah_pencapaian}" name="id_pencapaian${jumlah_pencapaian}" value="">
                        </div>
                        <div class=" col">
                            <label for="thpencapaian1" class="form-label-alumni">Tahun Pencapaian</label>
                            <input type="text" class="form-control" id="pencapaian${jumlah_pencapaian}" name="thpencapaian${jumlah_pencapaian}" placeholder="Contoh: 2018">
                        </div>
                    </div>
                    <div class=" form-group mt-3">
                        <label for="despencapaian1" class="form-label-alumni">Deskripsi Pencapaian</label>
                        <textarea style="width: 815px; height: 100px;" id="despencapaian${jumlah_pencapaian}" class="despencapaian" name="despencapaian${jumlah_pencapaian}"></textarea>
                    </div>

                    <div class="input-group-btn my-2">
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#hapusModal2" onclick="setDeletedPencapaian(${jumlah_pencapaian})"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                    </div>
                </div>`;
                            // $(".after-add-more-pencapaian").after(html);
                            $(wrapper).append(html);
                            document.getElementById('jumlah_pencapaian').value = jumlah_pencapaian;
                        }
                    });
                    $(wrapper).on("click", "#remove", function() {
                        $(this).parent("div").parent("div").remove();
                        --jumlah_pencapaian;
                        document.getElementById('jumlah_pencapaian').value = jumlah_pencapaian;
                    });
                });

                function delete_pencapaian() {
                    let deleted_id = document.getElementById(`id_pencapaian${deletedPencapaian}`).value;
                    $(`#pencapaian${deletedPencapaian}`).remove();
                    --jumlah_pencapaian;
                    document.getElementById('jumlah_pencapaian').value = jumlah_pencapaian;
                    listDeletedPencapaian.push(deleted_id);
                    document.getElementById('deleted_pencapaian').value = JSON.stringify(listDeletedPencapaian);
                }

                function setDeletedPencapaian(index2) {
                    deletedPencapaian = index2;
                }
            </script>

            <div class="form-group">
                <button id="SimpanData" type="submit" class="btn btn-primary btn-lg mt-5">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</center>

<!-- <script>
    function delete_pekerjaan(id_pekerjaan) {
        $.get(`/delete_pekerjaan/${id_pekerjaan}`, function() {

        });
    }
</script> -->

<?= $this->endSection(); ?>