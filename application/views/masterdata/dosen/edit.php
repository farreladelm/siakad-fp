    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('masterdata/dosen/edit/' . $dos['dosen_id']) ?>" method="POST">
                                <div class="form-body">
                                    <divx class="row">
                                        <div class="col-md-4">
                                            <label>Nama Dosen</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" value="<?= $dos['nama_lengkap'] ?>" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nidn</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nidn" class="form-control" name="nidn" value="<?= $dos['nidn'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nip</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nip" class="form-control" name="nip" value="<?= $dos['nip'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No KTP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="no_ktp" class="form-control" name="no_ktp" value="<?= $dos['no_ktp'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tempat Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" value="<?= $dos['tempat_lahir'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="<?= $dos['tanggal_lahir'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="gender">
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Agama</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghuchu">Konghuchu</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Status Kawin</label>
                                        </div>
                                        <fieldset class="col-md-8 form-group form-group">
                                            <select class="form-select" id="basicSelect" name="status_kawin">
                                                <option value="1">Kawin</option>
                                                <option value="2">Belum Kawin</option>
                                            </select>
                                        </fieldset>
                                        <div class="col-md-4">
                                            <label>Gelar Pendidikan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="gelar_pendidikan" class="form-control" name="gelar_pendidikan" value="<?= $dos['gelar_pendidikan'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat" class="form-control" name="alamat" value="<?= $dos['alamat'] ?>" placeholder="Alamat Lengkap">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No. HP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="hp" class="form-control" name="hp" value="<?= $dos['hp'] ?>" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email" class="form-control" name="email" value="<?= $dos['email'] ?>" placeholder="">
                                        </div>
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