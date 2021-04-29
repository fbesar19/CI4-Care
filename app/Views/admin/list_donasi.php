<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">Tambah Penggalangan Donasi</button>

    <!-- tabel -->
    <div class="card shadow-sm mt-4">
        <div class="card-header py-3">
            <p class="text-dark-500 m-0 font-weight-bold">Daftar Penggalangan Donasi</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Batas Waktu</th>
                            <th>Total Biaya </th>
                            <th>Terkumpul </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <?php
                        $no = 1;
                        foreach ($donasi as $data) :
                            $id = $data['id'];
                            $terkumpul = 0;
                            foreach ($dana as $d) {
                                if ($data['id'] == $d['detail_donasi']) {
                                    $terkumpul = $terkumpul + $d['nominal'];
                                }
                            }
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['judul']; ?></td>
                                <td><?= $data['batas_waktu']; ?></td>
                                <td><?= rupiah($data['target_biaya']); ?></td>
                                <td><?= rupiah($terkumpul); ?></td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $id ?>">Hapus</button>
                                </td>
                            </tr>

                            <!-- Modal Delete -->
                            <div class="modal fade mt-5 pt-5" id="modalDelete<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pengumpulan</h5>
                                        </div>
                                        <form action="<?= base_url('/admin/delete_donasi/' . $id); ?>" method="post">
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penggalangan Donasi</h5>
                </div>
                <form action="<?= base_url('/admin/save_donasi/'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="productname"><strong>Judul</strong></label>
                            <input class="form-control" type="text" placeholder="Masukan judul" name="judul" required>

                        </div>

                        <div class="form-group mb-3">
                            <label for="productname"><strong>Target Biaya</strong></label>
                            <input class="form-control" id="besar_bayar" type="text" onchange="myFunction()" placeholder="Masukan target_biaya" name="target_biaya" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="productname"><strong>Batas Waktu</strong></label>
                            <input class="form-control" type="date" name="batas_waktu" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="productname"><strong>Pilih Foto</strong></label>
                            <input class="form-control" type="file" name="gambar" required>
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

<?php
function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
?>

<script>
    $(document).ready(function() {
        // Format mata uang.
        $('#besar_bayar').mask('0,000,000,000,000,000', {
            reverse: true
        });

    })
</script>

<?= $this->endSection(); ?>