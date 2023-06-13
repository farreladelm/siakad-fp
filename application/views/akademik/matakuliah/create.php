    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/matakuliah/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Kode Mata Kuliah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="kode_makul" value="<?= set_value('kode_makul') ?>" placeholder="tanpa spasi">
                                            <?= form_error('kode_makul') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Mata Kuliah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama_makul" value="<?= set_value('nama_makul') ?>" placeholder="">
                                            <?= form_error('nama_makul') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>SKS</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="sks" value="<?= set_value('sks') ?>">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="semester" value="<?= set_value('semester') ?>">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Konsentrasi</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="konsentrasi_id" value="<?= set_value('konsentrasi_id') ?>">
                                                <option value="1">Sistem Informasi</option>
                                                <option value="2">Informatika</option>
                                                <option value="3">Sains Data</option>
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