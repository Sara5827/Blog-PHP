<?php
require('connexion.php');
?>
<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
 
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
 <!-- Main Content -->
  <div id="content">
  <?php
		include('includes/nav.php');
	?>

      <body>
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
  </div>
  <?php
  include('includes/footer.php');
 ?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</html>