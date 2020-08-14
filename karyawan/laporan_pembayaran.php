<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Laporan pembayaran</title>

    <!-- Fontfaces CSS-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <h2 class="title-1">Menu Karyawan</h2>
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <h8 class="title-1" align="center">KARYAWAN</h8>
                        </li>
                        <li>
                            <a  href="index.php" style="margin-left: -4px">
                                <img src="icon/home.png" style="width: 50px"> &nbsp;Beranda</a>
                        </li>
                        <li>
                            <a href="pembayaran.php" style="margin-left: -4px">
                                <img src="icon/pembayaran.png" style="width: 50px"> &nbsp;Pembayaran</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="laporan_pembayaran.php" style="margin-left: -4px">
                                <img src="icon/laporan2.png" style="width: 50px"> &nbsp;Laporan</center></a>
                        </li>
                        <li>
                            <a href="logout_aksi_admin.php" style="margin-left: -4px">
                                <img src="icon/keluar.png" style="width: 50px"> &nbsp;Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <h8 class="title-1" align="center">KARYAWAN</h8>
                        </li>
                        <li>
                            <a  href="index.php" style="margin-left: -4px">
                                <img src="icon/home.png" style="width: 50px"> &nbsp;Beranda</a>
                        </li>
                        <li>
                            <a href="pembayaran.php" style="margin-left: -4px">
                                <img src="icon/pembayaran.png" style="width: 50px"> &nbsp;Pembayaran</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="laporan_pembayaran.php" style="margin-left: -4px">
                                <img src="icon/laporan2.png" style="width: 50px"> &nbsp;Laporan</center></a>
                        </li>
                        <li>
                            <a href="logout_aksi_admin.php" style="margin-left: -4px">
                                <img src="icon/keluar.png" style="width: 50px"> &nbsp;Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.png"/>
                                        </div>
                                        <div >
                                            <a style="color: black;" href="#">tedi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">      
                                <h3 class="title-3 m-b-30"><i class="fas fa-users"></i>LAPORAN PEMBAYARAN</h3>
                                
                                <form action="laporan.php" method="POST">
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="dari" class=" form-control-label">Dari tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="date" name="dari" id="dari" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sampai" class=" form-control-label">Sampai tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="date" name="sampai" id="sampai" class="form-control" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-12 col-md-12" align="center">
                                                <button type="button" onclick="cari()" class="btn btn-primary btn-sm" >
                                                <i class="fa fa-dot-circle-o"></i> CARI DATA
                                                </button>
                                                <a href="laporan_pembayaran.php" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> RESET
                                                </a>
                                            </div>
                                <br>
                                <br>
                                <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning" id="tbl_list_user">
                                  <thead>
                                     <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">ID pembayaran</th>
                                        <th scope="col">Nama barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                            </table>
                            </div>

                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <input class="au-btn au-btn-icon au-btn--blue au-btn--small" type="submit" name="cetak" value="Print laporan">
                                    </div>
                                </div>
                                </form>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Slowly glory. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyCjkjKg4-p3xudOdbkJf7d1maWtJTtYgHU",
        authDomain: "sekarper-9cf35.firebaseapp.com",
        databaseURL: "https://sekarper-9cf35.firebaseio.com",
        projectId: "sekarper-9cf35",
        storageBucket: "sekarper-9cf35.appspot.com",
        messagingSenderId: "304432326264"
    };
    firebase.initializeApp(config);

</script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
              <script src="js/jquery.easing.1.3.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/hm.js"></script>              

              <script type="text/javascript">

                var database = firebase.database();
                function cari(){

                    var dari =$('#dari').val();
                    var sampai =$('#sampai').val();
                    var dariArr = dari.split("-");
                    var sampaiArr = sampai.split("-");

                    var newDari = dariArr[2]+"/"+dariArr[1]+"/"+dariArr[0];
                    var newSampai = sampaiArr[2]+"/"+sampaiArr[1]+"/"+sampaiArr[0];

                  database.ref('transaksi').orderByChild("tanggal_transaksi").startAt(newDari).endAt(newSampai).on('value', function(snapshot) {
                     var count = 0;
                     var tot_kabeh = 0;
                     if(snapshot.exists()){
                        $("#tbl_list_user tbody").remove(); 
                        var content = '<tbody>';
                        snapshot.forEach(function(data) {
                           count+=1;
                           var val = data.val();
                           content +='<tr>';
                           content += '<td>' + count + '</td>';
                           content += '<td>' + val.tanggal_transaksi + '</td>';
                           content += '<td>' + val.id_transaksi + '</td>';
                           content += '<td>' + val.nama_barang + '</td>';
                           content += '<td>' + val.jumlah + '</td>';
                           content += '<td>' + val.harga_barang + '</td>';
                           content += '<td>' + val.total_harga + '</td>';
                           content +='</tr>';

                           tot_kabeh = tot_kabeh + val.total_harga;
                       });

                        content += '</tbody>';
                        $('#tbl_list_user').append(content);
                    }else{
                        $("#tbl_list_user tbody").remove(); 
                    } 
                });
              }

    </script> 

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
