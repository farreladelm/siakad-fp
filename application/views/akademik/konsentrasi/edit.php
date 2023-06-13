    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/konsentrasi/edit/' . $konsentrasi['konsentrasi_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Nama Konsentrasi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_konsentrasi" class="form-control" name="nama_konsentrasi" value="<?= $konsentrasi['nama_konsentrasi'] ?>" placeholder="Minimal 3 huruf">
                                            <?= form_error('nama_konsentrasi') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ketua</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="ketua" class="form-control" name="ketua" value="<?= $konsentrasi['ketua'] ?>" placeholder="Tanpa gelar">
                                            <?= form_error('ketua') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jenjang</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="jenjang" value="<?= $konsentrasi['jenjang'] ?>">
                                                <option value="D1" <?= $konsentrasi['jenjang'] == 'D1' ? 'selected' : '' ?>>D1</option>
                                                <option value="D2" <?= $konsentrasi['jenjang'] == 'D2' ? 'selected' : '' ?>>D2</option>
                                                <option value="D3" <?= $konsentrasi['jenjang'] == 'D3' ? 'selected' : '' ?>>D3</option>
                                                <option value="D4" <?= $konsentrasi['jenjang'] == 'D4' ? 'selected' : '' ?>>D4</option>
                                                <option value="S1" <?= $konsentrasi['jenjang'] == 'S1' ? 'selected' : '' ?>>S1</option>
                                                <option value="S2" <?= $konsentrasi['jenjang'] == 'S2' ? 'selected' : '' ?>>S2</option>
                                                <option value="S3" <?= $konsentrasi['jenjang'] == 'S3' ? 'selected' : '' ?>>S3</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Jumlah Semester</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="jml_semester">
                                                <option value="1" <?= $konsentrasi['jml_semester'] == '1' ? 'selected' : '' ?>>1</option>
                                                <option value="2" <?= $konsentrasi['jml_semester'] == '2' ? 'selected' : '' ?>>2</option>
                                                <option value="3" <?= $konsentrasi['jml_semester'] == '3' ? 'selected' : '' ?>>3</option>
                                                <option value="4" <?= $konsentrasi['jml_semester'] == '4' ? 'selected' : '' ?>>4</option>
                                                <option value="5" <?= $konsentrasi['jml_semester'] == '5' ? 'selected' : '' ?>>5</option>
                                                <option value="6" <?= $konsentrasi['jml_semester'] == '6' ? 'selected' : '' ?>>6</option>
                                                <option value="7" <?= $konsentrasi['jml_semester'] == '7' ? 'selected' : '' ?>>7</option>
                                                <option value="8" <?= $konsentrasi['jml_semester'] == '8' ? 'selected' : '' ?> selected>8</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Program Studi</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="prodi_id">
                                                <option value="1" <?= $konsentrasi['prodi_id'] == '1' ? 'selected' : '' ?>>ILMU KOMPUTER</option>
                                                <option value="2" <?= $konsentrasi['prodi_id'] == '2' ? 'selected' : '' ?>>ILMU SOSIAL DAN POLITIK</option>
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