<?php
include "koneksi.php";
$qfaskes = "SELECT * FROM faskes";
$data_faskes = $conn->query($qfaskes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SIG</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  

  <!-- Main Stylesheet File -->
  <link href="style/style.css" rel="stylesheet">
  
 
</head>

<body style="background-color: aliceblue;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top justify-content-center" style="background-color: #c0bcba ">
    
        <ul class="nav navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="daftar-faskes.php">Faskes BPJS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pemetaan.html">Pemetaan</a>
            </li>
        </ul>
    
        </nav>
    </header>
  
<section class="daftar-faskes" >
    <div class="judul text-center pb-3">
        <h1>Daftar Fasilitas Kesehatan BPJS Kecamatan Kembaran</h1>
    </div>
    <div class="container">
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Faskes</th>
                <th scope="col">Nama Faskes</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Koordinat</th>
              </tr>
            </thead>
            <tbody>
            <?php if(mysqli_num_rows($data_faskes)>0){ ?>
            <?php $no = 1;
            while($data = mysqli_fetch_array($data_faskes)){
            ?>
              <tr>
                <th scope="row"><?php echo $no ?></th>
                <td><?php echo $data["kode_faskes"];?></td>
                <td><?php echo $data["nama_faskes"];?></td>
                <td><?php echo $data["alamat"];?></td>
                <td><?php echo $data["telp"];?></td>
                <td>
                <a href="<?php echo $data["koordinat"];?>"><button class="btn btn-primary">Lihat</button></a>
                </td>
              </tr>
              <?php $no++; } ?>
              <?php
                 }
              ?>
            </tbody>
          </table>
    </div>
    
</section>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>