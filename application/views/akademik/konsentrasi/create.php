    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/konsentrasi/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Nama Konsentrasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_konsentrasi" class="form-control" name="nama_konsentrasi" value="<?= set_value('nama_konsentrasi') ?>" placeholder="Minimal 3 huruf">
                                            <?= form_error('nama_konsentrasi') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ketua</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="ketua" class="form-control" name="ketua" value="<?= set_value('ketua') ?>" placeholder="Tanpa gelar">
                                            <?= form_error('ketua') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jenjang</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="jenjang" value="<?= set_value('jenjang') ?>">
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Jumlah Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="jml_semester" value="<?= set_value('jml_semester') ?>">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8" selected>8</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Program Studi</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="prodi_id" name="prodi_id" value="<?= set_value('prodi_id') ?>">
                                                <?php foreach ($prodi as $item) : ?>
                                                    <option value="<?= $item['prodi_id'] ?>"><?= $item['nama_prodi'] ?></option>
                                                <?php endforeach; ?>
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