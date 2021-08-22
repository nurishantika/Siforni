<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div id="detail-alumni" class="signup-form">
    <div class="col-auto">
        <form action="/nilai/update/<?= $nilai['id_nilai']; ?>" method="POST">
            <h2 id="head-card">Data Nilai Alumni</h2>

            <img class="foto-alumni" src="/img/<?= $nilai['fotoalumni']; ?>">

            <h4 id="heading-data-diri"><?= $nilai['nama']; ?></h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">NPM</label>
                        <input type="text" class="form-control" name="npm" placeholder="<?= $nilai['npm']; ?>" required="required" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">IPK</label>
                        <input type="text" class="form-control" name="ipk" placeholder="<?= $nilai['ipk']; ?>" required="required" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Masuk</label>
                        <input type="text" class="form-control" name="tahun_masuk" placeholder="<?= $nilai['thmasuk']; ?>" required="required" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Lulus</label>
                        <input type="text" class="form-control" name="tahun_lulus" placeholder="<?= $nilai['thlulus']; ?>" required="required" disabled>
                    </div>
                </div>
            </div>
            <hr>
            <div class="histori my-4">
                <h4 id="heading-medsos">Histori Nilai Alumni</h4>
            </div>
            <div class="form-group">
                <!-- 1-3 Mata Kuliah 3-5 -->
                <div class="row mb-5">
                    <div class="col">
                        <table class="table table-striped">
                            <thead style="background-color: #2C5CD6; color:white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mata Kuliah</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody id="td">
                                <?php $i = 1; ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kalkulus</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="kalkulus_1">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kalkulus_1'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Struktur Data</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_struktur_data">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_struktur_data'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Etika Profesi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="etika_profesi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['etika_profesi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Interpersonal Skill</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="interpersonal_skill">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['interpersonal_skill'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kewirausahaan</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="kewirausahaan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kewirausahaan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Basis Data</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="basis_data">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['basis_data'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="rekayasa_perangkat_lunak">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['rekayasa_perangkat_lunak'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Akuntansi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="akuntansi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['akuntansi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Interner B. Java</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_interner_bjava">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_interner_bjava'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Jaringan Komputer</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="jaringan_komputer">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['jaringan_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Enterprise Res. Planning</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="enterprise_res_planning">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['enterprise_res_planning'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Anal. Desain Berorientasi Objek</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="anal_desain_berorientasi_o">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['anal_desain_berorientasi_o'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Metodologi Penelitian</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="metodologi_penelitian">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['metodologi_penelitian'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pengaman Jaringan</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pengaman_jaringan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pengaman_jaringan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Interaksi Manusia Komputer</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="interaksi_manusia_komputer">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['interaksi_manusia_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Komputer Masyarakat</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="komputer_masyarakat">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['komputer_masyarakat'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Praktikum Jaringan Komputer</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="praktikum_jaringan_komputer">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['praktikum_jaringan_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Berbasis Pengetahuan</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_berbasis_pengetahuan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_berbasis_pengetahuan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kewarganegaraan</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="kewarganegaraan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kewarganegaraan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Pendukung Keputusann</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_pendukung_keputusan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_pendukung_keputusan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Aljabar Linier Matrik</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="aljabar_linier_matrik">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['aljabar_linier_matrik'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Struktur Query Language</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="struktur_query_language">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['struktur_query_language'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Akuntansi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_akuntansi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_akuntansi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Statistik Komputasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="statistik_komputasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['statistik_komputasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Struktur Data</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="struktur_data">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['struktur_data'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Operasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_operasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_operasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Manajemen Sains</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="manajemen_sains">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['manajemen_sains'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Database Administrator</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="database_administrator">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['database_administrator'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Analisa Sistem Informasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="analisa_sistem_informasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['analisa_sistem_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Bahasa Pemrograman</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_bahasa_pemrograman">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_bahasa_pemrograman'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pengantar Teknologi Informasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pengantar_teknologi_informasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pengantar_teknologi_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Inggris 1</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_inggris_1">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_inggris_1'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Pemrograman</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_pemrograman">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_pemrograman'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Logika dan Algoritma</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="logika_dan_algoritma">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['logika_dan_algoritma'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pengetahuan Bisnis</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pengetahuan_bisnis">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pengetahuan_bisnis'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Manajemen</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_manajemen">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_manajemen'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Analisa Proses Bisnis</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="analisa_proses_bisnis">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['analisa_proses_bisnis'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Agama</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="agama">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['agama'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Inggris 2</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_inggris_2">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_inggris_2'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Widya Mwat Yasa</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="widya_mwat_yasa">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['widya_mwat_yasa'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Struktur Query Language</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_struktur_query_language">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_struktur_query_language'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt Pemrograman SI</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_pemrograman_si">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_pemrograman_si'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Supply Chain Manajemen</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="supply_chain_manajemen">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['supply_chain_manajemen'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Data Warehouse dan Olap</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="data_warehouse_dan_olap">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['data_warehouse_dan_olap'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Proyek Pengemb. SI</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="proyek_pengemb_si">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['proyek_pengemb_si'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Customer Relationship Manaj.</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="customer_relationship_manaj">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['customer_relationship_manaj'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Anal. Desain B. Obyek</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_anal_desain_b_obyek">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_anal_desain_b_obyek'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Testing & Implementasi Sistem</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="testing_dan_implementasi_sistem">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['testing_dan_implementasi_sistem'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Audit Sistem Informasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="audit_sistem_informasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['audit_sistem_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Berorientasi Obyek</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_berorientasi_obyek">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_berorientasi_obyek'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Mobile Teknologi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="mobile_teknologi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['mobile_teknologi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pendidikan Pancasila</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pendidikan_pancasila">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pendidikan_pancasila'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kecakapan Pribadi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="kecakapan_pribadi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kecakapan_pribadi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Pemrograman 2</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_pemrograman_2">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_pemrograman_2'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Manajemen Sistem Operasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="manajemen_sistem_operasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['manajemen_sistem_operasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Desain dan Manajemen Jaringan</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="desain_dan_manajemen_jaringan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['desain_dan_manajemen_jaringan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Analisis Desain Terstruktur</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="analisis_desain_terstruktur">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['analisis_desain_terstruktur'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Desktop</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_desktop">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_desktop'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Web</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_web">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_web'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Keamanan Sistem Informasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="keamanan_sistem_informasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['keamanan_sistem_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Etika Komputer</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="etika_komputer">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['etika_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Mobile</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_mobile">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_mobile'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Tata Kelola Tekn. Informasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="tata_kelola_tekn_informasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['tata_kelola_tekn_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Terintegrasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_terintegrasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_terintegrasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Eksekutif</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_eksekutif">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_eksekutif'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Geografis</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_geografis">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_geografis'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemodelan dan Simulasi</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pemodelan_dan_simulasi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemodelan_dan_simulasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Indonesia</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_indonesia">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_indonesia'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bela Negara</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="bela_negara">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bela_negara'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kepemimpinan</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="kepemimpinan">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kepemimpinan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kuliah Kerja Nyata</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="kuliah_kerja_nyata">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kuliah_kerja_nyata'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Praktek Kerja Lapang</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="praktek_kerja_lapang">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['praktek_kerja_lapang'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pra Tugas Akhir</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="pra_tugas_akhir">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pra_tugas_akhir'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Skripsi/Tugas Akhir</td>
                                    <td>
                                        <select class="selectpicker btn btn-dark dropdown-toggle" name="skripsi">
                                            <option value="">Pilih</option>
                                            <?php foreach ($grade as $g) : ?>
                                                <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['skripsi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-success btn-lg"> Simpan </button>
                </center>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>