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
    <title>Supplier</title>

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

    <script type = "text/javascript" >
        function preventBack(){window.history.forward();}
        setTimeout("preventBack()", 0);
        window.onunload=function(){null};
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

    <style>
            .autocomplete-suggestions {
                border: 1px solid #999;
                background: #FFF;
                overflow: auto;
            }
            .autocomplete-suggestion {
                padding: 2px 5px;
                white-space: nowrap;
                overflow: hidden;
            }
            .autocomplete-selected {
                background: #F0F0F0;
            }
            .autocomplete-suggestions strong {
                font-weight: normal;
                color: #3399FF;
            }
            .autocomplete-group {
                padding: 2px 5px;
            }
            .autocomplete-group strong {
                display: block;
                border-bottom: 1px solid #000;
            }
        </style>
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
                    <h2 class="title-1">Menu Admin</h2>
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <h8 class="title-1" align="center">ADMIN</h8>
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
                            <a class="js-arrow" href="#" style="margin-left: -4px">
                                <img src="icon/manajemen.jpg" style="width: 50px"> &nbsp;Manajemen data</center></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="user.php">- Data User</a>
                                </li>
                                <li>
                                    <a href="barang.php">- Data Barang</a>
                                </li>
                                <li>
                                    <a href="supplier.php">- Data Supplier</a>
                                </li>
                            </ul>
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
                            <h8 class="title-1" align="center">ADMIN</h8>
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
                                    <a class="js-arrow" href="#" style="margin-left: -4px">
                                        <img src="icon/manajemen.jpg" style="width: 50px"> &nbsp;Manajemen data</center></a>
                                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                            <li>
                                                <a href="user.php">- Data User</a>
                                            </li>
                                            <li>
                                                <a href="barang.php">- Data Barang</a>
                                            </li>
                                            <li>
                                                <a href="supplier.php">- Data Supplier</a>
                                            </li>
                                        </ul>
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
                                <h3 class="title-3 m-b-30"><i class="fas fa-users"></i>KELOLA DATA SUPPLIER</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <form class="form-header" action="obat.php" method="POST">
                                            <input class="au-input au-input--xl" type="text" name="nt" placeholder="Pencarian..." />
                                            <button class="au-btn--submit" type="submit" name="cari2">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small btnTambahData" data-toggle="modal" onclick="cleardata()" data-target="#exampleModal"><i class="zmdi zmdi-plus"></i>Tambah Data</button>
                                        </div> 
                                </div>

                                <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning" id="tbl_list_user">
                                  <thead>
                                     <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. HP</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel"></h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <form action="" method="POST" enctype="multipart/form-data">
                                   <div class="modal-body">     
                                      <input type="hidden" name="id" id="id">
                                      <div class="form-group">
                                         <label for="nama">Nama</label>
                                         <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required="true">
                                     </div>
                                     <div class="form-group">
                                         <label for="alamat">Alamat</label>
                                         <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat" required="true">
                                     </div>
                                      <div class="form-group">
                                         <label for="hp">No. HP</label>
                                         <input type="text" name="hp" id="hp" class="form-control" placeholder="Masukkan No. HP" required="true">
                                     </div>
                                 </div>

                                 <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" onclick="tambahData()" data-dismiss="modal">Simpan</button>
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
                  var database = firebase.database();

                  var key = 0;

                  database.ref("supplier").orderByKey().limitToLast(1).on('child_added',function(data) {
                     key = parseInt(data.key, 10);
                     key = key + 1;
                 });

                  database.ref('supplier').on('value', function(snapshot) {
                     var count = 0;
                     if(snapshot.exists()){
                        $("#tbl_list_user tbody").remove(); 
                        var content = '<tbody>';
                        snapshot.forEach(function(data) {
                           count+=1;
                           var val = data.val();
                           content +='<tr>';
                           content += '<td>' + count + '</td>';
                           content += '<td>' + val.nama + '</td>';
                           content += '<td>' + val.alamat + '</td>';
                           content += '<td>' + val.hp + '</td>';
                           content += '<td> <button class="btn btn-danger" onclick="hapusData(' + data.key + ')"> Hapus Data </button> <button class="btn btn-primary tampilModalUbah" onclick="setData('+ data.key +')" data-toggle="modal" data-target="#exampleModal">Edit Data</button>  </td>';
                           content +='</tr>';
                           key = 0;
     key = parseInt(data.key, 10);
     key = key + 1;
                       });

                        content += '</tbody>';
                        $('#tbl_list_user').append(content);
                    }else{
                        $("#tbl_list_user tbody").remove(); 
                    }  
                });


                  function tambahData(){
                     if($('#exampleModalLabel').text() == "Tambah Data Baru"){

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

                        var today = "SPR" + year + month + day + jam + detik + mldetik;

                       database.ref('supplier/' + key).set({
                           key : key,
                           id_supplier : today,
                           nama: $('#nama').val(),
                           alamat : $('#alamat').val(),
                           hp   : $('#hp').val()
                       });

                       alert("Data Berhasil ditambah");
                   }else if($('#exampleModalLabel').text() == "Ubah Data"){
                    database.ref('supplier/' + $('#id').val()).update({
                       nama : $('#nama').val(),
                       alamat : $('#alamat').val(),
                       hp   : $('#hp').val()
                   });
                    alert("Data Berhasil diupdate");
                }
            } 


            function cleardata(){
             $('#id').val("");
             $('#nama').val("");
             $('#alamat').val("");
             $('#hp').val("");
         }


         function setData(id){
             $('#exampleModalLabel').html('Ubah Data');   
             database.ref('supplier/').child(id).once('value').then( function(snap) {
                 const user = snap.val()
                 $('#id').val(id);
                 $('#nama').val(user.nama);
                 $('#alamat').val(user.alamat);
                 $('#hp').val(user.hp);
             });
         }


         function hapusData(id){
             var answer = confirm("Hapus Data..?");
             if (answer) {
                 database.ref('supplier/' + id).remove();
                 alert("Data Berhasil dihapus");
             }
         } 

         $('.btnTambahData').on('click', function(){
            $('#exampleModalLabel').html('Tambah Data Baru');
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

    <script src="jquery.autocomplete.min.js"></script>

</body>

</html>
<!-- end document-->
