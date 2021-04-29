<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>adminCARE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark bg-gradient-primary p-0 shadow-sm">
            <div class="container-fluid d-flex flex-column p-0">

                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3 text-white"><span>Admin Care</span></div>
                </a>

                <hr class="sidebar-divider my-0">

                <ul class="nav navbar-nav" id="accordionSidebar">

                    <li class="nav-item">
                        <a class="nav-link" href="/admin">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">

                    <div class="sidebar-heading">
                        Donasi
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/list_donasi">
                            <i class="fas fa-fw fa-dollar-sign"></i>
                            <span>Penggalangan Donasi</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/list_pengumpulan_dana">
                            <i class="fas fa-fw fa-dollar-sign"></i>
                            <span>Pengumpulan Dana</span>
                        </a>
                    </li>

                    <!-- <hr class="sidebar-divider"> -->
                    <!-- 
                    <div class="sidebar-heading">
                        Artikel
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/tambah_artikel">
                            <i class="fas fa-fw fa-plus"></i>
                            <span>Tambah Artikel</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/list_artikel">
                            <i class="fas fa-fw fa-clipboard-list"></i>
                            <span>List Artikel</span>
                        </a>
                    </li> -->

                    <hr class="sidebar-divider">

                    <li class="nav-item">
                        <a class="nav-link" href="/login/logout">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <!-- top navigasi -->

                <nav class="navbar navbar-light navbar-expand bg-light shadow-sm mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item">
                                <div class="nav-item pt-1">
                                    <span class="text-gray-600 small pt-5">adminCARE</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- penghubung antar file -->

                <?= $this->renderSection('content') ?>

            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright text-gray-500"><span>Copyright © Care</span></div>
                </div>
            </footer>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>