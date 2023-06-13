    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/khs/edit/' . $khs['khs_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>KRS</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="krs_id" class="form-control" name="krs_id" value="<?= $khs['krs_id'] ?>" placeholder="">
                                            <?= form_error('krs_id') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mutu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="mutu" class="form-control" name="mutu" value="<?= $khs['mutu'] ?>" placeholder="">
                                            <?= form_error('mutu') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kehadiran</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kehadiran" class="form-control" name="kehadiran" value="<?= $khs['kehadiran'] ?>" placeholder="">
                                            <?= form_error('kehadiran') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tugas</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tugas" class="form-control" name="tugas" value="<?= $khs['tugas'] ?>" placeholder="">
                                            <?= form_error('tugas') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Grade</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="grade" class="form-control" name="grade" value="<?= $khs['grade'] ?>" placeholder="">
                                            <?= form_error('grade') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="confirm" id="confirm1" value="1" <?= $khs['confirm'] == '1' ? 'checked' : '' ?>>
                                                <?= form_error('confirm') ?>
                                                <label class="form-check-label" for="confirm1">
                                                    Confirmed
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="confirm" id="confirm2" value="2" <?= $khs['confirm'] == '2' ? 'checked' : '' ?>>
                                                <?= form_error('confirm') ?>
                                                <label class="form-check-label" for="confirm2">
                                                    Unconfirmed
                                                </label>
                                            </div>
                                        </div>

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