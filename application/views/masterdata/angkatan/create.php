    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('masterdata/angkatan/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Angkatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="angkatan_id" class="form-control" name="angkatan_id" value="<?= set_value('angkatan_id') ?>" placeholder="Angkatan ke-">
                                            <?= form_error('angkatan_id') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="keterangan" class="form-control" name="keterangan" value="<?= set_value('keterangan') ?>" placeholder="Periode Tahun">
                                            <?= form_error('keterangan') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="aktif" value="<?= set_value('aktif') ?>">
                                                <option value="y">Aktif</option>
                                                <option value="n">Tidak Aktif</option>
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