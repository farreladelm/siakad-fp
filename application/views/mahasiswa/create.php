    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('mahasiswa/create') ?>" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>NIM</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nim" class="form-control" name="nim" value="<?= set_value('nim') ?>" placeholder="NIM">
                                            <?= form_error('nim') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Mahasiswa</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama" class="form-control" name="nama" value="<?= set_value('nama') ?>" placeholder="Nama Lengkap">
                                            <?= form_error('nama') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Konsentrasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="konsentrasi_id" class="form-control" name="konsentrasi_id" value="<?= set_value('konsentrasi_id') ?>" placeholder="">
                                            <?= form_error('konsentrasi_id') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Angkatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="angkatan" class="form-control" name="angkatan" value="<?= set_value('angkatan') ?>" placeholder="">
                                            <?= form_error('angkatan') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat" class="form-control" name="alamat" value="<?= set_value('alamat') ?>" placeholder="">
                                            <?= form_error('alamat') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="semester" class="form-control" name="semester" value="<?= set_value('semester') ?>" placeholder="">
                                            <?= form_error('semester') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="gender" value="<?= set_value('gender') ?>">
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Agama</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="agama" value="<?= set_value('agama') ?>">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghuchu">Konghuchu</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Tempat Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" placeholder="">
                                            <?= form_error('tempat_lahir') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" placeholder="">
                                            <?= form_error('tanggal_lahir') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_ibu" class="form-control" name="nama_ibu" value="<?= set_value('nama_ibu') ?>" placeholder="">
                                            <?= form_error('nama_ibu') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_ayah" class="form-control" name="nama_ayah" value="<?= set_value('nama_ayah') ?>" placeholder="Alamat Lengkap">
                                            <?= form_error('nama_ayah') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. HP Orang Tua</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="no_hp_ortu" class="form-control" name="no_hp_ortu" value="<?= set_value('no_hp_ortu') ?>" placeholder="">
                                            <?= form_error('no_hp_ortu') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="pekerjaan_ibu" class="form-control" name="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu') ?>" placeholder="">
                                            <?= form_error('pekerjaan_ibu') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="pekerjaan_ayah" class="form-control" name="pekerjaan_ayah" value="<?= set_value('pekerjaan_ayah') ?>" placeholder="">
                                            <?= form_error('pekerjaan_ayah') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat_ayah" class="form-control" name="alamat_ayah" value="<?= set_value('alamat_ayah') ?>" placeholder="">
                                            <?= form_error('alamat_ayah') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat_ibu" class="form-control" name="alamat_ibu" value="<?= set_value('alamat_ibu') ?>" placeholder="">
                                            <?= form_error('alamat_ibu') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="penghasilan_ayah" class="form-control" name="penghasilan_ayah" value="<?= set_value('penghasilan_ayah') ?>" placeholder="">
                                            <?= form_error('penghasilan_ayah') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="penghasilan_ibu" class="form-control" name="penghasilan_ibu" value="<?= set_value('penghasilan_ibu') ?>" placeholder="">
                                            <?= form_error('penghasilan_ibu') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_nama" class="form-control" name="sekolah_nama" value="<?= set_value('sekolah_nama') ?>" placeholder="">
                                            <?= form_error('sekolah_nama') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_telpon" class="form-control" name="sekolah_telpon" value="<?= set_value('sekolah_telpon') ?>" placeholder="">
                                            <?= form_error('sekolah_telpon') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_alamat" class="form-control" name="sekolah_alamat" value="<?= set_value('sekolah_alamat') ?>" placeholder="">
                                            <?= form_error('sekolah_alamat') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jurusan Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_jurusan" class="form-control" name="sekolah_jurusan" value="<?= set_value('sekolah_jurusan') ?>" placeholder="">
                                            <?= form_error('sekolah_jurusan') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun Lulus Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_tahun_lulus" class="form-control" name="sekolah_tahun_lulus" value="<?= set_value('sekolah_tahun_lulus') ?>" placeholder="">
                                            <?= form_error('sekolah_tahun_lulus') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_nama" class="form-control" name="kampus_nama" value="<?= set_value('kampus_nama') ?>" placeholder="">
                                            <?= form_error('kampus_nama') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_telpon" class="form-control" name="kampus_telpon" value="<?= set_value('kampus_telpon') ?>" placeholder="">
                                            <?= form_error('kampus_telpon') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_alamat" class="form-control" name="kampus_alamat" value="<?= set_value('kampus_alamat') ?>" placeholder="">
                                            <?= form_error('kampus_alamat') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jurusan Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_jurusan" class="form-control" name="kampus_jurusan" value="<?= set_value('kampus_jurusan') ?>" placeholder="">
                                            <?= form_error('kampus_jurusan') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun Lulus Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_tahun_lulus" class="form-control" name="kampus_tahun_lulus" value="<?= set_value('kampus_tahun_lulus') ?>" placeholder="">
                                            <?= form_error('kampus_tahun_lulus') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama institusi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="institusi_nama" class="form-control" name="institusi_nama" value="<?= set_value('institusi_nama') ?>" placeholder="">
                                            <?= form_error('institusi_nama') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon institusi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="institusi_telpon" class="form-control" name="institusi_telpon" value="<?= set_value('institusi_telpon') ?>" placeholder="">
                                            <?= form_error('institusi_telpon') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat institusi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="institusi_alamat" class="form-control" name="institusi_alamat" value="<?= set_value('institusi_alamat') ?>" placeholder="">
                                            <?= form_error('institusi_alamat') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_nama" class="form-control" name="instansi_nama" value="<?= set_value('instansi_nama') ?>" placeholder="">
                                            <?= form_error('instansi_nama') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_telpon" class="form-control" name="instansi_telpon" value="<?= set_value('instansi_telpon') ?>" placeholder="">
                                            <?= form_error('instansi_telpon') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_alamat" class="form-control" name="instansi_alamat" value="<?= set_value('instansi_alamat') ?>" placeholder="">
                                            <?= form_error('instansi_alamat') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mulai Instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_mulai" class="form-control" name="instansi_mulai" value="<?= set_value('instansi_mulai') ?>" placeholder="">
                                            <?= form_error('instansi_mulai') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Sampai Instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_sampai" class="form-control" name="instansi_sampai" value="<?= set_value('instansi_sampai') ?>" placeholder="">
                                            <?= form_error('instansi_sampai') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Semester Aktif</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="semester_aktif" class="form-control" name="semester_aktif" value="<?= set_value('semester_aktif') ?>" placeholder="">
                                            <?= form_error('semester_aktif') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="">
                                            <?= form_error('password') ?>
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->