    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/registrasi/edit/' . $registrasi['registrasi_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>NIM</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nim" class="form-control" name="nim" value="<?= $registrasi['nim'] ?>" placeholder="Hanya gunakan angka">
                                            <?= form_error('nim') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun Akademik</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="tahun_akademik_id" value="<?= $registrasi['tahun_akademik_id'] ?>">
                                                <?php foreach ($tahun_akademik as $item) : ?>
                                                    <option value="<?= $item['tahun_akademik_id'] ?>"><?= $item['tahun'] ?> <?= $item['keterangan'] % 2 == 0 ? 'Genap' : 'Ganjil'  ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="semester">
                                                <option value="1" <?= $registrasi['semester'] == '1' ? 'selected' : ''  ?>>1</option>
                                                <option value="2" <?= $registrasi['semester'] == '2' ? 'selected' : ''  ?>>2</option>
                                                <option value="3" <?= $registrasi['semester'] == '3' ? 'selected' : ''  ?>>3</option>
                                                <option value="4" <?= $registrasi['semester'] == '4' ? 'selected' : ''  ?>>4</option>
                                                <option value="5" <?= $registrasi['semester'] == '5' ? 'selected' : ''  ?>>5</option>
                                                <option value="6" <?= $registrasi['semester'] == '6' ? 'selected' : ''  ?>>6</option>
                                                <option value="7" <?= $registrasi['semester'] == '7' ? 'selected' : ''  ?>>7</option>
                                                <option value="8" <?= $registrasi['semester'] == '8' ? 'selected' : ''  ?>>8</option>
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