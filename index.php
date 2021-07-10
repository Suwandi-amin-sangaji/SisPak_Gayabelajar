<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SISTEM PAKAR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
<!-- Navbar -->
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">SISTEM PAKAR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
         <!-- Masthead-->
         <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">SISTEM PAKAR</div>
                <div class="masthead-heading text-uppercase">DIAGNOSA GAYA BELAJAR SISWA</div>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
            </div>
        </header>
      <!---------------- MODAL ----------------->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Lanjut ></button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </main>
   <!-- Services-->
   <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">RUMUS DIAGNOSA</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-photo-video fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visual</h4>
                        <p class="text-muted"> IF Cenderung berfikir dengan menggunakan gambar AND Suka dengan warna, garis, dan seni AND Suka bekerja diruangan sendirian AND Tidak mudah terganggu oleh keributan AND Pasif dalam berdiskusi AND Tidak pandai mengarang kata-kata
                                THEN Gaya Belajar Visual </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-volume-up fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Auditori</h4>
                        <p class="text-muted" > IF Berbicara dengan irama yang berpola AND Suka berbicara dengan diri sendiri AND Lebih suka seni musik daripada seni gambar AND Kurang mahir dalam tugas mengarang AND Senang berbicara keras dan Mendengarkan AND Tidak pandai mengarang kata-kata
                                THEN Gaya Belajar Auditori </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-running fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Kinestetik</h4>
                        <p class="text-muted"> IF Memiliki kemampuan dalam memodifikasi objek AND Menyukai aktivitas dalam palajaran yang melibatkan tubuh AND Suka pelajaran yang berkelompok AND Bosan dengan pelajaran yang hanya duduk diam AND Cenderung kesulitan dalam menulis AND Tidak dapat mengingat geografis, kecuali jika mereka pernah berada di tempat itu 
                                THEN Gaya Belajar Kinestetik </p>
                    </div>
                </div>
            </div>
        </section>
    <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/wandy.jpg" alt="..." />
                            <h4>Suwandi Amin Sangaji</h4>
                            <p class="text-muted">Programmer</p>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://twitter.com/AminSangaji"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.facebook.com/wandy.silver/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/suwandiaminsangaji/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/rul.png" alt="..." />
                            <h4>Syahrul Alamsyah Wahid</h4>
                            <p class="text-muted">Sistem Analyst</p>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.facebook.com/syahrul.alamsyahwahid"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/syahrulaw/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </section>
        <footer>
          <div class="container text-center">
              <a href="index.php"><p style="color: green; text-decoration:none;">&copy 2021 MI SAINS AL-HIDAYAH</p></a>
           </div>
        </footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>