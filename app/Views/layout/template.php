<!doctype html>
<html lang="en">

<!-- Section Header -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity=" sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel=" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2C5CD6;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/img/logofix.png" alt="" width="200" height="52">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alumni
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/pages/login">Login Alumni</a></li>
                            <li><a class="dropdown-item" href="/masuk">Login Admin</a></li>
                            <li><a class="dropdown-item" href="/pages/daftar">Registrasi Alumni</a></li>
                            <li><a class="dropdown-item" href="/alumni">Data Alumni</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/berita">Berita Alumni</a></li>
                            <li><a class="dropdown-item" href="/lowongan">Lowongan Pekerjaan</a></li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <?= $this->renderSection('content'); ?>


    <!-- Section Footer -->
    <section id="footer" style="background-color: #2C5CD6;">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>ALAMAT</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://goo.gl/maps/bthRrAMQEgE3HJADA"><i class="fa fa-angle-double-right"></i>Jl Raya Rungkut Madya, Gunung Anyar, Surabaya, Jawa Timur</a></li>
                        <li><a><i class="fa fa-angle-double-right"></i>(031) 8782179 & (031) 8782257</a></li>
                        <li><a href="mailto:himasifo.upnvjatim@gmail.com"><i class="fa fa-angle-double-right"></i>himasifo.upnvjatim@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>LINK</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.upnjatim.ac.id/"><i class="fa fa-angle-double-right"></i>UPN Veteran Jawa Timur</a></li>
                        <li><a href="https://fik.upnjatim.ac.id/"><i class="fa fa-angle-double-right"></i>Fakultas Ilmu Komputer</a></li>
                        <li><a href="http://sisfo.upnjatim.ac.id/"><i class="fa fa-angle-double-right"></i>Sistem Informasi</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>MEDIA SOSIAL</h5>
                    <ul class="list-unstyled quick-links">
                        <li><img src="/img/Instagram.png"><a href="https://www.instagram.com/himasifo_upnvjatim/"><i class="fa fa-angle-double-right"></i>himasifo_upnvjatim</a></li>
                        <li><img src="/img/youtube.png"><a href="https://www.youtube.com/channel/UComN7Zo6fWi9NSw6uXTzjhQ"><i class="fa fa-angle-double-right"></i>HIMASIFO UPNVJATIM</a></li>
                        <li><img src="/img/Twitter.png"><a href="https://twitter.com/himasifo_upn"><i class="fa fa-angle-double-right"></i>HIMASIFO_UPN</a></li>
                        <li><img src="/img/facebook.png"><a href="https://www.facebook.com/sisfoupnvjatim/"><i class="fa fa-angle-double-right"></i>Sistem Informasi UPN Jawa Timur</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6"> &copy; 2021 Sistem Informasi UPNVJT</p>
                </div>
                <hr>
            </div>
        </div>
    </section>
</body>

</html>