<?php
require('connexion.php');
$dbname = "blognative";
if (isset($_POST['SubmitAuteur']))  {
    $nom = $_POST['nomauteur'];
    $email = $_POST['email'];
    $Avatar = $_POST['avatar'];
    

try {
    $sql = "INSERT INTO auteur (nom_complet, email, avatar)
    VALUES ('$nom', '$email', '$Avatar')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
   
//+++++++++++++++++++++++++++++++delet++++++++++++++++++++++++++++++++++++++++++++ -->
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

if (isset($_GET['supprimer'])){
    $id= $_GET['supprimer'];
    try{
        $sql="DELETE * FROM 'auteur' where id_auteur=$id";
        $conn->exec($sql);
        echo "deleted";
    }catch(PDOexception $e){
        echo $e;
    }
    // header('refresh:1 url=categorie.php');
}
?>