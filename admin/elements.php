<?php
	include('includes/header.php');
	include('includes/navbar.php');
 ?>
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
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
	<?php
		include('includes/nav.php');
	?>
		<body class="is-preload">
			<!-- Wrapper -->
				<div id="wrapper">	
			
      	
									<section class="container">	
										<div class="box alt">
											<div class="row gtr-uniform">
												<div class="col-12">
													<span class="image fit card bg-dark text-white">
													<img src="https://s1.1zoom.me/b5452/578/Fingers_Closeup_Zenit_Camera_Photographer_521669_1920x1080.jpg" height="470px" class="card-img" alt="" />
													<div class="card-img-overlay">
													<a href="formulaireArticle.php" type="sbmit"  >
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
													<span class="image fit" id="image-test"><img src="uploads/<?=$data['img']  ?>" height="350px" alt="" /></span>
													<div class="d-flex flex-row justify-content-between ">
														<div class="d-flex flex-row " id="footer_post">
															<div class="d-flex justify-content-between flex-row">
																<small class="test_post text-secondary font-weight-bold d-flex ">Post picture</small>
																	<div><a href="FormulaireModArticle.php?modifier=<?php echo $data['id_article'];?>" name="modifier" class="btn btn-primary edit_btn"><i class="fa fa-user-edit m-1"></i></a></div>	    
																	<div><a href="supprimerArticle.php?supp=<?php echo $data['id_article'];?>" name="supp" class="del_btn btn btn-danger"><i class="fa fa-trash-alt m-1"></i></a></div>		
																	<div><a href="affichageCat.php?id_article=<?php echo $data['id_article'];?>" name="afficher" class="btn btn-secondary "><i class="fa fa-eye m-1"></i></a></div>	
														 	</div>
														</div>  
														<style>
														
															#image-test{
																margin: 0 auto;
															}
															.test_post{
																margin-right: 100px;
															}
														</style>  
													</div>
												</div>									
												<?php endforeach; ?>
											</div>
										</div>
									</section>

							</div>
						</div>

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

		</body>
	</div>
</div>

<?php
  include('includes/scripts.php');
 


 ?>
</html>