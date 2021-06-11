<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_GET['Email']))
    {
        include('koneksi.php');
        $Email = $_GET['Email'];
        $cek = mysqli_query($koneksi, "select Email from tpiano where Email = '$Email'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $del = mysqli_query($koneksi, "delete from tpiano where Email ='$Email'");
            if ($del)
            {
                echo "<h3>Data Pengunjung berhasil dihapus</h3>";
                echo "<script>window.location ='index.php';</script>";
            }
            else
            {
                echo "<h2>Gagal menghapus Data</h2>";
                echo "<a href='index.php'>Kembali</a>";
            }
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>
</html>