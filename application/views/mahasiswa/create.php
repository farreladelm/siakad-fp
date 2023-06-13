    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('mahasiswa/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Nomor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="mahasiswa_id" class="form-control" name="mahasiswa_id" placeholder="Nomor Urut Data">
                                        </div>
                                        <div class="col-md-4">
                                            <label>NIM</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nim" class="form-control" name="nim" placeholder="NIM">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Mahasiswa</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Konsentrasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="konsentrasi_id" class="form-control" name="konsentrasi_id" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Angkatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="angkatan" class="form-control" name="angkatan" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat" class="form-control" name="alamat" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="semester" class="form-control" name="semester" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="gender">
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Agama</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="agama">
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
                                            <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_ibu" class="form-control" name="nama_ibu" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_ayah" class="form-control" name="nama_ayah" placeholder="Alamat Lengkap">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. HP Orang Tua</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="no_hp_ortu" class="form-control" name="no_hp_ortu" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="pekerjaan_ibu" class="form-control" name="pekerjaan_ibu" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="pekerjaan_ayah" class="form-control" name="pekerjaan_ayah" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat_ayah" class="form-control" name="alamat_ayah" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat_ibu" class="form-control" name="alamat_ibu" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan Ayah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="penghasilan_ayah" class="form-control" name="penghasilan_ayah" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan Ibu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="penghasilan_ibu" class="form-control" name="penghasilan_ibu" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_nama" class="form-control" name="sekolah_nama" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_telpon" class="form-control" name="sekolah_telpon" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_alamat" class="form-control" name="sekolah_alamat" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jurusan Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_jurusan" class="form-control" name="sekolah_jurusan" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun Lulus Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sekolah_tahun_lulus" class="form-control" name="sekolah_tahun_lulus" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_nama" class="form-control" name="kampus_nama" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_telpon" class="form-control" name="kampus_telpon" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_alamat" class="form-control" name="kampus_alamat" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jurusan Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_jurusan" class="form-control" name="kampus_jurusan" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun Lulus Kampus</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kampus_tahun_lulus" class="form-control" name="kampus_tahun_lulus" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama institusi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="institusi_nama" class="form-control" name="institusi_nama" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon institusi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="institusi_telpon" class="form-control" name="institusi_telpon" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat institusi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="institusi_alamat" class="form-control" name="institusi_alamat" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_nama" class="form-control" name="instansi_nama" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telepon instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_telpon" class="form-control" name="instansi_telpon" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_alamat" class="form-control" name="instansi_alamat" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mulai Instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_mulai" class="form-control" name="instansi_mulai" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Sampai Instansi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="instansi_sampai" class="form-control" name="instansi_sampai" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Semester Aktif</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="semester_aktif" class="form-control" name="semester_aktif" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="password" class="form-control" name="password" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
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