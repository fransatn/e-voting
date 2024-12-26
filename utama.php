<?php
    session_start();

if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
    include("koneksi/koneksi.php");
    define("INDEX",true);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Voting</title>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="asset/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="asset/alert/dist/sweetalert.css">
    <script type="text/javascript" src="asset/alert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" type="text/css" href="asset/alert/pace/pace.css">
    <script type="text/javascript" src="asset/alert/pace/pace.js"></script>

    <script type="text/javascript" src="asset/alert/grafik/Chart.bundle.min.js"></script>

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header-section">
        <div class="container">
            <div class="logo">
               <a href="#" class="primary-btn top-btn">E-Voting</a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="?page=home">Home</a></li>
                        <li><a href="?page=calon">Calon</a></li>
                        <li><a href="?page=grafik">Hasil Suara</a></li>
                    </ul>
                </nav>
                <a href="logout.php" class="primary-btn top-btn">Logout</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <?php include ("modul.php"); ?>

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="ft-logo">
                            <a href="#" class="footer-logo"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="?page=home">Home</a></li>
                            <li><a href="?page=calon">Calon</a></li>
                            <li><a href="?page=grafik">Hasil Suara</a></li>
                        </ul>
                        <div class="copyright-text"><p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Book E-Voting | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p></div>
                        <div class="ft-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/jquery.countdown.min.js"></script>
    <script src="asset/js/jquery.slicknav.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>

<?php
    }else{
        echo"Dilarang membuka halaman ini!";
        echo"<meta http-equiv='refresh' content='1; url=index.php'>";
    }
?>
