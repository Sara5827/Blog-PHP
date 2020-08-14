<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
      .img_2{
        width: 200px;
        height: 200px;
      }
    </style>
</head>
<body class="container" >
<?php
require('connexion.php');
include 'header.php'?>
<main>
<a href="formulaireArticle.php">Ajouter une article</a> 
<div class="d-flex flex-row flex-wrap"> 
          <?php 
            $target = "uploads/";
            $query = ("SELECT * FROM article");
            $image_show= $conn-> prepare($query);
            $image_show->execute();
            while($record =$image_show->fetch(PDO::FETCH_ASSOC)):
          ?>

 <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" name="img" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140" src="<?php echo $target.$record['img'];?>" class="img_2" alt="...">
        </img>
        <h2>Contenue</h2>
        <p><p class="card-text"><?php echo $record['contenu'];?></p>
       </p>
       <p class="card-text">
         <?php 
            $categorie = $record['categorie'];
            $query1 = ("SELECT nom FROM categorie INNER JOIN article ON categorie.id_categorie = article.categorie WHERE article.categorie = $categorie");
            $image_show2= $conn-> prepare($query1);
            $image_show2->execute();
            $record2 =$image_show2->fetch(PDO::FETCH_ASSOC);
            echo $record2['nom'];
         ?>
        </p>

       <p class="card-text">
       <?php 
            $auteur = $record['auteur'];
            $query2 = ("SELECT nom_complet FROM auteur INNER JOIN article ON auteur.id_auteur = article.auteur WHERE article.auteur = $auteur");
            $image_show3= $conn-> prepare($query2);
            $image_show3->execute();
            $record3 =$image_show3->fetch(PDO::FETCH_ASSOC);
            echo $record3['nom_complet'];
         ?>  
       </p>
       <p>      <a href="FormulaireModArticle.php?modifier=<?php echo $record['id_article'];?>" name="modifier" class="edit_btn">modifier</a>
                <a href="supprimerArticle.php?supp=<?php echo $record['id_article'];?>" name="supp" class="del_btn">delete</a>
                <a href="affichageCat.php?id_article=<?php echo $record['id_article'];?>" name="afficher" class="del_btn">Afficher</a> 
        </p>
        <small class="text-muted"><?php echo $record['date1'];?></small>
  </div>     
          <?php endwhile;?>
          </div>         
  </main>  
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>