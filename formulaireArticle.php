<?php
require('connexion.php');

// if (isset($_GET['modifier'])){
    
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
<?php include 'headerBlog.php';?><br><br><br>
<main class="container">
<form method="POST" action="traitementArticle.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Titre</label>
      <input type="text" class="form-control" id="inputEmail4" name="titre">
    </div>
  </div>
  <div class="form-group">
    <textarea id="w3mission" rows="4" cols="75" name="contenu" placholder="contenu">
    </textarea> 
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <select id="inputState"  name="auteur" class="form-control">
      <?php
        $sql=$conn->prepare("SELECT  * FROM auteur");
        $sql->execute();
        while($tab=$sql->fetch(PDO::FETCH_ASSOC)):
      ?>
        <option value="<?php echo $tab["id_auteur"]; ?>"><?php echo $tab["nom_complet"]; ?></option>
        <?php endwhile; ?>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="cat">
      <?php
        $sql=$conn->prepare("SELECT  * FROM categorie");
        $sql->execute();
        while($tab=$sql->fetch(PDO::FETCH_ASSOC)):
      ?>
        <option value="<?php echo $tab["id_categorie"]; ?>"><?php echo $tab["nom"]; ?></option>
        <?php endwhile; ?>
      </select>
    </div>
  </div>
    <div class="form-group col-md-6">
      <input type="date" class="form-control" id="inputEmail4" name="date1">
    </div>
  <div class="form-group">
    <div class="form-check">
    <input type="file" name="fileToUpload" accept="image/*">
    <!-- <input name="image5" type="file" accept="image/*" /> -->
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="AjouterArticle">Ajouter</button>
</form>

</main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>