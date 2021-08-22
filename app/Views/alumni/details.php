<?= $this->extend('alumni/template'); ?>

<?= $this->section('content'); ?>

<div id="detail-alumni" class="signup-form">
    <div class="col-auto">
        <form>
            <h2 id="head-card">Data Nilai Alumni</h2>

            <img class="foto-alumni" src="/img/<?= $nilai['fotoalumni']; ?>">
            <center>
                <h4 id="heading-data-diri" style="color: black;"><?= $nilai['nama']; ?></h4>
            </center>

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
                <center>
                    <h4 style="color: black;" id="heading-medsos">Histori Nilai Alumni</h4>
                </center>
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
                            <tbody style="color: black;">
                                <?php $i = 1; ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kalkulus</td>
                                    <td><?= $nilai['kalkulus_1']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Struktur Data</td>
                                    <td><?= $nilai['prakt_struktur_data']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Etika Profesi</td>
                                    <td><?= $nilai['etika_profesi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Interpersonal Skill</td>
                                    <td><?= $nilai['interpersonal_skill']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kewirausahaan</td>
                                    <td><?= $nilai['kewirausahaan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Basis Data</td>
                                    <td><?= $nilai['basis_data']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td><?= $nilai['rekayasa_perangkat_lunak']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Akuntansi</td>
                                    <td><?= $nilai['akuntansi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Interner B. Java</td>
                                    <td><?= $nilai['pemrograman_interner_bjava']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Jaringan Komputer</td>
                                    <td><?= $nilai['jaringan_komputer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Enterprise Res. Planning</td>
                                    <td><?= $nilai['enterprise_res_planning']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Anal. Desain Berorientasi Objek</td>
                                    <td><?= $nilai['anal_desain_berorientasi_o']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Metodologi Penelitian</td>
                                    <td><?= $nilai['metodologi_penelitian']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pengaman Jaringan</td>
                                    <td><?= $nilai['pengaman_jaringan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Interaksi Manusia Komputer</td>
                                    <td><?= $nilai['interaksi_manusia_komputer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Komputer Masyarakat</td>
                                    <td><?= $nilai['komputer_masyarakat']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Praktikum Jaringan Komputer</td>
                                    <td><?= $nilai['praktikum_jaringan_komputer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Berbasis Pengetahuan</td>
                                    <td><?= $nilai['sistem_berbasis_pengetahuan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kewarganegaraan</td>
                                    <td><?= $nilai['kewarganegaraan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Pendukung Keputusann</td>
                                    <td><?= $nilai['sistem_pendukung_keputusan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Aljabar Linier Matrik</td>
                                    <td><?= $nilai['aljabar_linier_matrik']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Analisa Sistem Informasi</td>
                                    <td><?= $nilai['analisa_sistem_informasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Struktur Query Language</td>
                                    <td><?= $nilai['struktur_query_language']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Akuntansi</td>
                                    <td><?= $nilai['sistem_informasi_akuntansi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Statistik Komputasi</td>
                                    <td><?= $nilai['statistik_komputasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Struktur Data</td>
                                    <td><?= $nilai['struktur_data']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Operasi</td>
                                    <td><?= $nilai['sistem_operasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Manajemen Sains</td>
                                    <td><?= $nilai['manajemen_sains']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Database Administrator</td>
                                    <td><?= $nilai['database_administrator']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Bahasa Pemrograman</td>
                                    <td><?= $nilai['prakt_bahasa_pemrograman']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pengantar Teknologi Informasi</td>
                                    <td><?= $nilai['pengantar_teknologi_informasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Inggris 1</td>
                                    <td><?= $nilai['bahasa_inggris_1']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Pemrograman</td>
                                    <td><?= $nilai['bahasa_pemrograman']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Logika dan Algoritma</td>
                                    <td><?= $nilai['logika_dan_algoritma']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pengetahuan Bisnis</td>
                                    <td><?= $nilai['pengetahuan_bisnis']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Manajemen</td>
                                    <td><?= $nilai['sistem_informasi_manajemen']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Analisa Proses Bisnis</td>
                                    <td><?= $nilai['analisa_proses_bisnis']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Agama</td>
                                    <td><?= $nilai['agama']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Inggris 2</td>
                                    <td><?= $nilai['bahasa_inggris_2']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Widya Mwat Yasa</td>
                                    <td><?= $nilai['widya_mwat_yasa']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Struktur Query Language</td>
                                    <td><?= $nilai['prakt_struktur_query_language']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt Pemrograman SI</td>
                                    <td><?= $nilai['prakt_pemrograman_si']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Supply Chain Manajemen</td>
                                    <td><?= $nilai['supply_chain_manajemen']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Data Warehouse dan Olap</td>
                                    <td><?= $nilai['data_warehouse_dan_olap']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Proyek Pengemb. SI</td>
                                    <td><?= $nilai['proyek_pengemb_si']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Customer Relationship Manaj.</td>
                                    <td><?= $nilai['customer_relationship_manaj']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Prakt. Anal. Desain B. Obyek</td>
                                    <td><?= $nilai['prakt_anal_desain_b_obyek']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Testing & Implementasi Sistem</td>
                                    <td><?= $nilai['testing_dan_implementasi_sistem']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Audit Sistem Informasi</td>
                                    <td><?= $nilai['audit_sistem_informasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Berorientasi Obyek</td>
                                    <td><?= $nilai['pemrograman_berorientasi_obyek']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Mobile Teknologi</td>
                                    <td><?= $nilai['mobile_teknologi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pendidikan Pancasila</td>
                                    <td><?= $nilai['pendidikan_pancasila']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kecakapan Pribadi</td>
                                    <td><?= $nilai['kecakapan_pribadi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Pemrograman 2</td>
                                    <td><?= $nilai['bahasa_pemrograman_2']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Manajemen Sistem Operasi</td>
                                    <td><?= $nilai['manajemen_sistem_operasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Desain dan Manajemen Jaringan</td>
                                    <td><?= $nilai['desain_dan_manajemen_jaringan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Analisis Desain Terstruktur</td>
                                    <td><?= $nilai['analisis_desain_terstruktur']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Desktop</td>
                                    <td><?= $nilai['pemrograman_desktop']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Web</td>
                                    <td><?= $nilai['pemrograman_web']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Keamanan Sistem Informasi</td>
                                    <td><?= $nilai['keamanan_sistem_informasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Etika Komputer</td>
                                    <td><?= $nilai['etika_komputer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Mobile</td>
                                    <td><?= $nilai['pemrograman_mobile']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Tata Kelola Tekn. Informasi</td>
                                    <td><?= $nilai['tata_kelola_tekn_informasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemrograman Terintegrasi</td>
                                    <td><?= $nilai['pemrograman_terintegrasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Eksekutif</td>
                                    <td><?= $nilai['sistem_informasi_eksekutif']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Sistem Informasi Geografis</td>
                                    <td><?= $nilai['sistem_informasi_geografis']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pemodelan dan Simulasi</td>
                                    <td><?= $nilai['pemodelan_dan_simulasi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bahasa Indonesia</td>
                                    <td><?= $nilai['bahasa_indonesia']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Bela Negara</td>
                                    <td><?= $nilai['bela_negara']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kepemimpinan</td>
                                    <td><?= $nilai['kepemimpinan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Kuliah Kerja Nyata</td>
                                    <td><?= $nilai['kuliah_kerja_nyata']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Praktek Kerja Lapang</td>
                                    <td><?= $nilai['praktek_kerja_lapang']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Pra Tugas Akhir</td>
                                    <td><?= $nilai['pra_tugas_akhir']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td>Skripsi/Tugas Akhir</td>
                                    <td><?= $nilai['skripsi']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>