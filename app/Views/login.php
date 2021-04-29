<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/care.css">

    <title>Care - Login</title>
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 h-full p-4 shadow">
                <h1 class="text-primary mt-5">Admin Care</h1>
                <h5 class="text-primary mt-5">Login</h5>
                <p class="text-primary my-3">Selamat datang kembali</p>

                <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('warning'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <?= form_open('login/cek_login'); ?>
                <div class="container-fluid bg-light p-0 mt-4 shadow-sm">
                    <div class="login-input-text p-3">
                        <label class="d-block">Username</label>
                        <input type="text" name="username" class="no-border bg-light" placeholder="Masukan username">
                    </div>
                    <div class="login-input-text py-2 px-3">
                        <label class="d-block">Password</label>
                        <input type="password" name="password" class="no-border bg-light" placeholder="Masukan password">
                    </div>
                </div>
                <div class="mt-5">
                    <input type="submit" name="submit" class="btn-login" value="Masuk">
                </div>
                <?= form_close(); ?>
            </div>
            <div class="col-md-9 d-md-block d-none h-full bg-login">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>