<section class="section">

    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-primary col-2"><i class="fas fa-plus me-2"></i> Tambah Data</a>
            </div>
            <table class="table table-lg" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Konsentrasi</th>
                        <th>Angkatan</th>
                        <th>Alamat</th>
                        <th>Semester</th>
                        <th>Gender</th>
                        <th>Agama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ibu</th>
                        <th>Nama Ayah</th>
                        <th>No. HP Orang Tua</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Alamat Ayah</th>
                        <th>Alamat Ibu</th>
                        <th>Penghasilan Ayah</th>
                        <th>Penghasilan Ibu</th>
                        <th>Nama Sekolah</th>
                        <th>Telepon Sekolah</th>
                        <th>Alamat Sekolah</th>
                        <th>Jurusan Sekolah</th>
                        <th>Tahun Lulus Sekolah</th>
                        <th>Nama Kampus</th>
                        <th>Telepon Kampus</th>
                        <th>Alamat Kampus</th>
                        <th>Jurusan Kampus</th>
                        <th>Tahun Lulus Kampus</th>
                        <th>Nama institusi</th>
                        <th>Telepon institusi</th>
                        <th>Alamat institusi</th>
                        <th>Nama instansi</th>
                        <th>Telepon instansi</th>
                        <th>Alamat instansi</th>
                        <th>Mulai Instansi</th>
                        <th>Sampai Instansi</th>
                        <th>Semester Aktif</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mhs as $key => $item) : ?>
                        <tr>
                            <td class="text-bold-500"><?= $item['mahasiswa_id'] ?></td>
                            <td><?= $item['nim'] ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['konsentrasi_id'] ?></td>
                            <td><?= $item['angkatan'] ?></td>
                            <td><?= $item['alamat'] ?></td>
                            <td><?= $item['semester'] ?></td>
                            <td><?= $item['gender'] ?></td>
                            <td><?= $item['agama'] ?></td>
                            <td><?= $item['tempat_lahir'] ?></td>
                            <td><?= $item['tanggal_lahir'] ?></td>
                            <td><?= $item['nama_ibu'] ?></td>
                            <td><?= $item['nama_ayah'] ?></td>
                            <td><?= $item['no_hp_ortu'] ?></td>
                            <td><?= $item['pekerjaan_ibu'] ?></td>
                            <td><?= $item['pekerjaan_ayah'] ?></td>
                            <td><?= $item['alamat_ayah'] ?></td>
                            <td><?= $item['alamat_ibu'] ?></td>
                            <td><?= $item['penghasilan_ayah'] ?></td>
                            <td><?= $item['penghasilan_ibu'] ?></td>
                            <td><?= $item['sekolah_nama'] ?></td>
                            <td><?= $item['sekolah_telpon'] ?></td>
                            <td><?= $item['sekolah_alamat'] ?></td>
                            <td><?= $item['sekolah_jurusan'] ?></td>
                            <td><?= $item['sekolah_tahun_lulus'] ?></td>
                            <td><?= $item['kampus_nama'] ?></td>
                            <td><?= $item['kampus_telpon'] ?></td>
                            <td><?= $item['kampus_alamat'] ?></td>
                            <td><?= $item['kampus_jurusan'] ?></td>
                            <td><?= $item['kampus_tahun_lulus'] ?></td>
                            <td><?= $item['institusi_nama'] ?></td>
                            <td><?= $item['institusi_telpon'] ?></td>
                            <td><?= $item['institusi_alamat'] ?></td>
                            <td><?= $item['instansi_nama'] ?></td>
                            <td><?= $item['instansi_telpon'] ?></td>
                            <td><?= $item['instansi_alamat'] ?></td>
                            <td><?= $item['instansi_mulai'] ?></td>
                            <td><?= $item['instansi_sampai'] ?></td>
                            <td><?= $item['semester_aktif'] ?></td>
                            <td><?= $item['password'] ?></td>
                            <td>
                                <a href="<?= base_url('mahasiswa/edit/' . $item['mahasiswa_id']) ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#deleteModalCard<?= $item['mahasiswa_id'] ?>">
                                    <i class="fas fa-times"></i>
                                </button>
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="deleteModalCard<?= $item['mahasiswa_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                <a href="<?= base_url('mahasiswa/delete/' . $item['mahasiswa_id']) ?>" class="btn btn-danger ml-1">
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