<section class="section">

    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <a href="<?= base_url('akademik/jadwalkuliah/create') ?>" class="btn btn-primary col-2"><i class="fas fa-plus me-2"></i> Tambah Data</a>
            </div>
            <table class="table table-lg" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Mata Kuliah</th>
                        <th>Ruangan</th>
                        <th>Dosen</th>
                        <th>Jam</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jadwal as $key => $item) : ?>
                        <tr>
                            <td class="fw-bold"><?= $key + 1 ?></td>
                            <td><?= $item['hari_id'] ?></td>
                            <td><?= $makul[$item['makul_id']] ?></td>
                            <td><?= $ruangan[$item['ruangan_id']] ?></td>
                            <td><?= $dosen[$item['dosen_id']] ?></td>
                            <td>
                                <div class="p-2 border border-1 rounded mb-2">
                                    <?= $item['jam_mulai'] ?>
                                </div>
                                <div class="p-2 border border-1 rounded">
                                    <?= $item['jam_selesai'] ?>
                                </div>
                            </td>
                            <td>
                                <a href="<?= base_url('akademik/jadwalkuliah/edit/' . $item['jadwal_id']) ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#deleteModalCard<?= $item['jadwal_id'] ?>">
                                    <i class="fas fa-times"></i>
                                </button>
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="deleteModalCard<?= $item['jadwal_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                    Apakah anda yakin untuk menghapus data?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <a href="<?= base_url('akademik/jadwalkuliah/delete/' . $item['jadwal_id']) ?>" class="btn btn-danger ml-1">
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