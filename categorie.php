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
      }
    </style>
</head>
<body class="container">
<?php 
  require('connexion.php');
  include 'header.php'
?>

<main>
  <form methode="POST" action="traitementCath.php" enctype="multipart/form-data">
  <a href="formulairecat.php">Ajouter une categorie</a>
  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $target = "uploads/";
            $query = ("SELECT * FROM categorie");
            $image_show= $conn-> prepare($query);
            $image_show->execute();
            while($record =$image_show->fetch(PDO::FETCH_ASSOC)):
          ?>
              <tr>
                <td><?php echo $record['nom'];?></td>
                <td><img class="img_2" src="<?php echo $target.$record['imgcat'];?>"></td>
                <td><a href="Formulaire_Mod_Cat.php?modifier=<?php echo $record['id_categorie'];?> " name="modifier" class="edit_btn">modifier</a>
                <a href="trtCat.php?supprimer=<?php echo $record['id_categorie'];?> " name="supprimer" class="del_btn">delete</a> </td>
              </tr>
          <?php endwhile;?>
          </tbody>
        </table>
      </div>
  </form>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>


