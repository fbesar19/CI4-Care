<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <button class="btn btn-primary mb-3 shadow-sm">Tambah Donatur</button>
    <!-- tabel -->
    <div class="card shadow-sm">
        <div class="card-header py-3">
            <p class="text-dark-500 m-0 font-weight-bold">Donatur Bencana Banjir Dayeuh Kolot</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Donatur</th>
                            <th>Jumlah Donasi</th>
                            <th>Tanggal Bayar </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            <td>1.</td>
                            <td>Hj. Sodiq Sodikin</td>
                            <td>Rp. 30.000,00</td>
                            <td>12/02/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- batas tabel -->
</div>

<?= $this->endSection(); ?>