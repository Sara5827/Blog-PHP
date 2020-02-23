<?php
require('FormValidation.php');
$dbname = "blognative";
if (isset($_POST['SubmitAuteur']))  {
    $nom = test_input($_POST['nomauteur']);
    $email = test_input($_POST['email']);
    $Avatar = test_input($_POST['avatar']);
    

try {
    $sql = "INSERT INTO auteur (nom_complet, email, avatar)
    VALUES ('$nom', '$email', '$Avatar')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header('refresh:1 url=AuteurBlog.php');

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