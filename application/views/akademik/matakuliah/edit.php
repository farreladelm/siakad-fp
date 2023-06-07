    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/matakuliah/edit/' . $subject['makul_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Kode Mata Kuliah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="kode_makul" value="<?= $subject['kode_makul']  ?>" placeholder="tanpa spasi">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Mata Kuliah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama_makul" value="<?= $subject['nama_makul']  ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>SKS</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="sks">
                                                <option value="1" <?= $subject['sks'] == 1 ? 'selected' : '' ?>>1</option>
                                                <option value="2" <?= $subject['sks'] == 2 ? 'selected' : '' ?>>2</option>
                                                <option value="3" <?= $subject['sks'] == 3 ? 'selected' : '' ?>>3</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="semester" value="semester">
                                                <option value="1" <?= $subject['semester'] == 1 ? 'selected' : ''  ?>>1</option>
                                                <option value="2" <?= $subject['semester'] == 2 ? 'selected' : ''  ?>>2</option>
                                                <option value="3" <?= $subject['semester'] == 3 ? 'selected' : ''  ?>>3</option>
                                                <option value="4" <?= $subject['semester'] == 4 ? 'selected' : ''  ?>>4</option>
                                                <option value="5" <?= $subject['semester'] == 5 ? 'selected' : ''  ?>>5</option>
                                                <option value="6" <?= $subject['semester'] == 6 ? 'selected' : ''  ?>>6</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Konsentrasi</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="konsentrasi_id">
                                                <option value="1" <?= $subject['konsentrasi_id'] == 1 ? 'selected' : '' ?>>Sistem Informasi</option>
                                                <option value="2" <?= $subject['konsentrasi_id'] == 2 ? 'selected' : '' ?>>Informatika</option>
                                                <option value="3" <?= $subject['konsentrasi_id'] == 3 ? 'selected' : '' ?>>Sains Data</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="aktif">
                                                <option value="y" <?= $subject['aktif'] == 'y' ? 'selected' : '' ?>>Aktif</option>
                                                <option value="n" <?= $subject['aktif'] == 'n' ? 'selected' : '' ?>>Tidak Aktif</option>
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