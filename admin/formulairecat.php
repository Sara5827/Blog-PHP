<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
<style>
          #formule-cat{
          border-style: groove;
          padding: 50px;
          box-shadow: inset 0 0 1em grey, 0 0 1em gray;
          margin: 20px;
        }
        .margin-formule-cat{
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
<body class=" is-preload">


		<!-- Wrapper -->
			<div id="wrapper">

	

		
</div>

	<main>
		<form method="POST" action="traitementCath.php" enctype="multipart/form-data">
		<section id="formule-cat">
		<div class="form-row">
			<div class="form-group col-md-6 margin-formule-cat">
			<label for="inputEmail4">nom</label>
			<input type="text" class="form-control" id="inputEmail4" name="nomcat">
			</div>
		</div>
		<div class="form-group margin-formule-cat">
			<input type="file" name="fileToUpload" id="fileToUpload">
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-primary w-50" name="ajoutercat">ajouter categorie</button>
		</div>
		
		</section> 
		</form>
	</main>
</body>
<?php
include('includes/footer.php');
?>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>



