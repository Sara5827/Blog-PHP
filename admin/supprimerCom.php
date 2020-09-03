<?php
require('connexion.php');
// print_r($_GET);

$id = $_GET['supp'];
$id1 = $_GET['id_article'];
$stmt= $conn-> prepare("DELETE FROM commentaire WHERE id_commentaire = $id");
$stmt->execute();
header("Location: affichageCat.php?id_article=$id1");
    ?>