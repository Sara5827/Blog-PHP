<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <title>Document</title>
</head>
<body class="container">
<style>
       body{
          background-color: #ffffff;
            background-attachment: fixed;
            background-size: cover;
        }
        #border-formule-auteur{
          border-style: groove;
          padding: 50px;
          box-shadow: inset 0 0 1em grey, 0 0 1em gray;
          margin: 20px;
        }
        .margin-formule-auteur{
          margin-left: 200px;
        }
    </style> 

<main>
  
		<!-- Header -->
    <header id="header">
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

<form method="POST" action="traitementAuteur.php" >
  <section class="bg-light text-dark" id="border-formule-auteur">
  <div class="text-center margin-formule-auteur">
          <h2 class="mb-5">inscription de l'auteur</h2>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6 margin-formule-auteur">
      <label for="inputEmail4" name="nom">nom</label>
      <input type="text" class="form-control" id="inputEmail4" name="nomauteur">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 margin-formule-auteur">
      <label for="inputEmail4" nom="email">email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
  </div>
  <div class="form-row">
    <!-- <div class="form-group col-md-6 margin-formule-auteur">
      <label for="inputEmail4" nom="avater">Avatar</label>
      <input type="text" class="form-control" id="inputEmail4" name="avatar">
    </div> -->
  </div>
  <div class="margin-formule-auteur">
  <button type="submit" class="btn btn-primary w-50" name="SubmitAuteur">envoyer</button>
  </div>
  
  </section>
</form>

</main>
</body>
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>



