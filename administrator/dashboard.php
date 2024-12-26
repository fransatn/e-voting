<?php
	session_start();
	
	if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
		include("../koneksi/koneksi.php");
		define("INDEX",true);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Voting</title>

  <link href="asset-admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset-admin/css/datepicker3.css" rel="stylesheet">
  <link href="asset-admin/css/styles.css" rel="stylesheet">
  <script src="asset-admin/js/lumino.glyphs.js"></script>
  <link rel="stylesheet" type="text/css" href="asset-admin/alert/dist/sweetalert.css">
  <script type="text/javascript" src="asset-admin/alert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset-admin/alert/pace/pace.css">
  <script type="text/javascript" src="asset-admin/alert/pace/pace.js"></script>
  <script type="text/javascript" src="asset-admin/grafik/Chart.bundle.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>E</span>Voting</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                <use xlink:href="#stroked-male-user"></use>
              </svg> User <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="?page=ubah_akun"><svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-male-user"></use>
                  </svg> Ubah Akun</a></li>
              <li><a href="logout.php"><svg class="glyph stroked cancel">
                    <use xlink:href="#stroked-cancel"></use>
                  </svg> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li class="active"><a href="?page=home"><svg class="glyph stroked dashboard-dial">
            <use xlink:href="#stroked-dashboard-dial"></use>
          </svg> Dashboard</a></li>

      <li><a href="?page=profil"><svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use>
          </svg> Profil</a></li>

      <li><a href="?page=jurusan"><svg class="glyph stroked table">
            <use xlink:href="#stroked-table"></use>
          </svg> Data Jurusan</a></li>

      <li><a href="?page=kelas"><svg class="glyph stroked table">
            <use xlink:href="#stroked-table"></use>
          </svg> Data Kelas</a></li>

      <li><a href="?page=calon"><svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use>
          </svg> Data Calon</a></li>

      <li><a href="?page=pemilih"><svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use>
          </svg> Data Pemilih</a></li>

      <li><a href="?page=hasil"><svg class="glyph stroked line-graph">
            <use xlink:href="#stroked-line-graph"></use>
          </svg> Hasil Pemilihan</a></li>
  </div>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home">
              <use xlink:href="#stroked-home"></use>
            </svg></a></li>
        <li class="active">Icons</li>
      </ol>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="canvas-wrapper">
              <?php include "modul.php";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <script src="asset-admin/js/jquery-1.11.1.min.js"></script>
  <script src="asset-admin/js/bootstrap.min.js"></script>
  <script src="asset-admin/js/chart.min.js"></script>
  <script src="asset-admin/js/chart-data.js"></script>
  <script src="asset-admin/js/easypiechart.js"></script>
  <script src="asset-admin/js/easypiechart-data.js"></script>
  <script src="asset-admin/js/bootstrap-datepicker.js"></script>
</body>

</html>
<?php
	}else{
		echo"Halaman Tidak Dapat Dibuka!";
		echo"<meta http-equiv='refresh' content='1; url=index.php'>";
	}
?>