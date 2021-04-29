<html>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CARE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/salingbantu.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .baner {
            background-image: linear-gradient(to right,
                    rgba(26, 37, 66, 0.7),
                    rgba(106, 140, 231, 0.7)),
                url("<?= base_url('background-1.jpg') ?>");
            background-size: cover;
            background-position: center;
        }

        .carousel-item img {
            height: 50vh;
            object-fit: cover;
        }

        .carousel-item img {
            height: 50vh;
            object-fit: cover;
        }

        .foto-bencana {
            height: 180px;
            object-fit: cover;
        }

        progress {
            width: 100%;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/login">
                <img src="<?= base_url('assets/icon.png'); ?>" alt="" width="30" height="29" class="d-inline-block align-top">
                <strong class="text-primary">CARE</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Penggalangan-Dana">Penggalangan Dana</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#Testimoni">Testimoni</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4 py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <?php
            foreach ($detail as $d) :
                $total = 0;
                foreach ($dana as $d_dana) {
                    if ($d['id'] == $d_dana['detail_donasi']) {
                        $total = $total + $d_dana['nominal'];
                    }
                }
            ?>
                <div class="col-md-6">
                    <img src="<?= base_url('foto_donasi/' . $d['gambar']) ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2><?= $d['judul'] ?></h2>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5>Terkumpul</h5>
                        <h5><?= rupiah($total); ?></h5>
                    </div>
                    <div class="my-3">
                        <progress value="<?= $total ?>" max="<?= $d['target_biaya'] ?>"></progress>
                    </div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Donasi Sekarang</button>
                </div>

            <?php endforeach; ?>
            <div class="row my-2">
                <?php foreach ($donatur as $dnt) : ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5><?= $dnt['nama_donatur']; ?></h5>
                                <span>Telah Berdonasi sebesar</span>
                                <h5><?= rupiah($dnt['nominal']); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- penggalangan donasi -->
    <div class="container py-4" data-aos="fade-up" data-aos-duration="1000" id="Penggalangan-Dana">
        <h3 class="text-primary text-center">Mereka Yang Butuh Bantuan</h3>
        <div class="row py-4">
            <?php
            foreach ($donasi as $data) :
                $terkumpul = 0;
                foreach ($dana as $d) {
                    if ($data['id'] == $d['detail_donasi']) {
                        $terkumpul = $terkumpul + $d['nominal'];
                    }
                }
            ?>
                <div class="col-md-3 my-3">
                    <a href="<?= base_url('home/detail_donasi/' . $data['id']); ?>">
                        <div class="card shadow-sm rounded">
                            <img src="<?= base_url('/foto_Donasi/' . $data['gambar']); ?>" class="card-img-top foto-bencana" alt="...">
                            <div class="card-body">
                                <h5 class="card-text text-dark" style="height: 40px;"><?= $data['judul'] ?></h5>
                                <hr>
                                <table width="100%">
                                    <tr>
                                        <td>Batas Waktu</td>
                                        <td align="right">Terkumpul</td>
                                    </tr>
                                    <tr>
                                        <td><b><?= $data['batas_waktu'] ?></b></td>
                                        <td align="right"><b><?= rupiah($terkumpul); ?></b></td>
                                    </tr>
                                </table>
                                <div class="my-3">
                                    <progress value="<?= $terkumpul ?>" max="<?= $data['target_biaya'] ?>"></progress>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade mt-5 pt-5" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penggalangan Donasi</h5>
                </div>
                <form action="<?= base_url('/home/berdonasi/' . $id); ?>" method="post">
                    <div class="modal-body">

                        <input type="hidden" value="<?php $id; ?>" name="detail_donasi">
                        <div class="form-group mb-3">
                            <label for="productname"><strong>Nama Lengkap</strong></label>
                            <input class="form-control" type="text" placeholder="Masukan nama lengkap" name="nama_donatur" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="productname"><strong>Nominal</strong></label>
                            <input class="form-control" type="text" onchange="myFunction()" placeholder="Masukan nominal" name="nominal" required>
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

    <div class="container-fluid bg-primary p-5 text-center baner">
        <span class="text-white">Sudahkah anda berdonasi hari ini?</span>
        <!-- <a href="login" class="btn btn-light rounded-pill text-primary mx-3">Daftar Sekarang</a> -->
    </div>
    <!-- footer -->

    <footer id="sticky-footer" class="py-2 bg-primary text-white">
        <div class="container text-center">
            <small>CARE ~ Copyright &copy;2021</small>
        </div>
    </footer>

    <?php
    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            // Format mata uang.
            $('#besar_bayar').mask('0,000,000,000,000,000', {
                reverse: true
            });

        })
    </script>
</body>

</html>