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
    <link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    
    <title>Document</title>
</head>
<body>
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
<style>
       body{
          background-color: #ffffff;
            background-attachment: fixed;
            background-size: cover;
        }
        #border-formulaire{
          border-style: groove;
          padding: 50px;
          box-shadow: inset 0 0 1em grey, 0 0 1em gray;
          margin: 20px;

        }
        .margin-formulaire{
          margin-left: 200px;
        }
    </style>

<main class="container">
  <form method="POST" action="traitementArticle.php" id="border-formulaire" enctype="multipart/form-data">
    <div class="form-row">
      <div class="margin-formulaire form-group col-md-6">
        <label for="inputEmail4">Titre</label>
        <input type="text" class="form-control" id="inputEmail4" name="titre">
      </div>
    </div>
    <div class="margin-formulaire form-group w-50">
      <textarea id="w3mission" rows="4" cols="75" name="contenu" placholder="contenu">
      </textarea> 
    </div>
    <div class=" form-row">
      <div class="form-group margin-formulaire col-md-4">
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
      <div class="form-group margin-formulaire col-md-4">
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
      <div class="form-group margin-formulaire col-md-6">
        <input type="date" class="form-control" id="inputEmail4" name="date1">
      </div>
    <div class="form-group">
      <div class="form-check margin-formulaire">
      <input type="file" name="fileToUpload" accept="image/*">
      <!-- <input name="image5" type="file" accept="image/*" /> -->
      </div>
    </div>
    <button type="submit" class="btn margin-formulaire btn-lg btn-block btn-primary w-50" name="AjouterArticle">Ajouter</button>
  </form>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</html>