<?php       require('connexion.php');
            $stmt = $conn->prepare("SELECT * FROM categorie");
            $stmt->execute();
            $slider=$stmt->fetchAll();
            // print_r($datas);
          ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="owl.carousel.css">
    <link rel="stylesheet" href="owl.theme.default.css">
</head>

<body>
<div>
<div class="owl-carousel owl-theme">
<?php foreach ($slider as $slid): ?>
    <div class="item">
    <img src="uploads/<?=$slid['imgcat']  ?>" class="card-img-top" alt="...">
    </div>
<?php endforeach; ?>
    </div>
    </div>
</body>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="owl.carousel.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="main.js"></script>

</body>

</html>