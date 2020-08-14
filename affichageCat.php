<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body class="container">
<style>
        body{
 
          background-color: #ffffff;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
<?php 
// include 'headerBlog.php';
  require('connexion.php'); 
?>
<br>
<br>
<br>
<?php 
            $id_article = $_GET['id_article'];
            $target = "uploads/";
            $query = ("SELECT * FROM article WHERE id_article = $id_article");
            $image_show= $conn->prepare($query);
            $image_show->execute();
            $record =$image_show->fetch(PDO::FETCH_ASSOC);
              // print_r($record);
?>
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
           <div id="main">
						<div class="inner">
              <h1>Generic Page</h1>
           
							<span class="image main"><img src="<?php echo $target.$record['img'];?>" alt=""  height="400px"/></span>
              <p><?php echo $record['contenu'];?></p>
              <div class="mb-1 text-muted"><?php echo $record['date1'];?></div>
						</div>
          </div>
</article>
<!-- ************************************Slider************************************ -->
<!-- *********************************************************************************** -->
<!-- <div class="m-4">   
<h3 > more picture  </h3>
<?php  include 'slider.php'?>
<div class="text-center">
<a href="ArticleBlog.php" name="" class="btn btn-secondary w-50 m-4" >Show More</a>
</div> -->
 
</div>

 <!-- ************************************Commentaire************************************ -->
<!-- *********************************************************************************** -->

  <section class="d-flex">
	<form method="POST" action="commentaire.php" class="w-50">
			<div class="input-group flex-nowrap bg-light text-dark">
			<input type="text" class="form-control m-2" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="name">
			</div>
			<div class="form-group">
			<textarea class="form-control m-2" id="exampleFormControlTextarea1" rows="4" name="commentaire"></textarea>
			</div>
			<input type="text" class="d-none" value="<?=  $id_article  ?>" name="idar">
			<div class="text-center">
			<button type="submit" class="btn btn-primary w-50" name="com">commenter</button>
			</div>
	</form>

	
   <!-- <form method="GET" action="supprimerCom.php" class="w-50">
	<style>
		.comment-user{
		font-size: medium;
		}
	</style>

		<div class="media text-muted pt-3 bg-light text-dark">
		<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
		<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
			<div class="d-flex align-items-center w-100">
			<strong class="text-gray-dark d-flex flex-column justify-content-center">
				<p class="comment-user"><?php echo $record['nickname'];?></p>
				<small>  Comment </small>
			</strong>
			<div class="border m-4" >
				<h4 class="text-dark"><?php echo $record['contenue'];?></h4>
			</div>
			
			<input type="text" class="d-none m-2" value="" name="idar">
			<input type="text" class="d-none" class="m-2" value="<?=  $id_article  ?>" name="idart">
			<a href="supprimerCom.php?supp=<?= $record['id_commentaire'];?>&id_article=<?=  $id_article  ?>" name="supp"><i class="fa fa-trash-alt"></i></a>
			</div>  
		</div>
		</div>
   </form> -->

   <form method="GET" action="supprimerCom.php" class="w-50 card ml-4 border-0">
   <div class="comment even thread-even depth-1" id="comment-193899">
		<article itemprop="comment" itemscope="" itemtype="https://schema.org/Comment">
			<header class="comment-header">
			<?php 
		$target = "uploads/";
		$query = ("SELECT * FROM commentaire where id_article = $id_article");
		$image_show= $conn-> prepare($query);
		$image_show->execute();
		while($record =$image_show->fetch(PDO::FETCH_ASSOC)):
		// print_r($record);
		?>	
				<div class="card-header m-1 d-flex flex-row justify-content-between">
					<div class="mt-2 d-flex flex-row" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
						<img alt="" src="https://www.recia.fr/wp-content/uploads/2018/10/default-avatar-300x300.png" class="rounded-circle" srcset="https://secure.gravatar.com/avatar/6885f038010769d8700177d7393d6ab1?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
						<div class="d-flex flex-column justify-content-around m-2">
							<div class="m-1">
								<span class="font-weight-bold"><?php echo $record['nickname'];?></span> 
								<span class="says">says</span>	
							</div>
							<div class="comment-content m-1" itemprop="text">
							<p><?php echo $record['contenue'];?></p>
							</div>
						</div>	
					</div>
					<div class="mt-4">
							<input type="text" class="d-none" class="m-4" value="<?=  $id_article  ?>" name="idart">
							<a href="supprimerCom.php?supp=<?= $record['id_commentaire'];?>&id_article=<?=  $id_article  ?>" name="supp"><i class="fa fa-trash-alt"></i></a>
					</div>
				</div>		
		</article>
		</div>
		<?php endwhile;?>	
   </form>
   

  </section>


<!--**************************************************************************************** -->
<!-- *************************************************************************************** -->

<!--*********************************Afichage de commentaire******************************* -->
<!-- *************************************************************************************** -->




 </section>
</body>

        
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
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</html>