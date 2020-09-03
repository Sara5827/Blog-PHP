<?php
include('includes/header.php');
include('includes/navbar.php');

 ?>
 <?php require 'config.php';

// $target = "uploads/";
            $stmt = $conn->prepare("SELECT * FROM article,categorie,auteur where 
            article.categorie=categorie.id_categorie and
            article.auteur=auteur.id_auteur order by id_article DESC LIMIT 64");
            // $image_show= $conn-> prepare($query);
            $stmt->execute();
            // while($record =$image_show->fetch(PDO::FETCH_ASSOC)):             
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
      
    
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 w-100">
            <h1 class="h3 mb-0 text-gray-800">ADMIN</h1>
            <a href="../index.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> revenir a la page blog</a>
          </div>

          
          <!-- Content Row -->
          <div class="">

            <div class="card text-white">
              <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/se4a5090e053225fa/backgroundarea/i972dfa69a5f6c625/version/1565011951/image.jpg" class="card-img w-100" height="500px" alt="...">
              <div class="card-img-overlay">
              <div  class="d-flex flex-column justify-content-center align-items-center">
                  <h1 class="card-title display-3"> <strong> Bienvenue sur le blog officiel de ....</strong></h1>
                  <br>
              </div>
              </div>
              <style>

                  #header {
                    padding: 2em 0 0.1em 0 !important;
                  }
              </style>

          </div><section class="tiles">
							<?php $i=0;foreach ($datas as $data): ?>
								
								<article>
									<span class="image">
										<img src="uploads/<?=$data['img']  ?>" width="300px" height="330px" alt="" />
									</span>
									<a href="affichageCat.php?id_article=<?php echo $data['id_article'];?>">
										<h2>Magna</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<?php endforeach; ?>
								
							</section>

               
  <?php
  include('includes/footer.php');
 ?>

      <!-- End of Main Content -->



  </div>
  <!-- End of Page Wrapper -->

 
  <?php
  include('includes/scripts.php');
 ?>
 
 

