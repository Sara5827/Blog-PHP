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
    <title>Document</title>
</head>
<header>
<?php include 'headerBlog.php'; ?>
</header>
<br>
<body>
    <section>
    <div class="text-center">
          <p class="subtitle text-primary">Testimonials</p>
          <h2 class="mb-5">Welcom to our newsletter</h2>
        </div>
<div class="container">
    <!-- =================================1er Partie ========================================== -->
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
          <nav class="d-flex flex-row flex-wrap">
          <?php foreach ($datas as $data): ?>
            <div class="col-md-6 ">
              <article class="card mb-4">
                <header class="card-header">
                   <h4 class="card-title"><?=$data['nom_complet']?></h4>
                 </header>
                <a href="post-image.html">
                <img class="max-width-9 mb-2" src="uploads/<?=$data['img']  ?>" alt="Image Description" width="385px" height="auto">
                </a>
                <div class="card-body">
                  <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
                <p>      <a href="FormulaireModArticle.php?modifier=<?php echo $data['id_article'];?>" name="modifier" class="edit_btn">modifier</a>
                <a href="supprimerArticle.php?supp=<?php echo $data['id_article'];?>" name="supp" class="del_btn">delete</a>
                <a href="affichageCat.php?id_article=<?php echo $data['id_article'];?>" name="afficher" class="del_btn">Afficher</a> 
        </p>
              </article>  
            </div>
             <div class="col-md-6">
            </div>
             <?php endforeach; ?>
            </nav>
          </div>
        </div>
<!-- ==============================================la 2eme Partie============================= -->
      <div class="col-md-3 ml-auto ">        
        <aside class="sidebar">
            <div class="card mb-4">
              <div class="card-body bg-primary">
                <h4 class="card-title text-light">About</h4>
                <p class="card-text text-light"> tellus eget condimentum rhoncus, sem quam aecenas tempus, tellus eget condimentum rhoncus, aecenas tempus, tellus eget condimentum rhoncus, sem quamaecenas tempus, aecenas tempus, tellus eget condimentum rhoncus, sem quam aecenas tempus, tellus eget condimentum rhoncus, sem quam aecenas tempus, tellus eget condimentum rhoncus, sem quam tellus eget condimentum rhoncus, sem quam sem quam <a href="#">semper libero</a>, sit amet adipiscing sem neque sed ipsum. </p>
              
              </div>
            </div><!-- /.card -->
          </aside>

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Tags</h4>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food &amp; Drinks</a>
              </div>
            </div><!-- /.card -->
            <div class="card mb-4 bg-primary">
              </h4>
                <a href="formulaireArticle.php" class="d-inline-block">
                  <h4 class="text-light">Ajouter Article</h4>
                </a>
            </div>
          </aside>

        </div>
      </div>
    </div>

    <!-- ===================================== -->

  
  </div>
</div>
</div>
  </section>  
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>