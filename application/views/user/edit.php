    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('user/update/' . $user['user_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="username" value="<?= $user['username'] ?>" placeholder="username (tanpa spasi)">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama" value="<?= $user['nama'] ?>" placeholder="Full Name">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Level</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="level" <?= $user['level'] ?>>
                                                <option value="1" <?= $user['level'] == 1 ? 'selected' : '' ?>>Admin</option>
                                                <option value="2" <?= $user['level'] == 2 ? 'selected' : '' ?>>Pihak Jurusan</option>
                                                <option value="3" <?= $user['level'] == 3 ? 'selected' : '' ?>>Dosen</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="keterangan">
                                                <option <?= $user['keterangan'] == 'Sistem Informasi' ? 'selected' : '' ?>>Sistem Informasi</option>
                                                <option <?= $user['keterangan'] == 'Informatika' ? 'selected' : '' ?>>Informatika</option>
                                                <option <?= $user['keterangan'] == 'Sains Data' ? 'selected' : '' ?>>Sains Data</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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