<!DOCTYPE html>
<html lang="en">

<head>
    <title>Print laporan pembayaran</title>
    <link href="style_print.css" type="text/css" rel="stylesheet" />

</head>

<?php
if(isset($_POST['cetak'])){

  $dari = $_POST["dari"];
  $sampai = $_POST["sampai"];

}
                    $dariArr = explode ("-",$dari);
                    $sampaiArr = explode ("-",$sampai);

                    $newDari = $dariArr[2]."/".$dariArr[1]."/".$dariArr[0];
                    $newSampai = $sampaiArr[2]."/".$sampaiArr[1]."/".$sampaiArr[0];
?>

<body>

<?php echo'<input type="hidden" id="dari" value="'.$newDari.'">';?>
<?php echo'<input type="hidden" id="sampai" value="'.$newSampai.'">';?>

<h3  align="center">LAPORAN PEMBAYARAN</h3>
                    
                                    <table border="1" width="90%" style="border-collapse:collapse;" align="center" id="tbl_list_user">
                                        <thead>
                                            <tr class="tableheader">
                                                <th rowspan="1">no</th>
                                                <th>Tanggal</th>
                                                <th>kode pembayaran</th>
                                                <th>Nama barang</th>
                                                <th>Banyaknya</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                    </table>

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

                    var dari =$('#dari').val();
                    var sampai =$('#sampai').val();

                  database.ref('transaksi').orderByChild("tanggal_transaksi").startAt(dari).endAt(sampai).on('value', function(snapshot) {
                     var count = 0;
                     var tot_kabeh = 0;
                     if(snapshot.exists()){
                        $("#tbl_list_user tbody").remove(); 
                        var content = '<tbody>';
                        snapshot.forEach(function(data) {
                           count+=1;
                           var val = data.val();
                           content +='<tr>';
                           content += '<td align="center">' + count + '</td>';
                           content += '<td align="center">' + val.tanggal_transaksi + '</td>';
                           content += '<td align="center">' + val.id_transaksi + '</td>';
                           content += '<td align="center">' + val.nama_barang + '</td>';
                           content += '<td align="center">' + val.jumlah + '</td>';
                           content += '<td align="center">' + val.harga_barang + '</td>';
                           content += '<td align="center">' + val.total_harga + '</td>';
                           content +='</tr>';

                           tot_kabeh = tot_kabeh + val.total_harga;
                       });

                        content += '</tbody>';
                        $('#tbl_list_user').append(content);
                    }else{
                        $("#tbl_list_user tbody").remove(); 
                    } 
                });

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
