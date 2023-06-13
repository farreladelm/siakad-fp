    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/jadwalkuliah/edit/' . $jadwal['jadwal_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Hari</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="hari_id" name="hari_id">
                                                <option value="1" <?= $jadwal['hari_id'] == '1' ? 'selected' : '' ?>>Senin</option>
                                                <option value="2" <?= $jadwal['hari_id'] == '2' ? 'selected' : '' ?>>Selasa</option>
                                                <option value="3" <?= $jadwal['hari_id'] == '3' ? 'selected' : '' ?>>Rabu</option>
                                                <option value="4" <?= $jadwal['hari_id'] == '4' ? 'selected' : '' ?>>Kamis</option>
                                                <option value="5" <?= $jadwal['hari_id'] == '5' ? 'selected' : '' ?>>Jumat</option>
                                                <option value="6" <?= $jadwal['hari_id'] == '6' ? 'selected' : '' ?>>Sabtu</option>
                                                <option value="7" <?= $jadwal['hari_id'] == '7' ? 'selected' : '' ?>>Minggu</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Mata Kuliah</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="makul_id" name="makul_id">
                                                <?php foreach ($makul as $item) : ?>
                                                    <option value="<?= $item['makul_id'] ?>" <?= $jadwal['makul_id'] == $item['makul_id'] ? 'selected' : '' ?>>
                                                        <?= $item['nama_makul'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Tahun Akademik</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="tahun_akademik_id" name="tahun_akademik_id">
                                                <?php foreach ($tahun_akademik as $item) : ?>
                                                    <option value="<?= $item['tahun_akademik_id'] ?>" <?= $jadwal['tahun_akademik_id'] == $item['tahun_akademik_id'] ? 'selected' : '' ?>>
                                                        <?= $item['tahun'] ?> <?= $item['keterangan'] % 2 == 0 ? 'Ganjil' : 'Genap' ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Dosen</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="dosen_id" name="dosen_id">
                                                <?php foreach ($dosen as $item) : ?>
                                                    <option value="<?= $item['dosen_id'] ?>" <?= $jadwal['dosen_id'] == $item['dosen_id'] ? 'selected' : '' ?>>
                                                        <?= $item['nama_lengkap'] ?> - <?= $prodi[$item['prodi_id']] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Ruangan</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="ruangan_id" name="ruangan_id">
                                                <?php foreach ($ruangan as $item) : ?>
                                                    <option value="<?= $item['ruangan_id'] ?>" <?= $jadwal['ruangan_id'] == $item['ruangan_id'] ? 'selected' : '' ?>>
                                                        <?= $item['nama_ruangan'] ?> - <?= $item['keterangan'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Jam Mulai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="time" id="jam_mulai" class="form-control" name="jam_mulai" value="<?= $jadwal['jam_mulai'] ?>" placeholder="">
                                            <?= form_error('jam_mulai') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jam Selesai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="time" id="jam_selesai" class="form-control" name="jam_selesai" value="<?= $jadwal['jam_selesai'] ?>" placeholder="">
                                            <?= form_error('jam_selesai') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="semester">
                                                <option value="1" <?= $jadwal['semester'] == '1' ? 'selected' : '' ?>>1</option>
                                                <option value="2" <?= $jadwal['semester'] == '2' ? 'selected' : '' ?>>2</option>
                                                <option value="3" <?= $jadwal['semester'] == '3' ? 'selected' : '' ?>>3</option>
                                                <option value="4" <?= $jadwal['semester'] == '4' ? 'selected' : '' ?>>4</option>
                                                <option value="5" <?= $jadwal['semester'] == '5' ? 'selected' : '' ?>>5</option>
                                                <option value="6" <?= $jadwal['semester'] == '6' ? 'selected' : '' ?>>6</option>
                                                <option value="7" <?= $jadwal['semester'] == '7' ? 'selected' : '' ?>>7</option>
                                                <option value="8" <?= $jadwal['semester'] == '8' ? 'selected' : '' ?>>8</option>
                                            </select>
                                        </fieldset>
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