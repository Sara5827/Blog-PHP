<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
<?php require 'connexion.php';

            $stmt = $conn->prepare("SELECT * FROM auteur");
            // $image_show= $conn-> prepare($query);
            $stmt->execute();
            // while($record =$image_show->fetch(PDO::FETCH_ASSOC)):             
              $datas=$stmt->fetchAll();
              // print_r($data);
              
?>






<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
 <!-- Main Content -->
  <div id="content">
    <body class="">

        <div class="card">
                <div class="card-header bg-light">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0" id="followers">Auteur</h3>
                    </div>
                    <div>
                    <p class="nav-item"><a href="formuleauteur.php"  class="nav-link">Ajouter un Auteur</a></p>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-light p-0">
                
                  <div class="row no-gutters text-center fs--1">
                  <?php foreach ($datas as $data): ?>
                    <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-1">
                      <div class="bg-white p-3 h-100"><a href="../pages/profile.html"><img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="https://image.freepik.com/vecteurs-libre/homme-affaires-caractere-avatar-isole_24877-60111.jpg" width="626" height="626" alt="Homme d'affaires caractère avatar isolé Vecteur gratuit" alt="" width="100"></a>
                      <p class="fs--2 mb-1 font-weight-bold "><?php echo $data['nom_complet'];?></p> 
                      <h6 class="mb-1"><a href="../pages/profile.html"><?php echo $data['email'];?></a></h6>
                      <td><a href="AffichageModAuteur.php?modifier=<?php echo $data['id_auteur'];?>" name="modifier" class="edit_btn"><button type="button" class="btn btn-info">
      edit</button></a>
                    <a href="supprimerauteur.php?supprimer=<?php echo $data['id_auteur'];?>" ><button type="button" class="btn btn-danger">Delete</button></a> </td>
                    </div>
                    </div>
                    <?php endforeach; ?>   
                  </div>
                </div>
                
              </div>
              <?php
		include('includes/footer.php');
	?>
            
    </body>

  </div>
</div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>