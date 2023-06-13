    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/tahunakademik/edit/' . $tahun_akademik['tahun_akademik_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Tahun</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tahun" class="form-control" name="tahun" value="<?= $tahun_akademik['tahun'] ?>" placeholder="Tahun akademik">
                                            <?= form_error('tahun') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Batas Registrasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="batas_registrasi" class="form-control" name="batas_registrasi" value="<?= $tahun_akademik['batas_registrasi'] ?>" placeholder="Batas registrasi tahun akademik">
                                            <?= form_error('batas_registrasi') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="keterangan">
                                                <option value="1" <?= $tahun_akademik['keterangan'] == 1 ? 'selected' : ''  ?>>Semester Ganjil</option>
                                                <option value="2" <?= $tahun_akademik['keterangan'] == 2 ? 'selected' : ''  ?>>Semester Genap</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="status">
                                                <option value="y" <?= $tahun_akademik['status'] == 'y' ? 'selected' : '' ?>>Aktif</option>
                                                <option value="n" <?= $tahun_akademik['status'] == 'n' ? 'selected' : '' ?>>Tidak Aktif</option>
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