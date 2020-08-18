<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
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

<?php
if(isset($_POST['cekout'])){

  $dtl = $_POST["dtl2"];
  $bayar = $_POST["bayar2"];
  $kembali = $_POST["kembali2"];

}
?>

  <body>
      <?php echo'<tr><td></td><td><input  type="hidden" name="dtl" id="dtl" value="'.$dtl.'"></td></tr>';?>
      <?php echo'<tr><td></td><td><input  type="hidden" name="bayar" id="bayar" value="'.$bayar.'"></td></tr>';?>
      <?php echo'<tr><td></td><td><input  type="hidden" name="kembali" id="kembali" value="'.$kembali.'"></td></tr>';?>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <h1>NOTA SEKARPER</h1>
      <div id="company" class="clearfix">
        <div>Tedi Rumpala</div>
        <div>17, Agustus 2020</div>
        <?php echo'<div>ID : '.$dtl.'</div>';?>
      </div>
      <div id="project">
        <div>Bengkel Sekarper</div>
        <div>Jl. Wonosari Km.7,5 Bantul, Yogyakarta</div>
        <div>(+62) 81123456789</div>
        <div><a href="mailto:sekarper@gmail.com">sekarper@gmail.com</a></div>
      </div>
    </header>
    <main>
      <table id="tbl_list_user">
        <thead>
          <tr>
            <th class="service">NO.</th>
            <th class="desc">NAMA BARANG</th>
            <th style=" text-align: center;">HARGA</th>
            <th style=" text-align: center;">JUMLAH</th>
            <th style=" text-align: right;">TOTAL</th>
          </tr>
        </thead>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Barang yang sudah dibeli tidak bisa ditukar atau dikembalikan.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
              <script src="js/jquery.easing.1.3.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/hm.js"></script>

    <script type="text/javascript">

                  var database = firebase.database();

                  database.ref('transaksi').orderByChild("id_detail").equalTo($('#dtl').val()).on('value', function(snapshot) {
                     var count = 0;
                     var tot_kabeh = 0;
                     if(snapshot.exists()){
                        $("#tbl_list_user tbody").remove(); 
                        var content = '<tbody>';
                        snapshot.forEach(function(data) {
                           count+=1;
                           var val = data.val();
                           content +='<tr>';
                           content += '<td class="service">' + count + '</td>';
                           content += '<td class="desc">' + val.nama_barang + '</td>';
                           content += '<td style=" text-align: center;">' + val.harga_barang + '</td>';
                           content += '<td style=" text-align: center;">' + val.jumlah + '</td>';
                           content += '<td class="total">' + val.total_harga + '</td>';
                           content +='</tr>';
                           
                           tot_kabeh = tot_kabeh + val.total_harga;
                       });
                        content += '<tr>';
                        content += '<td colspan="4" class="grand total">SUBTOTAL</td>';
                        content += '<td class="grand total">' + tot_kabeh + '</td>';
                        content += '</tr>';
                        content += '<tr>';
                        content += '<td colspan="4">BAYAR</td>';
                        content += '<td class="total">' + $('#bayar').val() + '</td>';
                        content += '</tr>';
                        content += '<tr>';
                        content += '<td colspan="4">KEMBALI</td>';
                        content += '<td class="total">' + $('#kembali').val() + '</td>';
                        content += '</tr>';
                        content += '</tbody>';
                        $('#tbl_list_user').append(content);
                    }else{
                        $("#tbl_list_user tbody").remove(); 
                    } 
                });
              </script>
  </body>
</html>
