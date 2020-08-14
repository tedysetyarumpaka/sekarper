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
    <title>Beranda</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

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


<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
<script src="js/Chart.js"></script>
</head>

<body class="animsition" >

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
                            <a href="logout_aksi_admin.php" onclick="logout()" style="margin-left: -4px">
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
                    <img src="images/icon/logo.png" />
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
                            <a href="logout_aksi_admin.php" onclick="logout()" style="margin-left: -4px">
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
            <!-- HEADER DESKTOP-->
          

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">INFORMASI BENGKEL</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <input type="text" name="perhari" id="perhari" readonly="readonly" style=" background-color: #00b5e9; color: #ffffff; font-size: 24px"><br>
                                                <span>Pendapatan perhari</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <input type="text" name="perbulan" id="perbulan" readonly="readonly" style="background-color: #00b5e9; color: #ffffff; font-size: 24px"><br>
                                                <span>Pendapatan perbulan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <input type="text" name="itung" id="itung" readonly="readonly" style="background-color: #00b5e9; color: #ffffff; font-size: 24px"><br>
                                                <span>Jumlah pelanggan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">   
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <h3 class="title-3 m-b-30">CEK PENDAPATAN</h3>
                                    <input style="font-size: 30px" type="text" id="pendapatan" name="pendapatan" value="Total : Rp. 0" disabled class="btn btn-lg btn-info btn-block">
                                    <br>
                                    <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Dari tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="date" name="dari" id="dari"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Sampai tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="date" name="sampai" id="sampai"  class="form-control">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-12 col-md-12" align="center">
                                                <button class="btn btn-info btn-sm" onclick="cek()">
                                                    <i class="fa fa-dot-circle-o"></i> CEK PENDAPATAN
                                                </button>
                                                <button type="RESET" class="btn btn-danger btn-sm" name="cari3">
                                                    <i class="fa fa-ban"></i> RESET
                                                </button>
                                            </div>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Grafik Pendapatan Perbulan</h3>
                                        <br>
                                        <div class="recent-report__chart">
                                            <canvas id="linechart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Slowly Glory. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
                var database2 = firebase.database();

                var date = new Date();

                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var year = date.getFullYear();

                        if (month < 10) month = "0" + month;
                        if (day < 10) day = "0" + day;

                        var tgl = day+"/"+month+"/"+year;
                        var tgl2 = month+"/"+year;

                database.ref('transaksi').orderByChild("tanggal_transaksi").equalTo(tgl).on('value', function(snapshot) {
                     var tot_kabeh = 0;
                     var itung = 0;
                     if(snapshot.exists()){
                        snapshot.forEach(function(data) {
                           var val = data.val();
                           tot_kabeh = tot_kabeh + val.total_harga;
                           itung++;
                       });
                    } 
                    if(tot_kabeh == 0){
                    document.getElementById("perhari").value = "Rp. 0";  
                    }
                    else
                    {
                    document.getElementById("perhari").value = "Rp. "+tot_kabeh;
                    }

                    if(itung == 0){
                    document.getElementById("itung").value = "0";  
                    }
                    else
                    {
                    document.getElementById("itung").value = ""+itung;
                    }
                });

                database2.ref('transaksi').orderByChild("bulan").equalTo(tgl2).on('value', function(snapshot) {
                     var tot_kabeh = 0;
                     var itung = 0;
                     if(snapshot.exists()){
                        snapshot.forEach(function(data) {
                           var val = data.val();
                           tot_kabeh = tot_kabeh + val.total_harga;
                           itung++;
                       });
                    } 
                    if(tot_kabeh == 0){
                    document.getElementById("perbulan").value = "Rp. 0";  
                    }
                    else
                    {
                    document.getElementById("perbulan").value = "Rp. "+tot_kabeh;
                    }
                });

                function cek(){

                    var dari =$('#dari').val();
                    var sampai =$('#sampai').val();
                    var dariArr = dari.split("-");
                    var sampaiArr = sampai.split("-");

                    var newDari = dariArr[2]+"/"+dariArr[1]+"/"+dariArr[0];
                    var newSampai = sampaiArr[2]+"/"+sampaiArr[1]+"/"+sampaiArr[0];

                    database.ref('transaksi').orderByChild("tanggal_transaksi").startAt(newDari).endAt(newSampai).on('value', function(snapshot) {
                     var tot_kabeh = 0;
                     if(snapshot.exists()){
                        snapshot.forEach(function(data) {
                           var val = data.val();
                           tot_kabeh = tot_kabeh + val.total_harga;
                       });
                    } 
                    document.getElementById("pendapatan").value = "Total : Rp. "+tot_kabeh;  
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

    <script  type="text/javascript">

        var database3 = firebase.database();

                var date = new Date();

                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var year = date.getFullYear();

                        if (month < 10) month = "0" + month;
                        if (day < 10) day = "0" + day;

                        var tgl3 = month+"/"+year;

                database3.ref('transaksi').orderByChild("bulan").equalTo(tgl3).on('value', function(snapshot) {
                    var dino = [];
                    var totale = [];
                     if(snapshot.exists()){
                        snapshot.forEach(function(data) {
                           var val = data.val();

                           var tgllist = val.tanggal_transaksi.split("/");
                           var cek1 = tgllist[0].substring(0, 1);
                           if(cek1 == "0")
                           {
                            var cek2 = tgllist[0].substring(1, 2);
                            dino.push(cek2);
                           }
                       else
                       {
                        dino.push(tgllist[0]);
                       }
                       totale.push(val.total_harga);
                       });
                    } 

                    var angka_lama = 0;
                    var dinoNew = [];
                    var totaleNew = [];
                    var total_sementara = 0;

                    for(let i = 0; i < dino.length; i++){

                        if(i == 0)
                        {
                            dinoNew.push(dino[i]);
                            angka_lama = dino[i];
                            total_sementara = totale[i];
                        }
                        else
                        {
                            if(dino[i] == angka_lama)
                            {
                                angka_lama = dino[i];
                                total_sementara = total_sementara + Number(totale[i]); 
                            }
                            else
                            { 
                                totaleNew.push(total_sementara);  
                                dinoNew.push(dino[i]);
                                angka_lama = dino[i];
                                total_sementara = totale[i];
                            }
                        }

                        if(i == (dino.length-1))
                        {
                            totaleNew.push(total_sementara);
                        }
      
                    }

                    var da = [];
                    var bool = false;

                for(let j = 0; j < 30; j++){

                    var totsem = 0;

                    for(let k = 0; k < dinoNew.length; k++){

                        if(dinoNew[k] == (j+1))
                        {
                         bool = true;   
                         totsem = totaleNew[k];
                        }

                    }

                    if(bool){
                    da.push(""+totsem);
                    }
                    else{
                    da.push("0");
                    }   

                    bool = false;                 

                }

                var ctx = document.getElementById("linechart").getContext("2d");
      var data = {
        labels: ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30"],
        datasets: [
        {
            label: "Pendapatan",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#29B0D0",
            borderColor: "#29B0D0",
            pointHoverBackgroundColor: "#29B0D0",
            pointHoverBorderColor: "#29B0D0",
            data: [da[0],da[1],da[2],da[3],da[4],da[5],da[6],da[7],da[8],da[9],da[10],da[11],da[12],da[13],da[14],da[15],da[16],da[17],da[18],da[19],da[20],da[21],da[22],da[23],da[24],da[25],da[26],da[27],da[28],da[29]]
        }
        ]
    };

    var myBarChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            legend: {
              display: true
          },
          barValueSpacing: 20,
          scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                  gridLines: {
                      color: "rgba(0, 0, 0, 0)",
                  }
              }]
          }
      }
  });

                });
</script>

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

<script>

    function logout(){
      firebase.auth().signOut();
    }


  </script>


</body>

</html>
<!-- end document-->
