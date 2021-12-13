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
          <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/susu3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/susu4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/susu5.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <h4 class="text-center font-weight-bold m-4" id="produk">PRODUK</h4>
            <div class="row mx-auto">
              <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="images/susu1.jpeg" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                  <h5 class="card-title">Susu Coklat</h5>
                  <p class="card-text">susu coklat yang membuat hidup menjadi bahagia</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><br>
                  <br>
                  <a href="#" class="btn btn-primary bg-danger" data-target="#produk1" data-toggle="modal">Detail</a>
                  <a href="pembayaran.php" class="btn btn-primary">Rp.20.000</a>
                </div>
              </div>
              <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="images/susu9.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                  <h5 class="card-title">Susu green UHT</h5>
                  <p class="card-text">susu yang membuat hidup menjadi ceria</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><br>
                  <br>
                  <a href="#" class="btn btn-primary bg-danger" data-target="#produk2" data-toggle="modal">Detail</a>
                  <a href="pembayaran.php" class="btn btn-primary">Rp.60.000</a>
                </div>
              </div>
              <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="images/susu6.jpeg" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                  <h5 class="card-title">Susu full cream</h5>
                  <p class="card-text">susu coklat yang membuat hidup menjadi sehat</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><br>
                  <br>
                  <a href="#" class="btn btn-primary bg-danger" data-target="#produk3" data-toggle="modal">Detail</a>
                  <a href="pembayaran.php" class="btn btn-primary">Rp.50.000</a>
                </div>
              </div>
              <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="images/susu8.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                  <h5 class="card-title">Susu Strawbery</h5>
                  <p class="card-text">susu strawbery yang membuat hidup menjadi love</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><br>
                  <br>
                  <a href="#" class="btn btn-primary bg-danger" data-target="#produk4" data-toggle="modal">Detail</a>
                  <a href="pembayaran.php" class="btn btn-primary">Rp.10.000</a>
                </div>
              </div>
            </div>

            <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="images/susu1.jpeg" alt="">
                      </div>
                      <div class="col-md-6">
                        <table class="table table-borderless">
                          <tr>
                            <th>Nama Produk</th>
                            <td>Susu Coklat</td>
                          </tr>
                          <tr>
                            <th>Biaya Ongkir </th>
                            <td>Standar</td>
                          </tr>
                          <tr>
                            <th>Stock Produk</th>
                            <td>1000pcs</td>
                          </tr>
                          <tr>
                            <th>Harga</th>
                            <td>Rp.20.000</td>
                          </tr>

                        </table>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button href="pembayaran.php" type="button" class="btn btn-primary">Beli</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="modal fade" id="produk2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="images/susu9.jpg "width="400" height="300" alt="">
                      </div>
                      <div class="col-md-6">
                        <table class="table table-borderless">
                          <tr>
                            <th>Nama Produk</th>
                            <td>Susu Coklat</td>
                          </tr>
                          <tr>
                            <th>Biaya Ongkir </th>
                            <td>Standar</td>
                          </tr>
                          <tr>
                            <th>Stock Produk</th>
                            <td>1000pcs</td>
                          </tr>
                          <tr>
                            <th>Harga</th>
                            <td>Rp.20.000</td>
                          </tr>

                        </table>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Beli</button>
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <div class="modal fade" id="produk3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="images/susu6.jpeg" width="400" height="350" alt="">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Susu Coklat</td>
                        </tr>
                        <tr>
                          <th>Biaya Ongkir </th>
                          <td>Standar</td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>1000pcs</td>
                        </tr>
                        <tr>
                          <th>Harga</th>
                          <td>Rp.20.000</td>
                        </tr>

                      </table>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-primary">Beli</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="produk4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <img src="images/susu8.jpg" width="400" height="350" alt="">
                  </div>
                  <div class="col-md-6">
                    <table class="table table-borderless">
                      <tr>
                        <th>Nama Produk</th>
                        <td>Susu Coklat</td>
                      </tr>
                      <tr>
                        <th>Biaya Ongkir </th>
                        <td>Standar</td>
                      </tr>
                      <tr>
                        <th>Stock Produk</th>
                        <td>1000pcs</td>
                      </tr>
                      <tr>
                        <th>Harga</th>
                        <td>Rp.20.000</td>
                      </tr>

                    </table>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary">Beli</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br></br>


  
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
