<?php
include 'config/menampilkan_data.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    
  </head>
  <body>
      <!-- Awal Koding Navbar MENU -->
      <header>
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="HalamanUtama.php"><b>WebLearning</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="HalamanUtama.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="Profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kontak.php">Kontak</a>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <label class="sbb-wrap" id="yui_3_10_0_1_1604635909584_312"><input type="submit" class="sbb" value="Cari" tabindex="2" id="yui_3_10_0_1_1604635909584_311"></label>
                    <div class="nav-link"><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="darkSwitch">
                      <label class="custom-control-label" for="darkSwitch">🌗</label></div></div>
                    <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="index.php" role="button">Logout</a>
                </form>
                </div>
              </nav>
          </div>
      </header>
      <!-- Akhir Koding Navbar MENU -->

      <!-- Awal Banner/Header -->
      <header class="jumbotron jumbotron-fluid bg-dark text-white m-0">
        <div class="container"><div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
          <h1 class="h1">Selamat Datang, Anla Rijabani Ramsus</h1>
          <p class="lead">DI Pembelajaran Pemrograman Web</p>
          <p class="lead">Mulai belajar!</p>
          </div></div></div></header>
      <!-- Akhir Banner/Header -->
 
       <!-- Awal Konten -->
       <a href="form_materi.php" class="btn btn-primary">Tambahkan Materi</a></div></div></div></header>

 <div class="row">
    <?php while ($row = $q->fetch()) :
      $id = $row['id'];
      $title = $row['judul'];
      $desc = $row['deskripsi'];
      $img = $row['image'];
    ?>
      <div class="col-md-3 mb-3">
        <div class="card">
          <img src=<?php echo $img; ?> class="card-img-top" alt="Gambar">
          <div class="card-body">
            <h6 class="card-title text-info"><?php echo $title; ?></h6>
            <h6 class="card-text"><a href="materi.php?id=<?php echo $id ?>" class="text-primary">
                <?php echo $title; ?></h6></a>
            <p class="card-text"><small class="text-muted"><?php echo $desc; ?></small></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>



  </div>
  </div>
  </div>
  <div>
       <!-- Akhir Konten -->
      
       <!-- Awal Footer Bawah-->
     <footer class="warna-bg">
        <div class="text-white text-center pt-3 pb-3">
        @Copyrigth by 18111020_AnlaRijabaniRamsus_TIFRP18CIDB_UASWEB1
        </div>
    </footer>
  <!-- Awal Footer Bawah-->
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    
    

  </body>
</html>