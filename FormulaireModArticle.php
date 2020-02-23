<?php
require('connexion.php');

// if (isset($_GET['modifier'])){
    $id= $_GET['modifier'];
    try{
        $sql=$conn->prepare("SELECT  * FROM article WHERE id_article = $id");
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
<form method="POST" action="modifierarticle.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Titre</label>
      <input type="text" class="form-control" id="inputEmail4" name="titre"  value="<?php echo $tab["title"]?>">
    </div>
  </div>
  <div class="form-group">
    <textarea id="w3mission" rows="4" cols="75" name="contenu" placholder="contenu">
  <?php echo $tab["contenu"]?>   
    </textarea> 
  </div>
  <!--*************************** Buocle auteur********************************* -->
  <!-- *****************************************************************************-->
  <div class="form-row">
    <div class="form-group col-md-4">
      <select id="inputState"  name="auteur" class="form-control"> 
      <?php
        $sql1=$conn->prepare("SELECT  * FROM auteur");
        $sql1->execute();
        while($tab1=$sql1->fetch(PDO::FETCH_ASSOC)):
          if($tab1["id_auteur"]==$tab["auteur"]):
      ?>
              <option value="<?php echo $tab1["id_auteur"]; ?>" selected><?php echo $tab1["nom_complet"]; ?></option>
          <?php else:?>
        <option value="<?php echo $tab1["id_auteur"]; ?>"><?php echo $tab1["nom_complet"]; ?></option>
          <?php endif;?>
        <?php endwhile; ?>
         
      </select>
    </div>
  </div>
  <!-- ****************************************************************************** -->
  <!-- ****************************************************************************** -->
  
  <!-- ***************************Boucle Categorie*********************************** -->
  <!-- ****************************************************************************** -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="cat">
      <?php
        $sql2=$conn->prepare("SELECT  * FROM categorie");
        $sql2->execute();
        while($tab2=$sql2->fetch(PDO::FETCH_ASSOC)):
          if($tab2["id_categorie"]==$tab["categorie"]):
            ?>
                    <option value="<?php echo $tab2["id_categorie"]; ?>" selected><?php echo $tab2["nom"]; ?></option>
                <?php else:?>
              <option value="<?php echo $tab2["id_categorie"]; ?>"><?php echo $tab2["nom"]; ?></option>
                <?php endif;?>
        <?php endwhile; ?>
    </select>
    </div>
  </div>
  <div class="form-group col-md-6">
    <input type="date" class="form-control" id="inputEmail4" name="date1"  value="<?php echo $tab["date1"]?>">
  </div>
  <div class="form-group">
    <div class="form-check">
      <img src="uploads/<?php echo $tab['img']; ?>" alt="img">
      <input type="file" name="fileToUpload" accept="image/*" >
      <!-- <input name="image5" type="file" accept="image/*" /> -->
      <input type="text" class="form-control d-none" id="inputEmail4" name="id_article" value="<?php echo $tab["id_article"]?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="modifier">modifier</button>
</form>

</main>
<?php print_r($tab); ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

