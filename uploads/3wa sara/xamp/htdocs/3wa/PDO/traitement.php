<?php  
if(isset($_POST['submit'])){
  
    // $servername = "localhost";
    $username = "root";
    $password = "";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];
    
    try {
        $conn = new PDO("mysql:host=localhost;dbname=ecole", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //................insertion des valeur.......................................
        $stmt=$conn->prepare("INSERT INTO tuteur (nom, prenom, adresse, telephone, email)
         VALUES (:nom, :prenom, :adresse, :telephone, :email)" ) ;
          $stmt->bindParam(':nom', $nom);
          $stmt->bindParam(':prenom', $prenom);
          $stmt->bindParam(':adresse', $adresse);
          $stmt->bindParam(':telephone', $telephone);
          $stmt->bindParam(':email', $email);
          $stmt-> execute() ;
          echo "New records created successfully";
         //............................affichage des info..............................
         
        
}