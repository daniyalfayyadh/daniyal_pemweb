<?php
include "koneksi.php";

if (isset($_POST['Bayar'])){
    mysqli_query($koneksi,"insert into pembayaran set
    Nama = '$_POST[Nama]',
    Alamat   = '$_POST[Alamat]',
    NoHp     = '$_POST[NoHp]',
    Nama_Barang    = '$_POST[Nama_Barang]',
    Harga_barang   = '$_POST[Harga_barang]',
    Metode_Pembayaran = '$_POST[metode]'");


    if ($_POST['Bayar']){
      echo "<script>alert('Transaksi Berhasil, Silahkan menunggu barang anda dikirim');window.location='indexuser.php'</script>";
      }
    

}
?>
<!doctype html>
<html lang="en">

  <link rel="stylesheet" href="daftar.css">
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>PEMBAYARAN</h2>
        <div class="underline-title"></div>
      </div>
        <form method="post" class="form">
            <label for="nama" style="padding-top:13px">&nbsp;Nama</label>
          <input id="nama" class="form-content" type="nama" name="Nama" autocomplete="on" required />
          <div class="form-border"></div>

            <label for="user-Alamat" style="padding-top:13px">&nbsp;Alamat</label>
          <input id="user-Alamat" class="form-content" type="Alamat" name="Alamat" autocomplete="on" required />
          <div class="form-border"></div>

            <label for="user-NoHp" style="padding-top:13px">&nbsp;No.HP</label>
          <input id="user-NoHp" class="form-content" type="NoHp" name="NoHp" autocomplete="on" required />
          <div class="form-border"></div>

          <label for="user-Nama-barang" style="padding-top:13px">&nbsp;Nama Barang</label>
          <input id="user-Nama-barang" class="form-content" type="Nama-barang" name="Nama_Barang" autocomplete="on" required />
          <div class="form-border"></div>

          <label for="user-jumlah-barang" style="padding-top:13px">&nbsp;Harga Barang</label>
          <input id="user-harga_barang" class="form-content" type="harga_barang" name="Harga_barang" autocomplete="on" required />
          <div class="form-border"></div>

        <label for="user-metode-pembayaran" style="padding-top:22px">&nbsp;Metode Pembayaran</label>
        <br>
        
        <select id="metode pembayaran" type="jumlah_barang" name="metode">
        <option value="COD"> COD</option>
        <option value="BCA">BCA</option>
        <option value="BRI">BRI</option>
        
        </select>

        <input id="submit-btn" type="submit" name="Bayar" value="BELI" />
      </form>
    
  
</body>



</html>