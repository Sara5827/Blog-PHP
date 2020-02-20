<?php 

require('connexion.php');

// +++++++++++++++++++++++++++++++++++ Select cathegorie +++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

#the folder where the images are saved 
$target = "uploads/";

$query = ("SELECT nom , imgcat FROM categorie");
$image_show= $conn-> prepare($query);
$image_show->execute();
while($record =$image_show->fetch(PDO::FETCH_ASSOC)) {
#this is the Tannery  operator to replace a pic when an id do not have one
$photo = $record['imgcat'];
#display image 
echo '<img src="'.$target.$photo.'">';
}

// +++++++++++++++++++++++++++++++ Select Auteur +++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>