<h1> Affichage des informations </h1>
<section>
    <?php 
    $var=$_POST['name'] . $_POST['prenom'];
    file_put_contents('test.txt',$var);
    ?>
    <p>Nom:<?php echo $_POST['name'] ; ?></p>
    <p>Titre: <?php echo $_POST['prenom']; ?></p>
</section>