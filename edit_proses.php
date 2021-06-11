<?php
if(isset($_POST['simpan']))
{
    include('koneksi.php');
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $BirthDate = $_POST['BirthDate'];
    $update = mysqli_query($koneksi,"update tpiano set
    
    Name = '$Name',
    Address = '$Address',
    BirthDate = '$BirthDate'

    where Email = '$Email'")
     or die(mysqli_error($koneksi));

    if($update){
        echo "<h2>Data berhasil diupdate</h2>";
        echo "<script> window.location = 'index.php'</script>";
    }
    else{
        echo "<h2>gagal menyimpan</h2>";
        echo "<a href='edit.php ?Email =".$Email."'>kembali</a>";
    }
}
    else{
        echo "<script>window.history.back()</script>";
    }

?>