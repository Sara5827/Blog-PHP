<?php
require('connexion.php');

// if (isset($_GET['modifier'])){
    $id= $_GET['modifier'];
    try{
        $sql=$conn->prepare("SELECT  * FROM article WHERE id_article = $id");
        $sql->execute();
        $tab=$sql->fetch();
        echo "deleted";
        // print_r($tab);
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
<style>
       body{
          background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Crect stroke='%23ffffff' stroke-width='0.47' width='1' height='1' id='s'/%3E%3Cpattern id='a' width='3' height='3' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cuse fill='%23fafafa' href='%23s' y='2'/%3E%3Cuse fill='%23fafafa' href='%23s' x='1' y='2'/%3E%3Cuse fill='%23f5f5f5' href='%23s' x='2' y='2'/%3E%3Cuse fill='%23f5f5f5' href='%23s'/%3E%3Cuse fill='%23f0f0f0' href='%23s' x='2'/%3E%3Cuse fill='%23f0f0f0' href='%23s' x='1' y='1'/%3E%3C/pattern%3E%3Cpattern id='b' width='7' height='11' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%23ebebeb'%3E%3Cuse href='%23s'/%3E%3Cuse href='%23s' y='5' /%3E%3Cuse href='%23s' x='1' y='10'/%3E%3Cuse href='%23s' x='2' y='1'/%3E%3Cuse href='%23s' x='2' y='4'/%3E%3Cuse href='%23s' x='3' y='8'/%3E%3Cuse href='%23s' x='4' y='3'/%3E%3Cuse href='%23s' x='4' y='7'/%3E%3Cuse href='%23s' x='5' y='2'/%3E%3Cuse href='%23s' x='5' y='6'/%3E%3Cuse href='%23s' x='6' y='9'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='h' width='5' height='13' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%23ebebeb'%3E%3Cuse href='%23s' y='5'/%3E%3Cuse href='%23s' y='8'/%3E%3Cuse href='%23s' x='1' y='1'/%3E%3Cuse href='%23s' x='1' y='9'/%3E%3Cuse href='%23s' x='1' y='12'/%3E%3Cuse href='%23s' x='2'/%3E%3Cuse href='%23s' x='2' y='4'/%3E%3Cuse href='%23s' x='3' y='2'/%3E%3Cuse href='%23s' x='3' y='6'/%3E%3Cuse href='%23s' x='3' y='11'/%3E%3Cuse href='%23s' x='4' y='3'/%3E%3Cuse href='%23s' x='4' y='7'/%3E%3Cuse href='%23s' x='4' y='10'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='c' width='17' height='13' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%23e5e5e5'%3E%3Cuse href='%23s' y='11'/%3E%3Cuse href='%23s' x='2' y='9'/%3E%3Cuse href='%23s' x='5' y='12'/%3E%3Cuse href='%23s' x='9' y='4'/%3E%3Cuse href='%23s' x='12' y='1'/%3E%3Cuse href='%23s' x='16' y='6'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='d' width='19' height='17' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%23ffffff'%3E%3Cuse href='%23s' y='9'/%3E%3Cuse href='%23s' x='16' y='5'/%3E%3Cuse href='%23s' x='14' y='2'/%3E%3Cuse href='%23s' x='11' y='11'/%3E%3Cuse href='%23s' x='6' y='14'/%3E%3C/g%3E%3Cg fill='%23e0e0e0'%3E%3Cuse href='%23s' x='3' y='13'/%3E%3Cuse href='%23s' x='9' y='7'/%3E%3Cuse href='%23s' x='13' y='10'/%3E%3Cuse href='%23s' x='15' y='4'/%3E%3Cuse href='%23s' x='18' y='1'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='e' width='47' height='53' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%231c38ff'%3E%3Cuse href='%23s' x='2' y='5'/%3E%3Cuse href='%23s' x='16' y='38'/%3E%3Cuse href='%23s' x='46' y='42'/%3E%3Cuse href='%23s' x='29' y='20'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='f' width='59' height='71' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%231c38ff'%3E%3Cuse href='%23s' x='33' y='13'/%3E%3Cuse href='%23s' x='27' y='54'/%3E%3Cuse href='%23s' x='55' y='55'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='g' width='139' height='97' patternUnits='userSpaceOnUse' patternTransform='rotate(60 1000 750) scale(17.85) translate(-943.98 -707.98)'%3E%3Cg fill='%231c38ff'%3E%3Cuse href='%23s' x='11' y='8'/%3E%3Cuse href='%23s' x='51' y='13'/%3E%3Cuse href='%23s' x='17' y='73'/%3E%3Cuse href='%23s' x='99' y='57'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23b)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23h)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23c)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23d)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23e)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23f)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23g)' width='100%25' height='100%25'/%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
    </style> 
<?php include 'headerBlog.php';?><br><br><br>
<main>
<form method="POST" action="modifierarticle.php" enctype="multipart/form-data">
<section class="bg-light text-dark">
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
  </section>
</form>

</main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

