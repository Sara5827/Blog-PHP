<?php
require('connexion.php');

$id = $_GET['supp'];

$stmt= $conn-> prepare("DELETE FROM article WHERE id_article = $id");
$stmt->execute();
header('Location: elements.php');
    ?>