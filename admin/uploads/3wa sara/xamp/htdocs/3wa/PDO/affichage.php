<?php 
include 'connexion.php';

$stmt = $conn->prepare("SELECT * FROM ecole");
$stmt->execute();

// set the resulting array to associative
while($result = $sth->fetch(PDO::FETCH_ASSOC)){
    echo $result["id_tuteur"]."<br>";
}
?>