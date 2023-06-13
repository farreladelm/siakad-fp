    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('user/edit/' . $user['user_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="username" value="<?= $user['username'] ?>" placeholder="username (tanpa spasi)">
                                            <?= form_error('username') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nama" value="<?= $user['nama'] ?>" placeholder="Full Name">
                                            <?= form_error('nama') ?>
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
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="keterangan" class="form-control" name="keterangan" value="<?= set_value('keterangan') ?>" placeholder="keterangan">
                                            <?= form_error('keterangan') ?>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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