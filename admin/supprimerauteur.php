<?php
require('connexion.php');

$id = $_GET['supprimer'];

$stmt= $conn-> prepare("DELETE FROM auteur WHERE id_auteur = $id");
$stmt->execute();
header('Location: AuteurBlog.php');
    ?>