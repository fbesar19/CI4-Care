<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Halaman login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>/css/salingbantu.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="gd-primary full-height p-5 text-white">
                    <h1 class="mt-5 pt-5">Selamat datang</h1>
                    <hr>
                    <p>Halaman admin hanya dapat diakses oleh mereka yang terdaftar sebagai #adminCARE</p>
                    <!-- <button class="btn btn-light text-primary mt-4 rounded-pill">Kembali ke halaman utama</button> -->
                </div>
            </div>
            <div class="col-md-8 p-5 mt-5">
                <h1 class="mb-5 mt-5">Login</h1>
                <form action="/login/admin" method="GET">
                    <div class="form-group">
                        <input id="Username" type="text" class="form-control" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control" name="password" placeholder="password">
                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- <div class="container">
        <div class="row justify-content-md-center">
            <div class="card-wrapper col-md-4 mt-5">
                <div class="container card">
                    <div class="title">
                        <h3 class="card-title text-center"><br>Login</h3>
                        <div class="space-title mt-4">

                            <form method="POST">
                                <div class="form-group">
                                    <input id="Username" type="text" class="form-control" name="username" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="password">
                                </div>

                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                                        Login
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>