<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .header-image {
            background-image: url("assets/fitur/img/header1.png");

            /* Set a specific height */
            height: 50%;

            /* Position and center the image to scale nicely on all screens */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asah Dirimu</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/fitur/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/fitur/'); ?>css/business-frontpage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Asah Dirimu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="py-5 mb-5 header-image">
        <div class="container h-100 ">
            <div class="row h-100 align-items-center ">
                <div class="col-lg-12 ">
                    <h1 class="display-4 text-white mt-5 mb-2"><strong>INFO SEMINAR</strong></h1>
                    <p class="lead mb-5 text-white-50"><strong>seminar disini gaiseu</strong></p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-5 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/fitur/img/seminar3.jpg') ?>" width="300" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Webinar PKM</h4>
                        <p class="card-text">Webinar yang diadakan oleh Fakultas Teknik Universitas Jenderal Soedirman.</p>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('seminar/sm1'); ?>" class="btn btn-primary">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-4 mb-5">
                <form class="form-inline" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn my-2 my-sm-0" type="submit" style="background-color: #A97B70; color:white">Cari</button>
                </form>
                <hr>
                <h2>Filter</h2>
                <hr>
                <h5>Tanggal</h5>
                <hr>
                <h5>Kategori</h5>
                <hr>
                <h5>Lokasi</h5>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/fitur/img/seminar.jpeg') ?>" width="300" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Webinar Strategi Sukses Bisnis</h4>
                        <p class="card-text">Webinar tentang Strategi Bisnis yang sukses,diadakan oleh UKM Kewirausahaan Teknik Unsoed.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/fitur/img/seminar1.jpg') ?>" width="300" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Study Bisnis</h4>
                        <p class="card-text">Webinar yang akan membahas seputar peluang bisnis di era milenial.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/fitur/img/seminar2.jpg') ?>" width="300" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Webinar Lolos PKM PMW</h4>
                        <p class="card-text">Membahas seputar tips dan trik supaya lolos PKM PMW.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/fitur/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/fitur/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>