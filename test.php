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
              include 'headerBlog.php';
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
     <main>
       <!-- *******************************************Picture Home************************************************ -->
       <section height="400px">
       <div class="card bg-dark text-white">
  <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/se4a5090e053225fa/backgroundarea/i972dfa69a5f6c625/version/1565011951/image.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    
  </div>
</div>  
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
  <section id="remarque">
         <div class="site-newsletter bg-light text-dark">
         <div class="container">
           <div class="text-center">    
            <h2 class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</h2>
             <div class="row">
          <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
          </div>
        </div>
      </div>
    </div>
  </div> 
 </section>
     </main>
     <footer>
       
     </footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>