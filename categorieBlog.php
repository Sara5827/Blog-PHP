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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="PageH.css">
    <title>Documente</title>
</head>
<?php 
  include 'headerBlog.php';
?>
<body class="container">
<form methode="POST" action="traitementCath.php" enctype="multipart/form-data">
<div class="text-center"><br><br><br>
          <p class="subtitle text-primary">Testimonials</p>
          <h2 class="mb-5">Banque d'image et des photos libres</h2>
        </div>
<article>
<div class="row">
<?php foreach ($datas as $data): ?>
<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <?php echo $data['nom'];?>
          <img src="uploads/<?=$data['imgcat']  ?>" class="card" width="349px" height="300px" alt="...">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="Formulaire_Mod_Cat.php?modifier=<?php echo $data['id_categorie'];?> " name="modifier" class="edit_btn">modifier</a>
                <a href="trtCat.php?supprimer=<?php echo $data['id_categorie'];?> " name="supprimer" class="del_btn">delete</a>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
        
</article>

<button type="submit" class="btn btn-primary" name="ajoutercat">ajouter categorie</button>
<section >
    <div class="card-columns">
      <div class="card">
      <h5 class="card-title">Card title</h5>
      <img src="//static-cdn.123rf.com/stock-photo/images/thumbs/sensual.jpg" class="card-img-top" alt="...">
      </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
    <div class="card">
      <h5 class="card-title">Card title</h5>
    <img src="https://static-cdn.123rf.com/stock-photo/images/thumbs/cupcakes.jpg" class="card-img-top" alt="...">
  </div> 
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title"></cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
      <h5 class="card-title">Card title</h5>
    <img src="//static-cdn.123rf.com/stock-photo/images/thumbs/sensual.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <h1>Article loool</h1>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="card">

    <img src="//static-cdn.123rf.com/stock-photo/images/thumbs/success.jpg" class="card-img-top" alt="...">
  </div>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
      <h5 class="card-title">Card title</h5>
    <img src="https://static-cdn.123rf.com/stock-photo/images/thumbs/cupcakes.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
 <div class="card">
      <h5 class="card-title">Card title</h5>
    <img src="//static-cdn.123rf.com/stock-photo/images/thumbs/success.jpg" class="card-img-top" alt="...">
  </div> 
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <div class="card">
    <img src="//static-cdn.123rf.com/stock-photo/images/thumbs/success.jpg" class="card-img-top" alt="...">
  </div> 
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
 </section>
 <a href="formulairecat.php">Ajouter une categorie</a>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>