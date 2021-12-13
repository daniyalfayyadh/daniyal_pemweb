<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'milku'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM pembayaran';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

    <title>MILKU</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <h3><i class="fas fa-hat-cowboy-side mr-2"></i></h3>
        <a class="navbar-brand font-weight-bold" href="index.php">MILKU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
                <a class="nav-link" href="indexuser.php">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#produk">Produk <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="transaksi.php">Tranksaksi <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.php">log out <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
        
        </div>
      </nav>
      <div class="row mt-5">
        <div class="col-md-2 bg-light">
          <ul class="list-group p-2 pt-5">
            <li class="list-group-item d-flex justify-content-between align-items-center bg-warning">
              <i class="fas fa-list"></i>Informasi
              <span class="badge badge-primary badge-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Notifikasi
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
        </div>
        <div  class="row mt-5">
        <div class="col-md-2 bg-light">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">NoHp</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Metode Pembayaran</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
  <?php
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                      ?>
                          <tr>
                              <th><?php echo $no++ ?></th>
                              <th><?php echo $data['Nama'] ?></th>
                              <th><?php echo $data['Alamat'] ?></th>
                              <th><?php echo $data['NoHp'] ?></th>
                              <th><?php echo $data['Nama_Barang'] ?></th>
                              <th><?php echo $data['Harga_barang'] ?></th>
                              <th><?php echo $data['Metode_Pembayaran'] ?></th>
                              
                          </tr>
              <?php } ?>
</table>
</div>

        </div>
          
        </div> 
        <footer class="bg-dark text-white p-5">
          <div class="row">
            <div class="col-md-3" id="about">
              <h5>Layanan Pelanggan</h5>
              <ul>
                <li>Pusat Bantuan</li>
                <li>Cara Pembelian</li>
                <li>Pengiriman</li>
              </ul>
            </div>
            <div class="col-md-3">
              <h5>Tentang Kami</h5>
              <ul>
                <li>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt veritatis dicta debitis, voluptatibus enim vero quae distinctio esse recusandae repudiandae eaque, ipsum perspiciatis illum? Veritatis optio a facilis nostrum corrupti.
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h5>Mitra Kerjasama</h5>
              <ul>
                <li>GOJEK</li>
                <li>POS Indonesia</li>
                <li>Grab</li>
                <li>J&T</li>
                <li>JNE</li>
              </ul>
            </div>
            <div class="col-md-3">
              <h5>Hubungi Kami</h5>
              <ul>
                <li>022-463718234</li>
                <li>milku@gmail.com</li>
              </ul>
            </div>
          </div>
          </footer>
          </div>

        <div class='footer'>
          <p>copyright 2021 - <a href=''>Milku</a></p>
      </div>
      

           
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
