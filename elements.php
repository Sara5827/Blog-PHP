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
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Categorie Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
    
	<style>
	  #test{
		text-align: center;
         background-color: #c9c9c9;
        padding: 48px;
	  }
	  .mrg{
		  margin: 0 auto !important;
	  }
	  #header{
		padding: 1em 0 0.1em 0 !important;
	  }
	
	</style>


	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header class="mrg" id="header">
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
					<div class="col-12">
													<span class="image fit">
														<div class="card bg-dark text-white">
															<img src="https://blog-fr.orson.io/wp-content/uploads/2018/09/Site-internet-photographe.jpg" class="card-img img-opacity" height="470px" alt="" />
															
															<div class="card-img-overlay text-image-test w-50 ">
															<br>
															<br>

														
															<h1 class="card-title justify-content-center  text-image-test">Welcome </h1>
															<h5 class="card-text text-image-test ">This is a wider card with supporting text below as a natural. with supporting text</h5>
													
														</div>
														</div>
											     	</span>
											    </div>

				<!-- Main -->
					<div id="main">
						<div class="inner">
						
								<section>	
									<div class="box alt">
										<div class="row gtr-uniform">
												
									     	<style>
											 .img-opacity{
												 opacity: 0.3;
												 }
											.text-image-test{
												justify-content: center;
												line-height: 244%;
											}
											</style>
											

                                              


										<?php foreach ($datas as $data): ?>

											
											<div class="col-4">
												<span class="image fit" id="image-test"><img src="uploads/<?=$data['img']  ?>" height="350px" alt="" /></span>
												<div class="d-flex flex-row justify-content-between ">
													<div class="d-flex flex-row " id="footer_post">
														
													</div>  
													<style>
													
														#image-test{
															margin: 0 auto;
														}
														.test_post{
															margin-right: 200px;
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
                 <!-- Footer -->
                <?php  include 'footer.php'?>
				
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>