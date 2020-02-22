<?php require 'connexion.php';

// $target = "uploads/";
            $stmt = $conn->prepare("SELECT * FROM article,categorie,auteur where 
            article.categorie=categorie.id_categorie and
            article.auteur=auteur.id_auteur order by id_article DESC");
            // $image_show= $conn-> prepare($query);
            $stmt->execute();
            // while($record =$image_show->fetch(PDO::FETCH_ASSOC)):
              
              $datas=$stmt->fetchAll();
              print_r($data);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="pageH.css">
    <title>Document</title>
</head>
<body>
  <!-- **************************************************header********************************************* -->
  <!-- ***************************************************************************************************** -->
   <header class="header">
      
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a href="index.html" class="navbar-brand py-1"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-4-1/img/logo.svg" alt="Directory logo"></a>
            <form action="#" id="search" class="form-inline d-none d-sm-flex">
              <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3"> 
                <label for="search_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input id="search_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas"></i></button>
              </div>
            </form>
          </div>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
         
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <form action="#" id="searchcollapsed" class="form-inline mt-4 mb-2 d-sm-none">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label for="searchcollapsed_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input id="searchcollapsed_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
            
              <li class="nav-item"><a href="login.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="login.html" class="nav-link">Article</a></li>
              <li class="nav-item"><a href="signup.html" class="nav-link">Gategorie</a></li>
              <li class="nav-item"><a href="signup.html" class="nav-link">Auteur</a></li>
              <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a href="user-add-0.html" class="btn btn-primary">Add a listing</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- ********************************************************************************************************** -->
    <!-- ********************************************************************************************************** -->
     <main>
       <!-- *******************************************Picture Home************************************************ -->
         <section height="400px">
        <div><img id="img" src="https://image.jimcdn.com/app/cms/image/transf/none/path/se4a5090e053225fa/backgroundarea/i972dfa69a5f6c625/version/1565011951/image.jpg" alt=""></div>
         </section>
    <!-- ********************************************************************************************************** -->
    <!-- ********************************************************************************************************** -->     
    <div class="text-center">
          <p class="subtitle text-primary">Testimonials</p>
          <h2 class="mb-5">Banque d'image et des photos libres</h2>
        </div>
    <!-- *******************************************************Partie1******************************************** -->
    <!-- ********************************************************************************************************** -->
  <section  class="container">
  <nav class="d-flex flex-wrap">
 <?php foreach ($datas as $data): ?>
    <div class="col-md-6 ">
      <div class="row no-gutters border  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <!-- <strong class="d-inline-block mb-2 text-primary"><?=$data['nom']?></strong> -->
          <div class="mb-1 text-muted"><strong><?=$data['nom']?></strong></div>
          <p class="card-text mb-auto"><?=$data['nom_complet']?></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="max-width-9 mb-2" src="uploads/<?=$data['img']  ?>" alt="Image Description" width="200px" height="250px">
        </div>
      </div>
    </div>
 <?php endforeach; ?>
  </nav>
</section>
         <!-- ======================================================================================= -->
         <!--====================================================================================  -->
         <section>
           
         </section>
     </main>
     <footer>
       
     </footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>