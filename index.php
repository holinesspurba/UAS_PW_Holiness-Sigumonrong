<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
  header("location:login.php");
}
if(isset($_SESSION['username'])){
  $username=$_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>    
  <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.cliom/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehalaman.css">
<style>
  .carousel-inner img {
      width: 50%;
      height: 50%;
      margin-left: 25%;
  }
</style>
    <title>Guest List</title>
</head>
<body>

<!--Navbar mulai-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand"><img src="Home_logo-removebg-preview.png" width="45px" height="45px"></a>
      <h4 class="navbar-brand">Piano's Time</h4>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT ME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">PIANO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aksi_logout.php">LOG OUT</a>
          </li>
        </ul>
      </div>
    </nav>
    </section>
    <!--Navbar Akhir-->

    <!--Carousel awal-->
        <div id="home" class="carousel slide" data-ride="carousel">
 
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
    
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="piano background.png">
              </div>
              <div class="carousel-item">
                <img src="piano background2.png">
              </div>
              <div class="carousel-item">
                <img src="piano background3.png">
              </div>
            </div>
          
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <!--Carousel akhir-->

          <section id="about">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2>About Me</h2>
                    <div class="about-content">
                    Im Holiness Sigumonrong. Im part of Computer Science Student at University of Sumatera Utara. I really love to play music especially piano. So in order to finish my assignment to make website with HTML, CSS, Bootstrap, and Javascript, i make piano with it so if you really want to play a little, check it out!
                    </div>
                    <a href="halamanpiano.php" class="link-button">Play the Piano</a>
                </div>
                
                </div>
                </div>
                <div class="container">
    <h2 class="text-center">Input Your Data</h2>
<!--awal card-->
   <!--
      <div class="card mt-2">
        <div class="card-header bg-info text-white">
          Input in Here
        </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>Name</label>
                            <input type="text" name="tname" class="form-control" placeholder="Input Your name in here" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Username</label>
                            <input type="text" name="tusername" class="form-control" placeholder="Input Your Username in here" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                            <input type="password" name="tpass" class="form-control" value="rahasia" placeholder="Input Your Password in here" required>
                    </div> 
                    <div class="form-group">
                        <label>Address</label>
                           <textarea class="form-control" name="tcountry" class="form-control" placeholder="Input Your Address in here" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                            <input type="email" name="temail" class="form-control"placeholder="Input your email in here" required>
                    </div>
                    <div class="form-group">
                    <label>Birth Date</label>
                        <input type="date" name="ttanggal" class="form-control" required>    
                    </div>
                    <button type="submit" class="btn btn-success" name="bsimpan">Save</button>
                    <button type="reset" class="btn btn-danger" name="breset">Reset</button>
                </form>
            </div>-->
<!--Akhir Card--> 

<!--Awal data-->
            <div class="card mt-3">
    <div class="card-header bg-success text-white">
      Guest Info
    </div>
    <a href="tambah.php"><h4>Add Guest Info in here</h4></a>
        <div class="card-body">
            <table class="table table-bordered table-strip">
              
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                </tr>
                 <?php
                  include_once 'koneksi.php';
                  $no=1;
                  $data=mysqli_query($koneksi, "select * from tpiano");
                  while($d=mysqli_fetch_array($data)){
              ?>
              <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['Name'];?></td>
                    <td><?php echo $d['Address'];?></td>
                    <td><?php echo $d['Email'];?></td>
                    <td><?php echo $d['BirthDate'];?></td>
                    <td>
                    <a href="edit.php ?Email=<?php echo $d['Email'];?>">edit</a>
                    <a href="hapus.php ?Email=<?php echo $d['Email'];?>">hapus</a>
                    </td>
              </tr>

        <?php
                  }
        ?>          
            </table>
        </div>
</div>

    </div>

</body>
</html>