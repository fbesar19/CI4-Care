<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- tabel -->
    <div class="card shadow-sm">
        <div class="card-header py-3">
            <p class="text-dark-500 m-0 font-weight-bold">Daftar Artikel</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Tayang</th>
                            <th>Judul Artikel</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            <td>1.</td>
                            <td>10/02/2021</td>
                            <td><a href="">Bencana Banjir di Dayeuh Kolot</a></td>
                            <td width="30%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa molestias, eius repellat ea, ipsum cumque, voluptatum iure accusamus modi ab a sed quas provident tempore libero. Temporibus ad alias repellat!</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">hapus</button>
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