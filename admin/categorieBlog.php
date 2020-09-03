<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
<?php       require('connexion.php');
            $stmt = $conn->prepare("SELECT * FROM categorie");
            $stmt->execute();
            $datas=$stmt->fetchAll();
			// print_r($datas);
?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
 <!-- Main Content -->
  <div id="content">
  <?php
		include('includes/nav.php');
	?>



<body >
	
	<style>
		#testt{
			text-align: center;
			background-color: #c9c9c9;
			height: 230px;
		}
	</style>
	<section class="container">
       <form methode="POST" action="traitementCath.php" enctype="multipart/form-data">
		   <div id="main">
				<div class="inner">
										
												<section>
													<style>
													#test-img-fat{
														margin: 0 auto!important;
													}
													.image.fit{
													margin: 0 auto!important;
													}
													</style>
														
													<div class="box alt">
														<div class="row gtr-uniform">

														<div class="col-12">
													<span class="image fit card bg-dark text-white">
													<img src="https://s1.1zoom.me/b5452/578/Fingers_Closeup_Zenit_Camera_Photographer_521669_1920x1080.jpg" height="470px" class="card-img" height="470px" alt="" />
													<div class="card-img-overlay">
													<a href="formulairecat.php" type="sbmit">
													<i class="fa fa-plus icon_plus"></i>
	                                             	</a>	  
												    </div>
												    </span>
										    	</div>
												<style>
                                                  .icon_plus{
													  font-size:90px;
													
													  
												  }

                                                 </style>
														
																<?php foreach ($datas as $data): ?>
																<div class="col-4">
																	<span class="image fit"><img  src="uploads/<?=$data['imgcat']  ?>"  height="350px" alt="" /></span>
																	<div class="d-flex flex-row justify-content-between pr-4">
																	<small class=""> <span class="font-weight-bolder"><?php echo $data['nom'];?></span> </small>
																		<div class="btn-group">
																		<a href="Formulaire_Mod_Cat.php?modifier=<?php echo $data['id_categorie'];?>" name="modifier"><i class="fa fa-user-edit ml-4 "></i></a>
																		<a href="trtCat.php?supprimer=<?php echo $data['id_categorie'];?> " name="supprimer" ><i class="fa fa-trash-alt ml-2 "></i></a>
																		</div>
																	</div>
											
																</div>									
																<?php endforeach; ?>
														</div>
													</div>	
												</section>

									</div>
								</div>


						<?php require 'connexion.php';

						// $target = "uploads/";
						$stmt = $conn->prepare("SELECT * FROM article,categorie,auteur where 
						article.categorie=categorie.id_categorie and
						article.auteur=auteur.id_auteur order by id_article DESC LIMIT 12");
						// $image_show= $conn-> prepare($query);
						$stmt->execute();
						// while($record =$image_show->fetch(PDO::FETCH_ASSOC)):             
						$datas=$stmt->fetchAll();
						//   print_r($data);
						//   include 'headerBlog.php';
			?>

		
	
<?php
						include('includes/footer.php');
						?>
				


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
     
	</section>
	</body>
</html>



</form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>