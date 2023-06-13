    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('masterdata/grade_nilai/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>ID Nilai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nilai_id" class="form-control" name="nilai_id" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dari Nilai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="dari" class="form-control" name="dari" placeholder="00.0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Sampai Nilai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="sampai" class="form-control" name="sampai" placeholder="00.0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Grade</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="grade" class="form-control" name="grade" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="keterangan" class="form-control" name="keterangan" placeholder="">
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