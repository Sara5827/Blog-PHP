<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>
<body>
    <section>
       <article>
           <div class="left">
               <header>
                   <div><h2><?php echo $_REQUEST["titre"] ?></h2></div>
                   <div><h2><?php echo $_REQUEST["categorie"] ?></h2></div>
                   <div><h2><?php echo $_REQUEST["auteur"] ?></h2></div>
               </header>
               <main>

                   <p><?php echo $_REQUEST["commentaire"] ?></p>
               </main>
               <div class="more"><a href="#">Read More...</a></div>
               
           </div>
           <div class="right">
               <img src="<?php echo $_REQUEST["image"] ?>" alt="valley">
           </div>
       </article> 
       <footer>
           <div><a href="<?php echo $_REQUEST["mail"] ?>"><i class="far fa-envelope"></i></a></div>
           <div><a href="<?php echo $_REQUEST["linkdin"] ?>"><i class="fab fa-linkedin"></i></a></div>
           <div><a href="<?php echo $_REQUEST["facebook"] ?>"><i class="fab fa-facebook-square"></i></a></div>
       </footer>
    </section>
</body>
</html>