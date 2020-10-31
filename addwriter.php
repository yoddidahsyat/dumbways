<?php 
require_once 'config.php';

$result = mysqli_query($conn, "SELECT * FROM writer_tb");

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $query = "INSERT INTO writer_tb VALUES ('', '$name')";
    mysqli_query($conn, $query);
    if ( mysqli_affected_rows($conn) > 0) {
        echo "berhasil!";
    } else {
        echo "gagal!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add writer</title>
</head>

<body>
    <a href="4.php">Back</a>
    <br/><br/>
    <h2>Tambahkan nama penulis</h2>
    <form action="addwriter.php" method="post">
        <table width="50%">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
                <td></td><td><input type="submit" name="Submit" value="Add"></td>
        </table>
    </form>
    <h3>daftar penulis</h3>
    <div class="card" style="width: 18rem;">
    <?php while($writer = mysqli_fetch_assoc($result) ): ?>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $writer['name']; ?></li>
    </ul>
    <?php endwhile; ?>
</div>
</body>
</html>