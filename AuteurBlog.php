<?php require 'connexion.php';

// $target = "uploads/";
            $stmt = $conn->prepare("SELECT * FROM auteur");
            // $image_show= $conn-> prepare($query);
            $stmt->execute();
            // while($record =$image_show->fetch(PDO::FETCH_ASSOC)):             
              $datas=$stmt->fetchAll();
              print_r($data);
              include 'headerBlog.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="PageH.css"> -->
    <title>Document</title>
</head>
<body class="container">
<br>
<br>
<br>
<div class="card">
            <div class="card-header bg-light">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0" id="followers">Auteur</h3>
                </div>
                <div>
                <p class="nav-item"><a href="formuleauteur.php" class="nav-link">Ajouter Auteur</a></p>
                </div>
              </div>
            </div>
            <div class="card-body bg-light p-0">
            
              <div class="row no-gutters text-center fs--1">
              <?php foreach ($datas as $data): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                  <div class="bg-white p-3 h-100"><a href="../pages/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="https://image.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg" width="626" height="626" alt="Homme d'affaires caractère avatar isolé Vecteur gratuit" alt="" width="100"></a>
                  <p class="fs--2 mb-1"><a class="text-700" href="#!"><?php echo $data['nom_complet'];?></a></p> 
                  <h6 class="mb-1"><a href="../pages/profile.html"><?php echo $data['email'];?></a></h6>
                  <td><a href="AffichageModAuteur.php?modifier=<?php echo $data['id_auteur'];?>" name="modifier" class="edit_btn">modifier</a>
                <a href="supprimerauteur.php?supprimer=<?php echo $data['id_auteur'];?>" >delete</a> </td>
                </div>
                </div>
                <?php endforeach; ?>   
              </div>
            </div>
            
          </div>
          <p class="mb-0 text-600">Thank you for creating ... <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none"> 2020 © <a href="https://themewagon.com">HomeS</a></p>
         
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>