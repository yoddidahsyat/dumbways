<?php 
require_once 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM book_tb WHERE id = $id");
$book = mysqli_fetch_assoc($result);
$idwriter = $book['writer_id'];
$idcategory = $book['category_id'];
$result2 = mysqli_query($conn, "SELECT * FROM writer_tb WHERE id = $idwriter");
$writer = mysqli_fetch_assoc($result2);
$result3 = mysqli_query($conn, "SELECT * FROM category_tb WHERE id = $idcategory");
$category = mysqli_fetch_assoc($result3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dumbways - detail buku</title>
</head>
<body>
    <h2>Detail buku</h2>
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">judul buku : <?= $book['name']; ?></li>
        <li class="list-group-item">kategori : <?= $category['name']; ?></li>
        <li class="list-group-item">penulis : <?= $writer['name']; ?></li>
        <li class="list-group-item">tahun publikasi : <?= $book['Publication_year']; ?></li>
    </ul>
</div>
</body>
</html>