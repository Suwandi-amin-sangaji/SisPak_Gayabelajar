<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="icon" href="assets/img/logo.png">
    <link href="assets/carousel.css" rel="stylesheet">
    <title>SISTEM PAKAR</title>
  </head>
<body>
        <div class="card text-white bg-info">
          <a href="index.php" style="color: white; text-decoration:none;"><h5 class="card-header">Pertanyaan Diagnosis</h5></a>
          <div class="card-body text-center ukuran-30">

            <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">

            <?php
                include ('koneksi.php');
                $kode='m1';
                session_start();
                echo "<p>Hai, ".$_SESSION['nama']." (".$_SESSION['umur']." th)</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }

                    $sql = "SELECT * from tb_pertanyaan WHERE kode_pertanyaan='$kode'";
                    $data = mysqli_query($koneksi,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>
                
                <label for="exampleFormControlInput1"><?php echo $row['isi_pertanyaan']; ?></label>
                
                <br>
                <div class="option">
                    <?php 
                        include "fungsi.php";
                        answer($kode);                    
                    ?>
                </div>                
            </form>
          </div>
        </div>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>