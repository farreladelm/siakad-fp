    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('akademik/prodi/edit/' . $prodi['prodi_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Nama Program Didik</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_prodi" class="form-control" name="nama_prodi" value="<?= $prodi['nama_prodi'] ?>" placeholder="Nama Program Didik">
                                            <?= form_error('nama_prodi') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ketua</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="ketua" class="form-control" name="ketua" value="<?= $prodi['ketua'] ?>" placeholder="Dengan Gelar">
                                            <?= form_error('ketua') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Izin</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="no_izin" class="form-control" name="no_izin" value="<?= $prodi['no_izin'] ?>" placeholder="Sesuai Dengan Surat Izin">
                                            <?= form_error('no_izin') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="status">
                                                <option value="1" <?= $prodi['status'] == '1' ? 'selected' : '' ?>>Aktif</option>
                                                <option value="2" <?= $prodi['status'] == '2' ? 'selected' : '' ?>>Tidak Aktif</option>
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