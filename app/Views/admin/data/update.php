<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div id="detail-alumni" class="signup-form">
    <div class="col-auto">
        <form action="/nilai/update/<?= $nilai['id_nilai']; ?>" method="POST">
            <h2>Data Nilai Alumni</h2>

            <img class="foto-alumni" src="/img/<?= $nilai['fotoalumni']; ?>">

            <h4 id="heading-data-diri"><?= $nilai['nama']; ?></h4>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">NPM</label>
                        <!-- <input type="text" class="form-control" name="npm" placeholder="</?= $alumni['npm']; ?>" required="required" disabled> -->
                        <input type="text" class="form-control" name="npm" placeholder="<?= $nilai['npm']; ?>" required="required" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">IPK</label>
                        <!-- <input type="text" class="form-control" name="ipk" placeholder="</?= $alumni['ipk']; ?>" required="required" disabled> -->
                        <input type="text" class="form-control" name="ipk" placeholder="<?= $nilai['ipk']; ?>" required="required" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Masuk</label>
                        <!-- <input type="text" class="form-control" name="tahun_masuk" placeholder="</?= $alumni['thmasuk']; ?>" required="required" disabled> -->
                        <input type="text" class="form-control" name="tahun_masuk" placeholder="<?= $nilai['thmasuk']; ?>" required="required" disabled>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni">Tahun Lulus</label>
                        <!-- <input type="text" class="form-control" name="tahun_lulus" placeholder="</?= $alumni['thlulus']; ?>" required="required" disabled> -->
                        <input type="text" class="form-control" name="tahun_lulus" placeholder="<?= $nilai['thlulus']; ?>" required="required" disabled>
                    </div>
                </div>
            </div>
            <hr>
            <div class="histori my-4">
                <h4 id="heading-medsos">Input Nilai Alumni</h4>
            </div>
            <div class="form-group">
                <!-- 1-3 Mata Kuliah 3-5 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">1. Kalkulus 1</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="kalkulus_1">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kalkulus_1'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">2. Prakt. Struktur Data</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_struktur_data">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_struktur_data'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">3. Etika Profesi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="etika_profesi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['etika_profesi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 4-6 Mata Kuliah 6-8 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">4. Interpersonal Skill</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="interpersonal_skill">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['interpersonal_skill'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">5. Kewirausahaan</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="kewirausahaan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kewirausahaan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">6. Basis Data</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="basis_data">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['basis_data'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 7-9 Mata Kuliah 9-11 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">7. Rekayasa Perangkat Lunak </label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="rekayasa_perangkat_lunak">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['rekayasa_perangkat_lunak'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">8. Akuntansi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="akuntansi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['akuntansi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">9. Pemrograman Interner B. Java</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_interner_bjava">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_interner_bjava'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 10-12 Mata Kuliah 12-14 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">10. Jaringan Komputer </label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="jaringan_komputer">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['jaringan_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">11. Enterprise Res. Planning</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="enterprise_res_planning">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['enterprise_res_planning'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">12. Anal. Desain Berorientasi Objek</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="anal_desain_berorientasi_o">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['anal_desain_berorientasi_o'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 13-15 Mata Kuliah 15-17 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">13. Metodologi Penelitian </label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="metodologi_penelitian">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['metodologi_penelitian'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">14. Pengaman Jaringan</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pengaman_jaringan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pengaman_jaringan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">15. Interaksi Manusia Komputer</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="interaksi_manusia_komputer">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['interaksi_manusia_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 16-18 Mata Kuliah 18-20 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">16. Komputer & Masyarakat </label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="komputer_masyarakat">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['komputer_masyarakat'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">17. Praktikum Jaringan Komputer</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="praktikum_jaringan_komputer">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['praktikum_jaringan_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">18. Sistem Berbasis Pengetahuan</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_berbasis_pengetahuan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_berbasis_pengetahuan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 19-21 Mata Kuliah 21-23 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">19. Kewarganegaraan </label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="kewarganegaraan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kewarganegaraan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">20. Sistem Pendukung Keputusan</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_pendukung_keputusan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_pendukung_keputusan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">21. Aljabar Linier Matrik</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="aljabar_linier_matrik">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['aljabar_linier_matrik'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 22-24 Mata Kuliah 24-26 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">22. Analisa Sistem Informasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_struktur_data">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['analisa_sistem_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">23. Struktur Query Language</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="struktur_query_language">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['struktur_query_language'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">24. Sistem Informasi Akuntansi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_akuntansi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_akuntansi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 25-27 Mata Kuliah 27-29 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">25. Statistik Komputasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="statistik_komputasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['statistik_komputasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">26. Struktur Data</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="struktur_data">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['struktur_data'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">27. Sistem Operasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_operasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_operasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 28-30 Mata Kuliah 30-32 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">28. Manajemen Sains</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="manajemen_sains">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['manajemen_sains'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">29. Database Administrator</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="database_administrator">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['database_administrator'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">30. Prakt. Bahasa Pemrograman</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_bahasa_pemrograman">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_bahasa_pemrograman'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 31-33 Mata Kuliah 33-35 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">31. Pengantar Teknologi Informasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pengantar_teknologi_informasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pengantar_teknologi_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">32. Bahasa Inggris 1</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_inggris_1">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_inggris_1'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">33. Bahasa Pemrograman</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_pemrograman">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_pemrograman'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 34-36 Mata Kuliah 36-38 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">34. Logika dan Algoritma</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="logika_dan_algoritma">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['logika_dan_algoritma'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">35. Pengetahuan Bisnis</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pengetahuan_bisnis">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pengetahuan_bisnis'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">36. Sistem Informasi Manajemen</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_manajemen">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_manajemen'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 37-39 Mata Kuliah 39-41 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">37. Analisa Proses Bisnis</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="analisa_proses_bisnis">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['analisa_proses_bisnis'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bolder;">38. Pendidikan Agama </label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="agama">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['agama'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">39. Bahasa Inggris 2</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_inggris_2">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_inggris_2'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 40-42 Mata Kuliah 42-44 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">40. Widya Mwat Yasa</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="widya_mwat_yasa">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['widya_mwat_yasa'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">41. Prakt. Struktur Query Language</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_struktur_query_language">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_struktur_query_language'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">42. Prakt. Pemrograman SI</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_pemrograman_si">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_pemrograman_si'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 43-45 Mata Kuliah 45-47 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">43. Supply Chain Manajemen</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="supply_chain_manajemen">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['supply_chain_manajemen'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">42. Data Warehouse & Olap</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="data_warehouse_dan_olap">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['data_warehouse_dan_olap'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">43. Proyek Pengemb. SI</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="proyek_pengemb_si">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['proyek_pengemb_si'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 46-48 Mata Kuliah 48-50 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">46. Customer Relationship Manaj.</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="customer_relationship_manaj">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['customer_relationship_manaj'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">48. Prakt. Anal. Desain B. Obyek</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="prakt_anal_desain_b_obyek">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['prakt_anal_desain_b_obyek'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 49-51 Mata Kuliah 51-53 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">49. Testing & Implementasi Sistem</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="testing_dan_implementasi_sistem">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['testing_dan_implementasi_sistem'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">50. Audit Sistem Informasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="audit_sistem_informasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['audit_sistem_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">51. Pemrograman Berorientasi Obyek</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_berorientasi_obyek">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_berorientasi_obyek'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 52-54 Mata Kuliah 54-56 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">52. Mobile Teknologi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="mobile_teknologi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['mobile_teknologi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">53. Pendidikan Pancasila</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pendidikan_pancasila">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pendidikan_pancasila'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">54. Kecakapan Pribadi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="kecakapan_pribadi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kecakapan_pribadi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 55-57 Mata Kuliah 57-59 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">55. Bahasa Pemrograman 2</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_pemrograman_2">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_pemrograman_2'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">56. Manajemen Sistem Operasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="manajemen_sistem_operasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['manajemen_sistem_operasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">57. Desain dan Manajemen Jaringan</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="desain_dan_manajemen_jaringan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['desain_dan_manajemen_jaringan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 58-60 Mata Kuliah 60-62 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">58. Analisis Desain Terstruktur</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="analisis_desain_terstruktur">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['analisis_desain_terstruktur'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">59. Pemrograman Desktop</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_desktop">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_desktop'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">60. Pemrograman Web</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_web">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_web'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 61-63 Mata Kuliah 63-65 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">61. Keamanan Sistem Informasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="keamanan_sistem_informasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['keamanan_sistem_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">62. Etika Komputer</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="etika_komputer">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['etika_komputer'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">63. Pemrograman Mobile</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_mobile">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_mobile'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 64-66 Mata Kuliah 66-68 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">64. Tata Kelola Tekn. Informasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="tata_kelola_tekn_informasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['tata_kelola_tekn_informasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">65. Pemrograman Terintegrasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemrograman_terintegrasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemrograman_terintegrasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">66. Sistem Informasi Eksekutif</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_eksekutif">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_eksekutif'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 67-69 Mata Kuliah 69-71 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">67. Sistem Informasi Geografis</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="sistem_informasi_geografis">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['sistem_informasi_geografis'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">68. Pemodelan dan Simulasi</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pemodelan_dan_simulasi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pemodelan_dan_simulasi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">69. Bahasa Indonesia</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="bahasa_indonesia">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bahasa_indonesia'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 70-72 Mata Kuliah 72-74 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">70. Bela Negara</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="bela_negara">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['bela_negara'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">71. Kepemimpinan</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="kepemimpinan">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kepemimpinan'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">72. Kuliah Kerja Nyata</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="kuliah_kerja_nyata">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['kuliah_kerja_nyata'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- 73-75 Mata Kuliah 75-77 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">73. Praktek Kerja Lapang</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="praktek_kerja_lapang">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['praktek_kerja_lapang'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">74. Pra Tugas Akhir</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="pra_tugas_akhir">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['pra_tugas_akhir'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">75. Skripsi/Tugas Akhir</label>
                        <div class="btn-group">
                            <select class="selectpicker btn btn-dark dropdown-toggle" name="skripsi">
                                <option value="">Pilih</option>
                                <?php foreach ($grade as $g) : ?>
                                    <option value="<?= $g['grade']; ?>" <?= $g['grade'] == $nilai['skripsi'] ? 'selected' : null; ?>><?= $g['grade']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <button id="SimpanData" type="submit" class="btn btn-success btn-lg"> Simpan </button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>