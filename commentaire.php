<?php
require('connexion.php');
$dbname = "blognative";
print_r($_POST);
if (isset($_POST['com']))  {
    $nom = $_POST['name'];
    $contenue = $_POST['commentaire'];
    $id_article = $_POST['idar'];
    $id_commentaire = $_POST['idart'];
    // echo $imgcat;

try {
    $sql = "INSERT INTO commentaire (nickname, contenue, id_article)
    VALUES ('$nom', '$contenue', $id_article)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";

    header("Location: affichageCat.php?id_article=$id_article");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }   
}
$conn = null;
?>
