<?php
require('connexion.php');

if (isset($_GET['modifier'])){
    $id= $_GET['modifier'];
  // $id_requi;
    try{
        $sql=$conn->prepare("SELECT * FROM `auteur` WHERE id_auteur = $id");
        $sql->execute();
        $tab=$sql->fetch();
        echo "deleted";
        print_r($tab);
    }catch(PDOException $e){
        echo $e;
    }
    
    // header('Location: auteuraffichage.php');
    // header('refresh:3 url=Formulaire_Mod_Cat.php'); 
}
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
<?php include 'header.php';?>
<main>
<form method="POST" action="modifierauteur.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" name="nom" >nom</label>
      <input type="text" class="form-control" id="inputEmail4" name="nomauteur" value="<?php echo $tab["nom_complet"]?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" nom="email" >email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $tab["email"]?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" nom="avater">Avatar</label>
      <input type="text" class="form-control" id="inputEmail4" name="avatar" value="<?php echo $tab["avatar"]?>">
      <input type="text" class="form-control d-none" id="inputEmail4" name="id_auteur" value="<?php echo $tab["id_auteur"]?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="SubmitAuteur">envoyer</button>
</form>

</main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>


