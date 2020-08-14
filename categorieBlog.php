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
<div class="text-center mb-4 p-4" id="testt">
          <h2 class="mb-5">Banque d'image et des photos libres</h2>

          <a href="formulairecat.php" type="sbmit"><button type="button" class="btn btn-outline-primary">Ajouter un categorie</button></a>
</div>
<style>
	#testt{
		text-align: center;
         background-color: #c9c9c9;
        height: 230px;
	  }
</style>


	<section class="container">

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
											<div class="col-12"><span class="image fit" id="test-img-fat"><img src="https://s1.1zoom.me/b5452/578/Fingers_Closeup_Zenit_Camera_Photographer_521669_1920x1080.jpg" height="470px" alt="" /></span></div>
											
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
									
									<h3>Left &amp; Right</h3>
									<p><span class="image left"><img src="images/pic14.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
									<p><span class="image right"><img src="images/pic15.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
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
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

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

				<!-- Main -->


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

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