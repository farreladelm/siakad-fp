<section class="section">

    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <a href="<?= base_url('akademik/matakuliah/create') ?>" class="btn btn-primary col-2">Tambah Mata Kuliah</a>
            </div>
            <table class="table table-lg" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <!-- <th>Kelompok</th> -->
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Jam</th>
                        <th>Semester</th>
                        <th>Aktif</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subjects as $key => $subject) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td class="text-bold-500"><?= $subject['kode_makul'] ?></td>
                            <td><?= $subject['nama_makul'] ?></td>
                            <td><?= $subject['sks'] ?></td>
                            <td><?= $subject['jam'] ?></td>
                            <td><?= $subject['semester'] ?></td>
                            <td>
                                <?php if ($subject['aktif'] == 'y') : ?>
                                    <div class="btn btn-success">Active</div>
                                <?php else : ?>
                                    <div class="btn btn-danger">Inactive</div>
                                <?php endif; ?>
                            </td>
                            <!-- <td><?= $subject['level'] == 1 ? 'Admin' : ($subject['level'] == 2 ? 'Pihak Jurusan' : 'Dosen') ?></td> -->
                            <td>
                                <a href="<?= base_url('akademik/matakuliah/edit/' . $subject['makul_id']) ?>" class="btn btn-outline-warning">Edit</a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#deleteModalCard<?= $subject['makul_id'] ?>">
                                    Delete
                                </button>
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="deleteModalCard<?= $subject['makul_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Hapus</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Apakah anda yakin untuk menghapus subject?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <a href="<?= base_url('akademik/matakuliah/delete/' . $subject['makul_id']) ?>" class="btn btn-danger ml-1">
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
</section>