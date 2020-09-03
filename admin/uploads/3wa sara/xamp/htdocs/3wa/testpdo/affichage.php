<?php
$servername = "localhost";
$username ="root";
$password = "";
try {
    $conn = new PDO("mysql:host=localhost;dbname=ecole", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$query = $conn->prepare("SELECT * FROM tuteur");
// $query->bindValue(1, "smile");
$query->execute();

if($query->rowCount()){
  while($data = $query->fetch(PDO::FETCH_NUM)){
    $nom = $data[0];
    $prenom = $data[1];
    $adresse = $data[2];
    $telephone = $data[3];
    $email = $data[4];
    
    echo "$nom, $prenom, $adresse, $telephone, $email";
  }
}


// $sql = "SELECT nom, prenom, adresse, telephone, email  FROM ecole";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "nom " . $row["nom"]. " " . $row["prenom"]. " " . $row["adresse"]. " ". $row["telephone"]. " " . $row["email"]. "<br>";
//     }
// else {
//     echo "0 results";
// }
}
 catch(Exception $e){
    echo "affichage: " . $e->getMessage();
}
?>