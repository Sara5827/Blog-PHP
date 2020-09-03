<?php  
header('Location: ./insertion.php');
if(isset($_POST['submit'])){
     
    $username = "root";
    $password = "";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];
      echo $nom;
    }
?>