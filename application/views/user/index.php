<!-- Table with outer spacing -->


<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <a href="<?= base_url('user/create') ?>" class="btn btn-primary col-2"><i class="fas fa-plus me-2"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-lg" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Last login</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $user) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td class="text-bold-500"><?= $user['username'] ?></td>
                                <td><?= $user['nama'] ?></td>
                                <td><?= $user['level'] == 1 ? 'Admin' : ($user['level'] == 2 ? 'Pihak Jurusan' : 'Dosen') ?></td>
                                <td><?= $user['last_login'] ? $user['last_login'] : '-' ?></td>
                                <td class="text-bold-500"><?= $user['keterangan'] ? $user['keterangan'] : '-' ?></td>
                                <td>
                                    <a href="<?= base_url('user/edit/' . $user['user_id']) ?>" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#deleteModalCard<?= $user['user_id'] ?>">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <!--Basic Modal -->
                                    <div class="modal fade text-left" id="deleteModalCard<?= $user['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">Hapus User <?= $user['username'] ?></h5>
                                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Apakah anda yakin untuk menghapus user?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <a href="<?= base_url('user/delete/' . $user['user_id']) ?>" class="btn btn-danger ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Hapus</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>