<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
<?php
  require('connexion.php');

  if (isset($_GET['modifier'])){
      $id= $_GET['modifier'];
    // $id_requi;
      try{
          $sql=$conn->prepare("SELECT * FROM `auteur` WHERE id_auteur = $id");
          $sql->execute();
          $tab=$sql->fetch();
          
          // print_r($tab);
      }catch(PDOException $e){
          echo $e;
      }
      
      // header('Location: auteuraffichage.php');
      // header('refresh:3 url=Formulaire_Mod_Cat.php'); 
  }
?>
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">
 <!-- Main Content -->
  <div id="content">



<body class="">
<style>
       body{
          background-color: #ffffff;
            background-attachment: fixed;
            background-size: cover;
        }
        #border-formule-Aut{
          border-style: groove;
          padding: 50px;
          box-shadow: inset 0 0 1em grey, 0 0 1em gray;
          margin: 20px;

        }
    </style> 


<main>
<form method="POST" action="modifierauteur.php">
  <section class="bg-light text-dark" id="border-formule-Aut">
  <div class="text-center">
          <h2 class="mb-5">Modification de l'auteur</h2>
    </div>
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
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4" nom="avater">Avatar</label>
      <input type="text" class="form-control" id="inputEmail4" name="avatar" value="<?php echo $tab["avatar"]?>">
      <input type="text" class="form-control d-none" id="inputEmail4" name="id_auteur" value="<?php echo $tab["id_auteur"]?>">
    </div> -->
  </div>
  <div>
    <button type="submit" class="btn btn-primary w-50" name="SubmitAuteur">envoyer</button>
  </div>
  
  </section>
</form>

</main>
</body>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>


