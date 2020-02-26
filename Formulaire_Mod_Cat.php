<?php
require('connexion.php');

// if (isset($_GET['modifier'])){

    $id= $_GET['modifier'];
    try{
        $sql=$conn->prepare("SELECT * FROM `categorie` WHERE id_categorie = $id");
        $sql->execute();
        $tab=$sql->fetch();
        echo "deleted";
        print_r($tab);
    }catch(PDOException $e){
        echo $e;
    }
    // header('refresh:3 url=Formulaire_Mod_Cat.php'); 
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
<?php include 'headerBlog.php';?>
<main>
<form method="POST" action="trtCat.php" enctype="multipart/form-data"><br><br><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">nom</label>
      <input type="text" class="form-control" id="inputEmail4" name="nomcat" value="<?php echo $tab["nom"]?>">
    </div>
  </div>
  <div class="form-group">
    
  <input type="hidden" name="oldImage" id="oldImage" value="<?= $tab['imgcat']?>">

  <input type="file" class="form-control " id="inputEmail4" name="fileToUpload">
    <img style="width: 200px; height: auto;" src="uploads/<?php echo $tab['imgcat']; ?>">
    </div>
    <input type="text" class="form-control d-none" id="inputEmail4" name="id_categorie" value="<?php echo $tab["id_categorie"]?>">
  <!-- <div class="form-group">
    <div class="form-check">
    <input type="file" accept="image/*" name=image4 />
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
</form>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
