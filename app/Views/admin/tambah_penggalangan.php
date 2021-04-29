<?= $this->extend('/admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col" style="width: 630px;">
                    <div class="card shadow-sm mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Tambah Penggalangan Dana</p>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-row">
                                    <div class="col">

                                        <div class="form-group"><label for="productname"><strong>Judul</strong></label>
                                            <input class="form-control" type="text" placeholder="masukan judul" name="nama_barang" required>
                                        </div>

                                        <div class="form-group"><label for="productname"><strong>Total Biaya</strong></label>
                                            <input class="form-control" type="text" placeholder="masukan total biaya" name="harga_barang" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="productname"><strong>Batas Waktu</strong></label>
                                            <input class="form-control" type="text" placeholder="masukan batas waktu" name="satuan_barang" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="productname"><strong>Pilih Foto</strong></label>
                                            <input class="d-block" type="file" placeholder="masukan batas waktu" name="satuan_barang" required>
                                        </div>
                                        <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                                        <button class="btn btn-primary btn-block mt-4" type="submit">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>