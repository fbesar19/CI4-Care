<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <!-- tabel -->
    <div class="card shadow-sm">
        <div class="card-header py-3">
            <p class="text-dark-500 m-0 font-weight-bold">Daftar Penggalangan Dana</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Donatur</th>
                            <th>Nominal</th>
                            <th>Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <?php
                        $no = 1;
                        foreach ($dana as $data) :
                            $id = $data['id'];
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['tgl_donasi']; ?></td>
                                <td><?= $data['nama_donatur']; ?></td>
                                <td><?= $data['nominal']; ?></td>
                                <td><?= $data['detail_donasi']; ?></td>
                                <td>
                                    <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $id ?>">Edit</button> -->
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $id ?>">Hapus</button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade mt-5 pt-5" id="modalEdit<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Pengumpulan Dana</h5>
                                        </div>
                                        <form action="<?= base_url('/PengumpulanDana/edit_pengumpulan_dana/' . $id); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group mb-3">
                                                    <label for="productname"><strong>Nama Donatur</strong></label>
                                                    <input class="form-control" type="text" value="<?= $data['nama_donatur']; ?>" name="nama_donatur" required>

                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="productname"><strong>Nominal Donasi</strong></label>
                                                    <input class="form-control" type="text" value="<?= $data['nominal']; ?>" name="nominal_donasi" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="productname"><strong>Detail Donasi</strong></label>
                                                    <input class="form-control" type="text" value="<?= $data['detail_donasi']; ?>" name="detail_donasi" required>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->

                            <!-- Modal Delete -->
                            <div class="modal fade mt-5 pt-5" id="modalDelete<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pengumpulan</h5>
                                        </div>
                                        <form action="<?= base_url('/admin/delete_pengumpulan_dana/' . $id); ?>" method="post">
                                            <div class="modal-body">
                                                <p>Apakah anda ingin menghapus data ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->
                        <?php endforeach;
                        if ($no == 1) { ?>
                            <tr>
                                <td colspan="6" align="center">Tidak ada data</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- batas tabel -->
    <!-- Modal Tambah -->
    <div class="modal fade mt-5 pt-5" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumpulan Dana</h5>
                </div>
                <form action="<?= base_url('/PengumpulanDana/save_pengumpulan_dana/'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="productname"><strong>Nama Donatur</strong></label>
                            <input class="form-control" type="text" placeholder="Masukan nama donatur" name="nama_donatur" required>

                        </div>

                        <div class="form-group mb-3">
                            <label for="productname"><strong>Nominal Donasi</strong></label>
                            <input class="form-control" type="text" placeholder="Masukan nominal donasi" name="nominal_donasi" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="productname"><strong>Detail Donasi</strong></label>
                            <input class="form-control" type="text" placeholder="Masukan detail donasi" name="detail_donasi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Modal -->

</div>

<?= $this->endSection(); ?>