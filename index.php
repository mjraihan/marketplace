<?php 
    if (count($_GET) != 0) {
        if ($_GET['halaman'] == 'detail1') {
            $rawTitle = 'Chino T-Shirt Gay';
        } else if ($_GET['halaman'] == 'detail2') {
            $rawTitle = 'Chino T-Shirt Tidak Gay';
        } else {
            $title = ucwords($_GET['halaman']);
            $rawTitle = str_replace("-", " ", $title);
        }
    } else {
        $rawTitle = 'Home'; 
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="modul/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Poppins">
        <link rel="stylesheet" href="modul/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="modul/flickity/css/flickity.min.css">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="modul/bootstrap/js/bootstrap.min.js"></script>
        <script src="modul/flickity/js/flickity.pkgd.min.js"></script>
        <script src="js/script.js"></script>

        <title>Marketplace | <?= $rawTitle ?></title>
    </head>
<body>

    <!-- Navbar -->
    <div class="navScrollSH">
        <section class="navGroup">
            <section class="topHeader">
                <div class="container d-md-flex">
                    <div class="col-md-6 col-12 oriApp text-md-left text-center pl-0">
                        <a href="#"><img src="assets/header/ikon_dunlut.png" alt=""> Download Ori.id App di Sini </a>
                    </div>

                    <div class="col-md-6 col-12 mt-md-2 mb-md-2 pr-md-0 d-md-flex text-center rightHeaderMenu">
                        <div class="col-lg-9 col-md-7 syarat text-md-right pr-4">
                            <a href="aboutUs.html">Tentang Marketplace</a>
                        </div>
                        <div class="col-lg-3 col-md-5 cekTransaksi text-md-right">
                            <a href="index.php?halaman=status-pesanan">Cek Transaksi</a>
                        </div>
                    </div>

                </div>
            </section>

            <section class="mainNav">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container">
                        <div class="searchTab">
                            <div class="row" style="display: contents;">
                                <div class="col-md-6">
                                    <a class="navbar-brand" href="index.php?halaman=home"><img src="assets/header/logo.png" alt="logo"></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: white; border: none; border-top-left-radius: 25px; border-bottom-left-radius: 25px;"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control pl-0" placeholder="Apa yang anda cari hari ini" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-left: 0px; border-bottom: 0px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">SEARCH</button>
                                        </div>
                                    </div>                
                                </div>
                            </div>
                        </div>
                        <section class="searchDesk">
                            <a class="navbar-brand" href="index.php?halaman=home"><img src="assets/header/logo.png" alt="logo"></a>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: white; border: none; border-top-left-radius: 25px; border-bottom-left-radius: 25px;"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control pl-0" placeholder="Apa yang anda cari hari ini" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-left: 0px; border-bottom: 0px;">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">CARI</button>
                                </div>
                            </div>
                        </section>
                        <div class="navbar-nav ml-lg-auto pt-2 table-responsive">
                            <!-- <a class="nav-item nav-link" href="#">Chat</a>
                            <a class="nav-item nav-link" href="#">Bantuan</a> -->
                            <div class="lineSide d-flex">
                                <a href ="index.php?halaman=cart">
                                    <div class="outter-badge"> 
                                        <img src="assets/header/cart.png" class="img-fluid" alt="">
                                        <div class="inner-badge">
                                            <p>5</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link pl-1 pr-1" href="index.php?halaman=wishlist"><img src="assets/header/ikon_hati.png" alt="like"></a>
                                <a class="nav-item nav-link pl-1 pr-1" href="#"><img src="assets/header/ikon_lonceng.png" alt="notifications"></a>
                            </div>
                            <a class="nav-item nav-link register d-lg-flex" href="daftar.html">Daftar</a>
                            <a class="nav-item nav-link register d-lg-flex" href="login.html">Masuk</a>
                        </div>
                    </div>
                </nav>  
            </section>

            <section class="megaMenu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PAGES
                                    </a>
                                    <div class="dropdown-menu pb-4" aria-labelledby="navbarDropdown">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span class="text-uppercase">QUICK ACCESS MENU</span>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=profile">Profil</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=histori-pesanan">History Pesanan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=konfirmasi-pesanan">Konfirmasi Pesanan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=konfirmasi-transfer">Konfirmasi Tansfer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=pembayaran">Pembayaran</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=status-pembayaran">Status Pembayaran</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=status-pesanan">Status Pesanan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=summary-pembayaran">Summary Pembayaran</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=review">Review</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=tracking">Tracking</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link m-0" href="index.php?halaman=products">Etalase</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class="col-md-4 pt-4">
                                                    <a href="">
                                                        <img src="https://dummyimage.com/500x150/ccc/000&text=image+link" alt="" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PRIA
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <span class="text-uppercase">PRIA</span>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <p class="nav-link subTitle" href="#">Sub Title 1</p>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class="col-md-4">
                                                    <span class="text-uppercase">&nbsp;</span>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <p class="nav-link subTitle" href="#">Sub Title 2</p>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class="col-md-4">
                                                </div>
                                                <!-- /.col-md-4  -->
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ANAK
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <span class="text-uppercase">ANAK</span>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <p class="nav-link subTitle" href="#">Sub Title 1</p>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class="col-md-4">
                                                    <span class="text-uppercase">&nbsp;</span>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <p class="nav-link subTitle" href="#">Sub Title 2</p>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link item</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-md-4  -->
                                                <div class="col-md-4">
                                                    <span class="text-uppercase">&nbsp;</span>
                                                </div>
                                                <!-- /.col-md-4  -->
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <div class="navbar-nav my-2 my-lg-0">
                                <li class="nav-item"><a class="nav-link m-0" href="#">Promo</a></li>
                                <li class="nav-item"><a class="nav-link m-0" href="#">E-Voucher</a></li>
                                <li class="nav-item"><a class="nav-link m-0" href="#">Flash Sale</a></li>
                                <li class="nav-item"><a class="nav-link m-0" href="#">Spesial</a></li>
                            </div>
                        </div>

                    </div>
                </nav>
            </section>
        </section>
    </div>
    <!-- Navbar end -->

    <!-- Body -->
    <?php
        if (count($_GET) != 0) {
            if ($_GET['halaman']) {
                $pages = $_GET['halaman'];
                require_once("" . $pages . ".php");
            } else {
                require_once("home.php");
            }
        } else {
            require_once("home.php");
        }
    ?>
    </section>
    <!-- Body End -->

    <!-- Other Choice -->
    <section class="otherChoice">
        <div class="container">
            <div class="col-12 p-0 d-flex table-responsive">
                <div class="col-md-3 text-center">
                    <img src="assets/footer/ikon_1.png" alt="">
                    <h5>Gratis Pengembalian</h5>
                    <p>Apapun alasan Anda. Nikmati gratis layanan 30 hari pengembalian</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/footer/ikon_2.png" alt="">
                    <h5>Produk Original</h5>
                    <p>Jaminan produk 100% asli (original) dan berkualitas premium</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/footer/ikon_3.png" alt="">
                    <h5>Secure Payment</h5>
                    <p>100% Pembayaran online aman PCI security Standart</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/footer/ikon_4.png" alt="">
                    <h5>Customer Support</h5>
                    <p>Butuh bantuan ? Kami siap melayani 24 jam setiap hari - <a href="#">Chat now</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Other Choice End-->

    <!-- Footer V2-->
    <section class="footerCheckOut">
        <div class="footerTopWrapper">
            <div class="container">
                <div class="row border-bottom pb-4" style="border-bottom-color: #444444 !important;">
                    <div class="col-md-2 text-center oriFooterLogo p-0">
                        <img src="assets/footer/logo_bg_putih.png" alt="">
                    </div>
                    <div class="col-md-10 p-0 textFooter">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, temporibus, ratione. Placeat doloremque vel voluptates nam. Assumenda explicabo ipsum natus quas labore animi, itaque ab ipsam doloribus, magnam, cum repellendus repudiandae, eius veritatis non! Minus maxime debitis consequatur magni quibusdam rem id architecto provident, quisquam labore odio a ea consectetur, ab laudantium quo necessitatibus quidem aliquid eum. Commodi libero, facere quidem quas, tenetur consectetur sint ea, tempora numquam esse totam similique ipsa aliquid nesciunt obcaecati animi quae quo eius ab labore neque rerum sequi! Totam atque, aut sed rem nisi, officia culpa consequuntur dolore ullam molestias sunt, reiciendis perferendis architecto.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-lg-flex footerMenus">
                        <div class="col-md-3 mt-4 allMenus">
                            <h5>BANTUAN</h5>
                            <ul>
                                <li><a href="#">Tentang Ori.id</a></li>
                                <li><a href="#">Syarat Dan Ketentuan</a></li>
                                <li><a href="#">Kebijakan Dan Privasi</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 mt-4 allMenus">
                            <h5>PANDUAN</h5>
                            <ul>
                                <li><a href="#">Panduan Transaksi</a></li>
                                <li><a href="#">Menjadi Member Kami</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 mt-4 allMenus">
                            <h5>AKUN</h5>
                            <ul>
                                <li><a href="#">Akun Saya</a></li>
                                <li><a href="#">Track Pesanan</a></li>
                                <li><a href="#">Keranjang Belanja</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 mt-4 footerSocialMedia">
                            <h5>HUBUNGI KAMI</h5>
                            <p>Ikuti kami di social media</p>
                            <div class="col-12 p-0 mt-2 d-flex">
                                <a href="" class="nav-link p-1">
                                    <i class="fa fa-instagram rounded border font-size-15 font-size-xs-10 button-follow pt-2 pb-2 text-center color-white-follow"></i>
                                </a>
                                <a href="" class="nav-link p-1">
                                    <i class="fa fa-youtube-play rounded border font-size-15 font-size-xs-10 button-follow pt-2 pb-2 text-center color-white-follow"></i>
                                </a>
                                <a href="" class="nav-link p-1">
                                    <i class="fa fa-twitter rounded border font-size-15 font-size-xs-10 button-follow pt-2 pb-2 text-center color-white-follow"></i>
                                </a>
                                <a href="" class="nav-link p-1">
                                    <i class="fa fa-facebook rounded border font-size-15 font-size-xs-10 button-follow pt-2 pb-2 text-center color-white-follow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerBotWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-lg-flex copyRight p-0">
                        <div class="col-md-6 col-12">
                            <p style="margin-top: 10px;"><i class="fa fa-copyright"></i> 2019 <b>ORI.ID</b> All Rights reserved.</p>
                        </div>
                        <div class="col-md-6 col-12 text-lg-right payment pr-0 pt-lg-0 pt-4">
                            <p style="display: inline;">Pembayaran</p>
                            <a href="#"><img src="assets/footer/ikon_emphat.png" alt="Visa"></a>
                            <a href="#"><img src="assets/footer/ikon_tigha.png" alt="Master Card"></a>
                            <a href="#"><img src="assets/footer/ikon_duwa.png" alt="Paypal"></a>
                            <a href="#"><img src="assets/footer/ikon_satu.png" alt="Bank"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Modal -->
    <div class="modal fade" id="popHeader" tabindex="-1" role="dialog" aria-labelledby="popHeader" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="assets/login/logo_login.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <script>
      // $(window).on('load',function(){
      //   $('#popHeader').modal('show');
      // });
    </script>

</body>
</html>