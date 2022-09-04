<?php
    include("conexion.php");

    $postsQuery = "SELECT * FROM post";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Posts Moringa</title>
</head>
<body>
    <div class="container">
        <div class="container-table">
            <div class="title-table">
                <h1>Datos del Post</h1>
            </div>
            <div class="container-headers">
                <div class="table__header">ID</div>
                <div class="table__header">TITLE</div>
                <div class="table__header">DESCRIPTION</div>
                <div class="table__header">IMAGE LINK</div>
                <div class="table__header">CONTENT</div>
                <div class="table__header">VIDEO LINK</div>
            </div>

            <div class="container-items">
            <?php $result = mysqli_query($conexion,$postsQuery);
            
            while($row=mysqli_fetch_assoc($result)) { ?>

            <div class="table__item"> <?php echo $row["id"] ?> </div>
            <div class="table__item"> <?php echo $row["title"] ?> </div>
            <div class="table__item"> <?php echo $row["descriptionPost"] ?> </div>
            <div class="table__item"> <?php echo $row["imagenLink"] ?> </div>
            <div class="table__item"> <?php echo $row["content"] ?> </div>
            <div class="table__item"> <?php echo $row["videoLink"] ?> </div>

            <?php } ?>
            </div>

        </div>
    </div>
</body>
</html>