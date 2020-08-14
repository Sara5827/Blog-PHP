<?php
// +++++++++++++++++++++++++++++++++++ UPLOAD ++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["ajoutercat"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}
}
// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file.";
}
}


// ++++++++++++++++++++++++++++++++Connexion+++++++++++++++++++++++++++++++++++++++
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

require('FormValidation.php');

// +++++++++++++++++++++++++++++++++Insertion++++++++++++++++++++++++++++++++++++++
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$dbname = "blognative";
if (isset($_POST['AjouterArticle'])){
    $titre = test_input($_POST['titre']);
    $contenu = test_input($_POST['contenu']);
    $Auteur = test_input($_POST['auteur']);
    $cat = test_input($_POST['cat']);
    $date1 = test_input($_POST['date1']);
    $imgcat = test_input($_FILES["fileToUpload"]["name"]);
    // $auteur_option = $_POST['auteur_option'];
    // $categorie_option = $_POST['categorie_option'];

try {
    $sql = "INSERT INTO article (title, contenu, auteur, img, date1, categorie)
    VALUES ('$titre', '$contenu', '$Auteur', '$imgcat', '$date1', '$cat')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    header('Location: elements.php');
}

// +++++++++++++++++++++++++++++++++Supprimer++++++++++++++++++++++++++++++++++++++
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// if (isset($_POST['supprimer'])){
//  $id= $_POST['supprimer'];
//    try{
//          $sql=("DELETE FROM `article` WHERE id_article = $id");
//        $conn->exec($sql);
//        echo "deleted";
//     }catch(PDOException $e){
//        echo $e;
//      }
//     header('refresh:1 url=cat.php'); 
//  }
 ?>