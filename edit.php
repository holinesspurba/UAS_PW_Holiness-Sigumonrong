<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Edit data pengunjung-->
    <?php
        include('koneksi.php');
        $Email = $_GET['Email'];
        $show = mysqli_query($koneksi,"select * from tpiano where Email ='$Email'");
        if(mysqli_num_rows($show) == 0){
            echo '<script>window.history.back()</script>';
        }
        else{
            $d = mysqli_fetch_assoc($show);
        }
    ?>
<!--Edit data pengunjung-->

<form action="edit_proses.php" method="POST">
    <input type="hidden" name="Email" value="<?php echo $Email; ?>">
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td>
                <input tye="text" name="Name" size="50" value="<?php echo $d['Name']; ?>"required>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td>
               <input type="text" name="Address" size="50" value="<?php echo $d['Address'];?>" required> 
            </td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td>:</td>
            <td>
               <input type="date" name="BirthDate" value="<?php echo $d['BirthDate'];?>" required> 
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td><input type="submit" name="simpan" value="save"></td>
        </tr>
    </table>
</form>
</body>
</html>