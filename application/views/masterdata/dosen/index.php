<section class="section">

    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <a href="<?= base_url('masterdata/dosen/create') ?>" class="btn btn-primary col-2"><i class="fas fa-plus me-2"></i> Tambah Data</a>
            </div>
            <table class="table table-lg" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Nidn</th>
                        <th>Nip</th>
                        <th>No KTP</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Gender</th>
                        <th>Agama</th>
                        <th>Status Kawin</th>
                        <th>Gekar Pendidikan</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Kode Prodi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dos as $key => $item) : ?>
                        <tr>
                            <td class="text-bold-500"><?= $item['dosen_id'] ?></td>
                            <td><?= $item['nama_lengkap'] ?></td>
                            <td><?= $item['nidn'] ?></td>
                            <td><?= $item['nip'] ?></td>
                            <td><?= $item['no_ktp'] ?></td>
                            <td><?= $item['tempat_lahir'] ?></td>
                            <td><?= $item['tanggal_lahir'] ?></td>
                            <td><?= $item['gender'] ?></td>
                            <td><?= $item['agama'] ?></td>
                            <td><?= $item['status_kawin'] ?></td>
                            <td><?= $item['gelar_pendidikan'] ?></td>
                            <td><?= $item['alamat'] ?></td>
                            <td><?= $item['hp'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['prodi_id'] ?></td>
                            <td>
                                <a href="<?= base_url('masterdata/dosen/edit/' . $item['dosen_id']) ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#deleteModalCard<?= $item['dosen_id'] ?>">
                                    <i class="fas fa-times"></i>
                                </button>
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="deleteModalCard<?= $item['dosen_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                <a href="<?= base_url('masterdata/dosen/delete/' . $item['dosen_id']) ?>" class="btn btn-danger ml-1">
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