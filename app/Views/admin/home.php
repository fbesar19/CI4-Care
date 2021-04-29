<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- tabel -->
    <div class="card shadow-sm">
        <div class="card-header py-3">
            <p class="text-dark-500 m-0 font-weight-bold">Daftar Donasi Terselesaikan</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penggalangan</th>
                            <th>Tanggal Ditayangkan</th>
                            <th>Total Biaya </th>
                            <th>Terkumpul </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            <td>1.</td>
                            <td>Bencana Banjir di Dayeuh Kolot</td>
                            <td>22/03/2021</td>
                            <td>Rp. 20.000.000,00</td>
                            <td>Rp. 30.000.000,00</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Salurkan</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- batas tabel -->
</div>

<?= $this->endSection(); ?>