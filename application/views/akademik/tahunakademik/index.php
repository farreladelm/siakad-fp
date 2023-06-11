<section class="section">

    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <a href="<?= base_url('akademik/tahunakademik/create') ?>" class="btn btn-primary col-2">Tambah Data</a>
            </div>
            <table class="table table-lg" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun Akademik</th>
                        <th>Keterangan</th>
                        <th>Batas Registrasi</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tahunakademik as $key => $item) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td class="text-bold-500"><?= $item['tahun'] ?></td>
                            <td><?= $item['keterangan'] % 2 ? 'SEMESTER GANJIL' : 'SEMESTER GENAP' ?></td>
                            <td><?= $item['batas_registrasi'] ?></td>
                            <td>
                                <?php if ($item['status'] == 'y') : ?>
                                    <div class="btn btn-success">Active</div>
                                <?php else : ?>
                                    <div class="btn btn-danger">Inactive</div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('akademik/tahunakademik/edit/' . $item['tahun_akademik_id']) ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#deleteModalCard<?= $item['tahun_akademik_id'] ?>">
                                    <i class="fas fa-times"></i>
                                </button>
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="deleteModalCard<?= $item['tahun_akademik_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                    Apakah anda yakin untuk menghapus item?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <a href="<?= base_url('akademik/tahunakademik/delete/' . $item['tahun_akademik_id']) ?>" class="btn btn-danger ml-1">
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