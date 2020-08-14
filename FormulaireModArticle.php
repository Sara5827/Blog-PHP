<?php
require('connexion.php');

// if (isset($_GET['modifier'])){
    $id= $_GET['modifier'];
    try{
        $sql=$conn->prepare("SELECT  * FROM article WHERE id_article = $id");
        $sql->execute();
        $tab=$sql->fetch();
        // echo "deleted";
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
    <link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <title>Document</title>
</head>
<body class="container">
<style>
       body{
          background-color: #ffffff;
            background-attachment: fixed;
            background-size: cover;
        }
        #border-formule{
          border-style: groove;
          padding: 50px;
          box-shadow: inset 0 0 1em grey, 0 0 1em gray;
          margin: 20px;
        }
        .margin-formule{
          margin-left: 200px;
        }

    </style> 
	<!-- Header -->
  <header id="header">
						<div class="inner">

							<!-- Logo -->
								<!-- <a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a> -->

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="categorieBlog.php">Category</a></li>
							<li><a href="elements.php">Article</a></li>
							<li><a href="AuteurBlog.php">Auteur</a></li>
						</ul>
					</nav>
<main>
<form method="POST" action="modifierarticle.php" enctype="multipart/form-data">
<section class="bg-light text-dark" id="border-formule">
  <div class="form-row">
    <div class="form-group margin-formule col-md-6">
      <label for="inputEmail4">Titre</label>
      <input type="text" class="form-control" id="inputEmail4" name="titre"  value="<?php echo $tab["title"]?>">
    </div>
  </div>
  <div class="form-group margin-formule">
    <textarea id="w3mission" rows="4" cols="75" name="contenu" placholder="contenu">
  <?php echo $tab["contenu"]?>   
    </textarea> 
  </div>
  <!--*************************** Buocle auteur********************************* -->
  <!-- *****************************************************************************-->
  <div class="form-row">
    <div class="form-group margin-formule col-md-4">
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
    <div class="form-group margin-formule col-md-4">
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
  <div class="form-group margin-formule col-md-6">
    <input type="date" class="form-control" id="inputEmail4" name="date1"  value="<?php echo $tab["date1"]?>">
  </div>
  <div class="form-group">
    <div class="form-check margin-formule ">
      <img src="uploads/<?php echo $tab['img']; ?>" alt="img" width="250px">
      <input type="file" name="fileToUpload" accept="image/*" >
      <!-- <input name="image5" type="file" accept="image/*" /> -->
      <input type="text" class="form-control d-none" id="inputEmail4" name="id_article" value="<?php echo $tab["id_article"]?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary margin-formule btn-lg btn-block w-50" name="modifier" >modifier</button>
  </section>
</form>

</main>
</body>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>

