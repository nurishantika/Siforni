<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div id="detail-alumni" class="signup-form">
    <div class="col-auto">
        <form>
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
                <h4 id="heading-medsos">Histori Nilai Alumni</h4>
            </div>
            <div class="form-group">
                <!-- 1-3 Mata Kuliah 3-5 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">1. Kalkulus 1</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['kalkulus_1']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">2. Prakt. Struktur Data</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['prakt_struktur_data']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">3. Etika Profesi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['etika_profesi']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 4-6 Mata Kuliah 6-8 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">4. Interpersonal Skill</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['interpersonal_skill']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">5. Kewirausahaan</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['kewirausahaan']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">6. Basis Data</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['basis_data']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 7-9 Mata Kuliah 9-11 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">7. Rekayasa Perangkat Lunak </label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['rekayasa_perangkat_lunak']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">8. Akuntansi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['akuntansi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">9. Pemrograman Interner B. Java</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemrograman_interner_bjava']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 10-12 Mata Kuliah 12-14 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">10. Jaringan Komputer </label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['jaringan_komputer']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">11. Enterprise Res. Planning</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['enterprise_res_planning']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">12. Anal. Desain Berorientasi Objek</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['anal_desain_berorientasi_o']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 13-15 Mata Kuliah 15-17 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">13. Metodologi Penelitian </label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['metodologi_penelitian']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">14. Pengaman Jaringan</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pengaman_jaringan']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">15. Interaksi Manusia Komputer</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['interaksi_manusia_komputer']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 16-18 Mata Kuliah 18-20 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">16. Komputer & Masyarakat </label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['komputer_masyarakat']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">17. Praktikum Jaringan Komputer</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['praktikum_jaringan_komputer']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">18. Sistem Berbasis Pengetahuan</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_berbasis_pengetahuan']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 19-21 Mata Kuliah 21-23 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">19. Kewarganegaraan </label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['kewarganegaraan']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">20. Sistem Pendukung Keputusan</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_pendukung_keputusan']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">21. Aljabar Linier Matrik</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['aljabar_linier_matrik']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 22-24 Mata Kuliah 24-26 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">22. Analisa Sistem Informasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['analisa_sistem_informasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">23. Struktur Query Language</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['struktur_query_language']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">24. Sistem Informasi Akuntansi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_informasi_akuntansi']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 25-27 Mata Kuliah 27-29 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">25. Statistik Komputasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['statistik_komputasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">26. Struktur Data</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['struktur_data']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">27. Sistem Operasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_operasi']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 28-30 Mata Kuliah 30-32 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">28. Manajemen Sains</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['manajemen_sains']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">29. Database Administrator</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['database_administrator']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">30. Prakt. Bahasa Pemrograman</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['prakt_bahasa_pemrograman']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 31-33 Mata Kuliah 33-35 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">31. Pengantar Teknologi Informasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pengantar_teknologi_informasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">32. Bahasa Inggris 1</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['bahasa_inggris_1']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">33. Bahasa Pemrograman</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['bahasa_pemrograman']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 34-36 Mata Kuliah 36-38 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">34. Logika dan Algoritma</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['logika_dan_algoritma']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">35. Pengetahuan Bisnis</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pengetahuan_bisnis']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">36. Sistem Informasi Manajemen</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_informasi_manajemen']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 37-39 Mata Kuliah 39-41 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">37. Analisa Proses Bisnis</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['analisa_proses_bisnis']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bolder;">38. Pendidikan Agama </label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['agama']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">39. Bahasa Inggris 2</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['bahasa_inggris_2']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 40-42 Mata Kuliah 42-44 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">40. Widya Mwat Yasa</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['widya_mwat_yasa']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">41. Prakt. Struktur Query Language</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['prakt_struktur_query_language']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">42. Prakt. Pemrograman SI</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['prakt_pemrograman_si']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 43-45 Mata Kuliah 45-47 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">43. Supply Chain Manajemen</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['supply_chain_manajemen']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">42. Data Warehouse & Olap</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['data_warehouse_dan_olap']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">43. Proyek Pengemb. SI</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['proyek_pengemb_si']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 46-48 Mata Kuliah 48-50 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">46. Customer Relationship Manaj.</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['customer_relationship_manaj']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">48. Prakt. Anal. Desain B. Obyek</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['prakt_anal_desain_b_obyek']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 49-51 Mata Kuliah 51-53 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">49. Testing & Implementasi Sistem</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['testing_dan_implementasi_sistem']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">50. Audit Sistem Informasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['audit_sistem_informasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">51. Pemrograman Berorientasi Obyek</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemrograman_berorientasi_obyek']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 52-54 Mata Kuliah 54-56 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">52. Mobile Teknologi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['mobile_teknologi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">53. Pendidikan Pancasila</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pendidikan_pancasila']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">54. Kecakapan Pribadi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['kecakapan_pribadi']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 55-57 Mata Kuliah 57-59 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">55. Bahasa Pemrograman 2</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['bahasa_pemrograman_2']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">56. Manajemen Sistem Operasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['manajemen_sistem_operasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">57. Desain dan Manajemen Jaringan</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['desain_dan_manajemen_jaringan']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 58-60 Mata Kuliah 60-62 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">58. Analisis Desain Terstruktur</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['analisis_desain_terstruktur']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">59. Pemrograman Desktop</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemrograman_desktop']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">60. Pemrograman Web</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemrograman_web']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 61-63 Mata Kuliah 63-65 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">61. Keamanan Sistem Informasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['keamanan_sistem_informasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">62. Etika Komputer</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['etika_komputer']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">63. Pemrograman Mobile</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemrograman_mobile']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 64-66 Mata Kuliah 66-68 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">64. Tata Kelola Tekn. Informasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['tata_kelola_tekn_informasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">65. Pemrograman Terintegrasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemrograman_terintegrasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">66. Sistem Informasi Eksekutif</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_informasi_eksekutif']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 67-69 Mata Kuliah 69-71 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">67. Sistem Informasi Geografis</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['sistem_informasi_geografis']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">68. Pemodelan dan Simulasi</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pemodelan_dan_simulasi']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">69. Bahasa Indonesia</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['bahasa_indonesia']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 70-72 Mata Kuliah 72-74 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">70. Bela Negara</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['bela_negara']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">71. Kepemimpinan</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['kepemimpinan']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">72. Kuliah Kerja Nyata</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['kuliah_kerja_nyata']; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- 73-75 Mata Kuliah 75-77 -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">73. Praktek Kerja Lapang</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['praktek_kerja_lapang']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">74. Pra Tugas Akhir</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['pra_tugas_akhir']; ?>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class="form-label-alumni" style="color: black; font-weight: bold;">75. Skripsi/Tugas Akhir</label>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary" aria-expanded="false" disabled>
                                <?= $nilai['skripsi']; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/nilai/create/<?= $nilai['id_nilai']; ?>" class="btn btn-warning" style="color: black;"> Edit Nilai </a>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>