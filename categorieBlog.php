<?php       require('connexion.php');
            $stmt = $conn->prepare("SELECT * FROM categorie");
            $stmt->execute();
            $datas=$stmt->fetchAll();
            // print_r($datas);
          ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="PageH.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <title>Documente</title>
</head>



<body >

<style>
	#testt{
		text-align: center;
         background-color: #c9c9c9;
        height: 230px;
	  }
</style>

<div class="col-12">
												<span class="image fit" id="test-img-fat">
													<div class="card bg-dark text-white">
														<img src="https://s1.1zoom.me/b5452/578/Fingers_Closeup_Zenit_Camera_Photographer_521669_1920x1080.jpg" class="card-img img-opacity" height="470px" alt="" />
														<div class="card-img-overlay text-image-test w-50 ">
														
														<h1 class="card-title justify-content-center  justify-align-center text-image-test">Welcome </h1>
														<h2 class="card-text text-image-test ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h3>
												
														</div>
														</div>
												</span>
											</div>
	<section class="container">
		<!-- Header -->
		<header id="header">
						<div class="inner">

							
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


<form methode="POST" action="traitementCath.php" enctype="multipart/form-data">

<!-- <article>
<div class="row">
<?php foreach ($datas as $data): ?>
<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
         
          <img src="uploads/<?=$data['imgcat']  ?>" class="card" width="349px" height="300px" alt="...">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <small class="text-secondary"> <?php echo $data['nom'];?></small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="Formulaire_Mod_Cat.php?modifier=<?php echo $data['id_categorie'];?> " type="button" name="modifier" class="btn btn-primary edit_btn">modifier</a>
                <a href="trtCat.php?supprimer=<?php echo $data['id_categorie'];?> " name="supprimer" class="del_btn btn btn-danger">delete</a>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
        
</article> -->
<div id="main">
						<div class="inner">
							
								<section>
									
									<!-- <a href="formulaireArticle.php" class="d-inline-block">
                                            <h4 class="">Ajouter un Article</h4>
									</a> -->
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
											
										<style>
											.img-opacity{
												opacity: 0.2;
												}
										.text-image-test{
											justify-content: center;
											
											
										}
										#header {
												padding: 2em 0 0.1em 0;
											}
										.text-image-test{
											line-height: 200%;
											}
										</style>
											
                      <?php foreach ($datas as $data): ?>
											
											<div class="col-4">
												<span class="image fit"><img  src="uploads/<?=$data['imgcat']  ?>"  height="350px" alt="" /></span>
                      <div class="d-flex flex-row justify-content-between pr-4">
                      <small class=""> <span class="font-weight-bolder"><?php echo $data['nom'];?></span> </small>
                        
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

		
	</head>


			
			
                <!-- footer-->
				<?php  include 'footer.php'?>
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