<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Your Data</title>
</head>
<body>
    <h3>
        <a href="index.php">Back</a></p>
    </h3>
    <form action="tambahproses.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="Name" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><input type="text" name="Address" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="Email" required></td>
            </tr>
            <tr>
                <td>Birth Date</td>
                <td>:</td>
                <td><input type="date" name="BirthDate" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="tambah"></td>
            </tr>
        </table>

</body>
</html>