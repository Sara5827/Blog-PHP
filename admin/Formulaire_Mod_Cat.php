<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>

<?php
  require('connexion.php');

  // if (isset($_GET['modifier'])){

      $id= $_GET['modifier'];
      try{
          $sql=$conn->prepare("SELECT * FROM `categorie` WHERE id_categorie = $id");
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

    
          <style>
          #formule-catt{
          border-style: groove;
          padding: 50px;
          box-shadow: inset 0 0 1em grey, 0 0 1em gray;
          margin: 20px;
        }
        .margin-formule-catt{
          margin-left: 200px;
        }
      </style>
      
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
 <!-- Main Content -->
  <div id="content">
  <?php
		include('includes/nav.php');
	?>
    <body class="">
        <main>
        <form method="POST" action="trtCat.php" enctype="multipart/form-data"><br><br><br>
        <section id="formule-catt">
          <div class="form-row">
            <div class="form-group margin-formule-catt col-md-6">
              <label for="inputEmail4">nom</label>
              <input type="text" class="form-control" id="inputEmail4" name="nomcat" value="<?php echo $tab["nom"]?>">
            </div>
          </div>
          <div class="form-group margin-formule-catt">
            
          <input type="hidden" class="w-50" name="oldImage" id="oldImage" value="<?= $tab['imgcat']?>">

          <input type="file" class="form-control w-50 " id="inputEmail4" name="fileToUpload">
            <img style="width: 200px; height: auto;" src="uploads/<?php echo $tab['imgcat']; ?>">
            </div>
            <input type="text" class="form-control d-none" id="inputEmail4" name="id_categorie" value="<?php echo $tab["id_categorie"]?>">
          <!-- <div class="form-group">
            <div class="form-check">
            <input type="file" accept="image/*" name=image4 />
            </div>
          </div> -->
          <button type="submit" class="btn btn-primary margin-formule-catt w-50" name="modifier">Modifier</button>
          </section>
        </form>
        </main>
    </body>
  </div>
  <?php
		include('includes/footer.php');
	?>
</div>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
