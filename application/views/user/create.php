    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('user/create') ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="username" value="<?= set_value('username') ?>" placeholder="username (tanpa spasi)" maxlength="20">
                                            <?= form_error('username') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama" value="<?= set_value('nama') ?>" placeholder="Full Name">
                                            <?= form_error('nama') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Password">
                                            <?= form_error('password') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password Confirmation</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password2" value="<?= set_value('password2') ?>" placeholder="Password Confirmation">
                                            <?= form_error('password2') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Level</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="level" value="<?= set_value('level') ?>">
                                                <option value="1">Admin</option>
                                                <option value="2">Pihak Jurusan</option>
                                                <option value="3">Dosen</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="keterangan" class="form-control" name="keterangan" value="<?= set_value('keterangan') ?>" placeholder="keterangan">
                                            <?= form_error('keterangan') ?>
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