<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Pembayaran</title>

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

    <link rel="stylesheet" type="text/css" href="js/jquery-ui.css">

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
                    <h2 class="title-1">Menu Pembayaran</h2>
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
                                <h3 class="title-3 m-b-30"><i class="fas fa-users"></i>DATA PEMBAYARAN</h3>
                                
                                <form method="POST" class="form_input" enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="nama" class=" form-control-label">Nama Barang</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="input-group control-group2 after-add-more2">
                                             <input  type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama barang" required="true">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="jumlah" class=" form-control-label">Jumlah</label>
                                    </div>
                                    <div class="col-12 col-md-9">

                                        <div class="input-group control-group2 after-add-more2">
                                         <input  type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan jumlah" required="true">
                                         &nbsp&nbsp;
                                         <div class="input-group-btn"> 
                                            <button type="button" class="btn btn-primary" onclick="tambahData()">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>

                                <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning" id="tbl_list_user">
                                  <thead>
                                     <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Nama barang</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                            </div>

                            <input type="hidden" name="dtl" id="dtl" class="form-control">
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="total123" class=" form-control-label">Total harga</label>
                                    </div>
                                    <div class="col-12 col-md-9">

                                        <div class="input-group control-group2 after-add-more2">
                                         <input  type="text" name="total123" id="total123" class="form-control" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="bayar" class=" form-control-label">Bayar</label>
                                    </div>
                                    <div class="col-12 col-md-9">

                                        <div class="input-group control-group2 after-add-more2">
                                         <input  type="text" name="bayar" id="bayar" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="kembalian" class=" form-control-label">Kembalian</label>
                                    </div>
                                    <div class="col-12 col-md-9">

                                        <div class="input-group control-group2 after-add-more2">
                                         <input  type="text" name="kembalian" id="kembalian" class="form-control" readonly="readonly">
                                         &nbsp&nbsp;
                                         <div class="input-group-btn"> 
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small btnTambahData" data-toggle="modal" id="cekout" onclick="cekout()" data-target="#exampleModal">Cekout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel"></h5>
                                  </div>
                                  <form action="nota.php" method="POST">   
                                         <input type="hidden" name="dtl2" id="dtl2" class="form-control">
                                         <input type="hidden" name="bayar2" id="bayar2" class="form-control">
                                         <input type="hidden" name="kembali2" id="kembali2" class="form-control">
                                 <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="submit" value="Cetak nota" name="cekout" class="btn btn-primary"/>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>

              <!-- <script src="js/jquery.js"></script>     -->

              <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
              <script src="js/jquery.easing.1.3.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/hm.js"></script>

              <script type="text/javascript">

                var date = new Date();

                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                var jam = (date.getHours()<10?'0':'') + date.getHours() + (date.getMinutes()<10?'0':'') + date.getMinutes();

                var detik = date.getSeconds();
                var mldetik = date.getMilliseconds();

                if (month < 10) month = "0" + month;
                if (day < 10) day = "0" + day;

                var dtl = "DTL" + year + month + day + jam + detik + mldetik;
                document.getElementById("dtl").value = dtl;

              </script>              

              <script type="text/javascript">

                  var database = firebase.database();
                  var database2 = firebase.database();
                  var database3 = firebase.database();
                  const button = document.getElementById("cekout");

                  if($('#bayar').val() == "")
                    {
                        button.disabled = true;
                    }
                    else
                    {
                        button.disabled = false;
                    }

                  var key = 0;
                  var key2 = 0;

                  database.ref("transaksi").orderByKey().limitToLast(1).on('child_added',function(data) {
                     key = parseInt(data.key, 10);
                     key = key + 1;
                 });

                  database2.ref("detail_transaksi").orderByKey().limitToLast(1).on('child_added',function(data) {
                     key2 = parseInt(data.key, 10);
                     key2 = key2 + 1;
                 });

                  database.ref('transaksi').orderByChild("id_detail").equalTo("").on('value', function(snapshot) {
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
                           content += '<td>' + val.jumlah + '</td>';
                           content += '<td>' + val.nama_barang + '</td>';
                           content += '<td>' + val.harga_barang + '</td>';
                           content += '<td>' + val.total_harga + '</td>';
                           content += '<td> <button class="btn btn-danger" onclick="hapusData(' + data.key + ')"> Hapus Data </button></td>';
                           content +='</tr>';
                           key = 0;
                           key = parseInt(data.key, 10);
                           key = key + 1;
                           tot_kabeh = tot_kabeh + val.total_harga;
                       });

                        content += '</tbody>';
                        $('#tbl_list_user').append(content);
                    }else{
                        $("#tbl_list_user tbody").remove(); 
                    }
                    document.getElementById("total123").value = tot_kabeh;  
                });

                  function tambahData(){


                        var nama_brg = $('#nama').val();
                        var namalist = nama_brg.split(" - ");
                        var harga = "";
                        var stok = "";
                        var kunci = "";

                        database.ref('barang').on('value', function(snapshot) {
                             if(snapshot.exists()){
                                snapshot.forEach(function(data) {
                                   var val = data.val();
                                   if(namalist[1] == val.kode_barang)
                                   {
                                        harga = val.harga_jual;
                                        stok = val.stok;
                                        kunci = val.key;
                                   }
                                });
                             }
                         });

                        var total = Number(harga) * Number($('#jumlah').val());

                        var jmlbr = (Number(stok)-Number($('#jumlah').val()));


                        if(key == 0){
                           key = 1;
                       }

                       var date = new Date();

                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var year = date.getFullYear();
                        var jam = (date.getHours()<10?'0':'') + date.getHours() + (date.getMinutes()<10?'0':'') + date.getMinutes();

                        var detik = date.getSeconds();
                        var mldetik = date.getMilliseconds();

                        if (month < 10) month = "0" + month;
                        if (day < 10) day = "0" + day;

                        var today = "TRS" + year + month + day + jam + detik + mldetik;
                        var tgl_trs = day+"/"+month+"/"+year;
                        var bulan = month+"/"+year;

                       database.ref('transaksi/' + key).set({
                           key : key, 
                           id_transaksi : today,
                           kode_barang   : namalist[1],
                           nama_barang   : namalist[0],
                           jumlah   : $('#jumlah').val(),
                           harga_barang   : harga,
                           total_harga : total,
                           tanggal_transaksi   : tgl_trs,
                           bulan   : bulan,
                           id_detail : ""
                       });

                       database.ref('barang/' + kunci).update({
                         stok : jmlbr
                       });

                       $('#nama').val("");
                       $('#jumlah').val("");


                       $(document).ready(function(){

                        var array_barang = [];

                        database.ref('barang').on('value', function(snapshot) {
                         if(snapshot.exists()){
                            snapshot.forEach(function(data) {
                                var val = data.val();
                                array_barang.push(val.nama_barang+" - "+val.kode_barang);
                            });
                        }
                        });

                        
                        
                        $("#nama").autocomplete({
                            source: array_barang
                        });

                    });
                       


                       alert("Data Berhasil ditambah");
                   }


         function hapusData(id){

            var jumlah = "";
            var kode_barang = "";


            database2.ref('transaksi').on('value', function(snapshot) {
                    if(snapshot.exists()){
                        snapshot.forEach(function(data) {
                             var val = data.val();

                             if(id == val.key)
                             {
                                jumlah = val.jumlah;
                                kode_barang = val.kode_barang;
                             }

                        });
                    }
            });

            var stok2 = "";
            var kunci2 = "";

            database2.ref('barang').on('value', function(snapshot) {
                    if(snapshot.exists()){
                        snapshot.forEach(function(data) {
                             var val = data.val();

                             if(kode_barang == val.kode_barang)
                             {
                                stok2 = val.stok;
                                kunci2 = val.key;
                             }

                        });
                    }
            });

            var restok = Number(stok2) + Number(jumlah);


             var answer = confirm("Hapus Data..?");
             if (answer) {

                database2.ref('barang/' + kunci2).update({
                   stok : restok
               });


                 database2.ref('transaksi/' + id).remove();
                 alert("Data Berhasil dihapus");
             }

             $(document).ready(function(){

                var array_barang = [];

                database2.ref('barang').on('value', function(snapshot) {
                 if(snapshot.exists()){
                    snapshot.forEach(function(data) {
                        var val = data.val();
                        array_barang.push(val.nama_barang+" - "+val.kode_barang);
                    });
                }
            });



                $("#nama").autocomplete({
                    source: array_barang
                });

            });
         } 

         function cekout(){

            if(key2 == 0){
               key2 = 1;
            }

            database.ref('detail_transaksi/'+key2).set({
             key : key2, 
             id_detail : $('#dtl').val(),
             id_user : "admin",
             total_bayar   : $('#total123').val(),
             bayar   : $('#bayar').val(),
             kembalian : $('#kembalian').val()
            });

            var harga_barangAr = [];
            var id_transaksiAr = [];
            var jumlahAr = [];
            var keyAr = [];
            var kode_barangAr = [];
            var nama_barangAr = [];
            var tanggal_transaksiAr = [];
            var bulanAr = [];
            var total_hargaAr = [];



            database.ref('transaksi').orderByChild("id_detail").equalTo("").on('value', function(snapshot) {
                             if(snapshot.exists()){
                                snapshot.forEach(function(data) {
                                   var val = data.val();
                                   
                                        harga_barangAr.push(val.harga_barang);
                                        id_transaksiAr.push(val.id_transaksi);
                                        jumlahAr.push(val.jumlah);
                                        keyAr.push(val.key);
                                        kode_barangAr.push(val.kode_barang);
                                        nama_barangAr.push(val.nama_barang);
                                        tanggal_transaksiAr.push(val.tanggal_transaksi);
                                        bulanAr.push(val.bulan);
                                        total_hargaAr.push(val.total_harga);
                                   
                                });
                             }
                         });


              for(let i = 0; i < harga_barangAr.length; i++){

                    database.ref('transaksi/' + keyAr[i]).set({
                           key : keyAr[i], 
                           id_transaksi : id_transaksiAr[i],
                           kode_barang   : kode_barangAr[i],
                           nama_barang   : nama_barangAr[i],
                           jumlah   : jumlahAr[i],
                           harga_barang   : harga_barangAr[i],
                           total_harga : total_hargaAr[i],
                           tanggal_transaksi   : tanggal_transaksiAr[i],
                           bulan : bulanAr[i],
                           id_detail : $('#dtl').val()
                       });
        
                }

                $('#dtl2').val($('#dtl').val());
                $('#bayar2').val($('#bayar').val());
                $('#kembali2').val($('#kembalian').val());

                var date = new Date();

                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                var jam = (date.getHours()<10?'0':'') + date.getHours() + (date.getMinutes()<10?'0':'') + date.getMinutes();

                var detik = date.getSeconds();
                var mldetik = date.getMilliseconds();

                if (month < 10) month = "0" + month;
                if (day < 10) day = "0" + day;

                var dtl = "DTL" + year + month + day + jam + detik + mldetik;
                document.getElementById("dtl").value = dtl;

                $('#bayar').val("");

                alert("Transaksi selesai");

            
        }

        $(document).ready(function(){
         $('.btnTambahData').on('click', function(){
            $('#exampleModalLabel').html('Mau cetak nota atau tidak?');
            $("#exampleModal").modal({
            backdrop: 'static',
            keyboard: false
        });
        });
         });

    </script> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $("#total123, #bayar").keyup(function() {
            const button = document.getElementById("cekout");

                  if($('#bayar').val() == "")
                    {
                        button.disabled = true;
                    }
                    else
                    {
                        button.disabled = false;
                    }
            var bayar  = $("#bayar").val();
            var total = $("#total123").val();

            var kembali = parseInt(bayar)-parseInt(total);
            $("#kembalian").val(kembali);
        });
    });
</script>
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
        </div>

    </div>

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

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            var array_barang = [];

            database.ref('barang').on('value', function(snapshot) {
               if(snapshot.exists()){
                    snapshot.forEach(function(data) {
                        var val = data.val();
                        array_barang.push(val.nama_barang+" - "+val.kode_barang);
                    });
                }
            });


  
            $("#nama").autocomplete({
            source: array_barang
            });

        });
    </script>

</body>

</html>
<!-- end document-->
