<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index-Siswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">


  <!--  Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/0921561578.js" crossorigin="anonymous"></script>

 <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

<body>





        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

            <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#dasis">Data Siswa</a></li>
                <li><a class="nav-link scrollto" href="#nilai">Nilai</a></li>
                <li><a class="nav-link scrollto" href="#dagur">Data Guru</a></li>
                <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
            </ul>
            <ul>
            <li><a class="btn btn-warning text-dark" href="../logout.php" role="button">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </header><!-- End Header -->





        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
            <h1>WELCOME TO,</h1>
            <h2>SMK Negeri 4 Padalarang Page</h2>
            <a href="#dasis" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
            </div>
        </section><!-- End Hero -->

        <main id="main">





     <hr>
     <hr>





        <!-- ======= Data Siswa ======= -->
        <section id="dasis" class="about">
        <div class="container">

            <div class="section-title">
            <h1>DATA SISWA</h1>
            </div>

            <div class="tabel mt-lg-5">
                            <table class="table table-hover table-sm">
                                <thead class="table text-dark">
                                <tr>
                                    <th class="text-center" scope="col">NO</th>
                                    <th class="text-center" scope="col">NISN</th>
                                    <th class="text-center" scope="col">NAMA</th>
                                    <th class="text-center" scope="col">KELAS</th>
                                    <th class="text-center" scope="col">TANGGAL LAHIR</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <?php
                                    include "../function.php";
                                    $no = 1;
                                    $query = mysqli_query($db, 'SELECT * FROM siswa');
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td class="text-center" ><?php echo $no++ ?></td>
                                    <td class="text-center" ><?php echo $data['nisn'] ?></td>
                                    <td class="text-center" ><?php echo $data['nama'] ?></td>
                                    <td class="text-center" ><?php echo $data['kelas'] ?></td>
                                    <td class="text-center" ><?php echo $data['tanggallahir'] ?></td>
                                </tr>                                                                           
                                <?php } ?>
                                </tbody>
                        </table>
                    </div>

                    <br>

                

        </section>
        <!-- End Data Siswa -->





    <hr>
    <hr>





 

    <!-- ======= Nilai ======= -->
    <section id="nilai" class="Nilai">
      <div class="container">

        <div class="section-title">
            <h1>NILAI</h1>
        </div>

        <div class="tabel mt-lg-5">
                            <table class="table table-hover table-sm">
                                <thead class="table text-dark">
                                <tr>
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">NISN</th>
                                    <th class="text-center" scope="col">MAPEL</th>
                                    <th class="text-center" scope="col">NILAI-1</th>
                                    <th class="text-center" scope="col">NILAI-2</th>
                                    <th class="text-center" scope="col">NILAI-3</th>
                                    <th class="text-center" scope="col">NILAI AKHIR</th>
                                    <th class="text-center" scope="col">KETERANGAN</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <?php
                                    $query = mysqli_query($db, 'SELECT * FROM nilai');
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td class="text-center" ><?php echo $data['id'] ?></td>
                                    <td class="text-center" ><?php echo $data['nisn'] ?></td>
                                    <td class="text-center" ><?php echo $data['mapel'] ?></td>
                                    <td class="text-center" ><?php echo $data['nilai_1'] ?></td>
                                    <td class="text-center" ><?php echo $data['nilai_2'] ?></td>
                                    <td class="text-center" ><?php echo $data['nilai_3'] ?></td>
                                    <td class="text-center" >
                                        <?php 
                                        $nilai_1 = $data['nilai_1'];
                                        $nilai_2 = $data['nilai_2'];
                                        $nilai_3 = $data['nilai_3'];

                                        $nilai_akhir = ($nilai_1 + $nilai_2 + $nilai_3)/3;
                                        echo $nilai_akhir
                                        ?>
                                    <td class="text-center" >
                                        <?php 

                                        if ($nilai_akhir > 90){
                                        echo "A";
                                        }

                                        elseif ($nilai_akhir >= 70){
                                        echo "B";
                                        }

                                        else {
                                            echo "C";
                                        }
                                        
                                        ?>
                                        </td>   
                                </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                    </div>


        
    </section>
    <!-- End Nilai -->




    <hr>
    <hr>




   <!-- ======= Data Guru ======= -->
   <section id="dagur" class="resume">
      <div class="container">

        <div class="section-title">
          <h1>DATA GURU</h1>
        </div>

        <div class="tabel mt-lg-5">
                            <table class="table table-hover table-sm">
                                <thead class="table text-dark">
                                <tr>
                                    <th class="text-center" scope="col">NO</th>
                                    <th class="text-center" scope="col">NIP</th>
                                    <th class="text-center" scope="col">NAMA</th>
                                    <th class="text-center" scope="col">JABATAN</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <?php
                                    $no = 1;
                                    $query = mysqli_query($db, 'SELECT * FROM guru');
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td class="text-center" ><?php echo $no++ ?></td>
                                    <td class="text-center" ><?php echo $data['nip'] ?></td>
                                    <td class="text-center" ><?php echo $data['nama'] ?></td>
                                    <td class="text-center" ><?php echo $data['jabatan'] ?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                    </div>

                    <br>



    </section>
    <!-- End Data Guru -->





    <hr>
    <hr>



    
    


    <!-- ======= Galeri ======= -->
    <section id="galeri" class="portfolio">
      <div class="container">

      <div class="container">

        <div class="section-title">
            <h1>GALERI</h1>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../assets/img/slider/slide-1.jpg" class="d-block w-100" alt="slide-1">
            </div>
            <div class="carousel-item">
            <img src="../assets/img/slider/slide-2.jpg" class="d-block w-100" alt="slide-2">
            </div>
            <div class="carousel-item">
            <img src="../assets/img/slider/slide-3.jpg" class="d-block w-100" alt="slide-3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

    </section>
    <!-- End Galeri -->





    <hr>
    <hr>




    

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>M. Aby Pahrul</h3>
      <p>Tidak akan ada satu juta jika kurang seratus perak</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Abyy</span></strong>. Ingyah
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>