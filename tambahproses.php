<?php
 if(isset($_POST['tambah']))
 {
     include_once 'koneksi.php';
     $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Address = $_POST['Address'];
     $BirthDate = $_POST['BirthDate'];

     $input = mysqli_query($koneksi, "insert into tpiano values('$Name','$Email','$Address','$BirthDate')");

     if($input)
     {
         echo "<h3>Data berhasil ditambahkan</h3>";
         echo "<script>window.location='index.php'</script>";
     }
     else
     {
        echo "<h3>Gagal menambahkan data</h3>";
        echo "<a href ='tambah.php'>kembali</a>";
     }
 }
 else
 {
    echo "<script>window.history.back()</script>";
 }
?>