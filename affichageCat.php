<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
<?php 
  require('connexion.php'); 
?>
<?php 
            $id_article = $_GET['id_article'];
            $target = "uploads/";
            $query = ("SELECT * FROM article WHERE id_article = $id_article");
            $image_show= $conn->prepare($query);
            $image_show->execute();
            $record =$image_show->fetch(PDO::FETCH_ASSOC);
              // print_r($record);
?>
<div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $record['title'];?></strong>
          <div class="mb-1 text-muted"><?php echo $record['date1'];?></div>
          <p class="card-text mb-auto"><?php echo $record['contenu'];?></p>
          <a href="#" class="stretched-link">commentaire</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="500" height="350" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" src="<?php echo $target.$record['img'];?>"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
</div>
    <!-- ************************************Commentaire************************************ -->
<!-- *********************************************************************************** -->
<form method="POST" action="commentaire.php">
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="name">
</div>
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
 </div>
 <input type="text" class="d-none" value="<?=  $id_article  ?>" name="idar">
 <button type="submit" class="btn btn-primary" name="com">commenter</button>
</form>
<!--**************************************************************************************** -->
<!-- *************************************************************************************** -->

<!--*********************************************************Afichage de commentaire******************************* -->
<!-- *************************************************************************************** -->

<?php 
    $target = "uploads/";
    $query = ("SELECT * FROM commentaire where id_article = $id_article");
    $image_show= $conn-> prepare($query);
    $image_show->execute();
    while($record =$image_show->fetch(PDO::FETCH_ASSOC)):
      print_r($record);
 ?>
<form method="GET" action="supprimerCom.php">
    <div class="media text-muted pt-3">
    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark"><?php echo $record['nickname'];?></strong>
          <span class="d-block"><?php echo $record['contenue'];?></span>
          <input type="text" class="d-none" value="" name="idar">
          <input type="text" class="d-none" value="<?=  $id_article  ?>" name="idart">
          <a href="supprimerCom.php?supp=<?= $record['id_commentaire'];?>&id_article=<?=  $id_article  ?>" name="supp">Supprimer</a>
        </div>
       
      </div>
    </div>
    </form>

 <?php endwhile;?>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>