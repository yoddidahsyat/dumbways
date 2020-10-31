<?php 
require_once 'config.php';

$result = mysqli_query($conn, "SELECT * FROM book_tb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Dumbways bootcamp tes</title>
</head>
<body>
    <div class="container">
        <h2>Dumb Library</h2>
        <ul>
            <li><a href="addbook.php">Add Book</a></li>
            <li><a href="addwriter.php">Add Writer</a></li>
            <li><a href="addcategory.php">Add Category</a></li>
        </ul>
        <div class="row">
            <div class="col-7">
                <div class="card-deck">
                <?php while($book = mysqli_fetch_assoc($result) ): ?>
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $book['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $book['name']; ?></h5>
                            <a href="book.php?id=<?= $book['id']; ?>" class="btn btn-primary">View Detail</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>