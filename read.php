<?php

require_once "connection.php";

$connection = connection();

$read = "select nama, kelas, jurusan from siswa";
$result = mysqli_query($connection, $read);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <h3>Data siswa SMK Telkom 1 Medan</h3>

     <table border='1' cellpadding='5' cellspacing='0'>
     <tr><th>Nama</th><th>Kelas</th><th>Jurusan</th></tr>
         
     <?php
     while ($row = mysqli_fetch_assoc($result)) { ?>
         <tr>
         <td><?= $row['nama'] ?></td>
         <td><?= $row['kelas'] ?></td>
         <td><?= $row['jurusan'] ?></td>
         </tr>
         <?php
     }
    ?>
    </table>
    <button><a href="siswa.php">Back to form</a></button>
</body>
</html>

<?php
mysqli_close($connection);
?>