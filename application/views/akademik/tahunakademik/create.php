    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/tahunakademik/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Tahun</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tahun" class="form-control" name="tahun" value="<?= set_value('tahun') ?>" placeholder="Tahun akademik">
                                            <?= form_error('tahun') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Batas Registrasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="batas_registrasi" class="form-control" name="batas_registrasi" value="<?= set_value('batas_registrasi') ?>" placeholder="Batas registrasi tahun akademik">
                                            <?= form_error('batas_registrasi') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="keterangan" value="<?= set_value('keterangan') ?>">
                                                <option value="1" <?= set_value('keterangan') == '1' ? 'selected' : '' ?>>Semester Ganjil</option>
                                                <option value="2" <?= set_value('keterangan') == '2' ? 'selected' : '' ?>>Semester Genap</option>
                                            </select>
                                            <?= form_error('keterangan') ?>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="status" value="<?= set_value('status') ?>">
                                                <option value="y">Aktif</option>
                                                <option value="n">Tidak Aktif</option>
                                                <?= form_error('status') ?>
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