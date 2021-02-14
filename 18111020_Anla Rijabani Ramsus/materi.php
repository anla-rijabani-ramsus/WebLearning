<?php
require_once 'config/connection_database.php';
$id = $_GET['id'];

try {
    $sql = 'SELECT * FROM `data_materi` WHERE id = ?';
    $q = $database_connection->prepare($sql);
    $q->execute([$id]);
    $row = $q->fetch();
    $id = $row['id'];
    $title = $row['judul'];
    $desc = $row['deskripsi'];
    $img = $row['image'];
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

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
                      <a class="nav-link" href="Home.php">Profil</a>
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
          <a href="#" class="btn btn-primary">Mulai belajar!</a></div></div></div></header>
      <!-- Akhir Banner/Header -->
 
       <!-- Awal Konten -->
       <div class="container">
      <div class="row">
      <div class="col-sm-9 col-xs-12 konten">
          <img src=<?php echo $img; ?>>
          <h6 class="card-title text-info"><?php echo $judul; ?></h6>
          <blockquote class="blockquote text-center">
			<p><?php echo $descripsi; ?></p>
			<footer class="blockquote-footer"><?php echo $footer; ?></footer>
		</blockquote>
            <p class="spasi">Terima Kasih</p>
            
            
          
      </div>
          <!--Col 4 Awal-->
          <div class="col-sm-3 col-xs-12 sidebar">
            <h3>Pencarian</h3>
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <input class="form-control" type="text" placeholder="Cari"> <!--form cari-->

              <!--web-->
              <div class="dropdown">
                <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Web
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="info1.php">Pengenalan #1</a>
                  <a class="dropdown-item" href="info1.php">Pengenalan #2</a>
                  <a class="dropdown-item" href="info1.php">Pengenalan #3</a>
                </div>
                <!--web-->

                <!--php-->
                <div class="dropdown">
                    <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Html
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="info2.php">HTML #1</a>
                      <a class="dropdown-item" href="info2.php">HTML #2</a>
                    </div>
                <!--php-->

                <!--CSS-->
                <div class="dropdown">
                    <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Css
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="info3.php">CSS #1</a>
                      <a class="dropdown-item" href="info3.php">CSS #2</a>
                    </div>
                <!--CSS-->

                <!--bOOSTRAP-->
                <div class="dropdown">
                    <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Boostrap
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="info4.php">Boostrap #1</a>
                <!--bOOSTRAP-->
              </div>
        </div>
        

    </div><!--penutup row-->
</div> <!--container-->
</div>
</div>
</div>
</div>


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