    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/jadwalkuliah/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Hari</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="hari_id" name="hari_id">
                                                <option value="1">Senin</option>
                                                <option value="2">Selasa</option>
                                                <option value="3">Rabu</option>
                                                <option value="4">Kamis</option>
                                                <option value="5">Jumat</option>
                                                <option value="6">Sabtu</option>
                                                <option value="7">Minggu</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Mata Kuliah</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="makul_id" name="makul_id">
                                                <?php foreach ($makul as $item) : ?>
                                                    <option value="<?= $item['makul_id'] ?>">
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
                                                    <option value="<?= $item['tahun_akademik_id'] ?>">
                                                        <?= $item['tahun'] ?> <?= $item['keterangan'] % 2 == 0 ? 'Ganjil' : 'Genap' ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Ruangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="ruangan_id" class="form-control" name="ruangan_id" value="<?= set_value('ruangan_id') ?>" placeholder="">
                                            <?= form_error('ruangan_id') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dosen</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="dosen_id" class="form-control" name="dosen_id" value="<?= set_value('dosen_id') ?>" placeholder="">
                                            <?= form_error('dosen_id') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jam Mulai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="time" id="jam_mulai" class="form-control" name="jam_mulai" value="<?= set_value('jam_mulai') ?>" placeholder="">
                                            <?= form_error('jam_mulai') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jam Selesai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="time" id="jam_selesai" class="form-control" name="jam_selesai" value="<?= set_value('jam_selesai') ?>" placeholder="">
                                            <?= form_error('jam_selesai') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="semester">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
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