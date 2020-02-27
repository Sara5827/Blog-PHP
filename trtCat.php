
<?php
require('connexion.php');
if (isset($_GET['supprimer'])){
    $id= $_GET['supprimer'];
    try{
        $sql=("DELETE FROM `categorie` WHERE id_categorie = $id");
        $conn->exec($sql);
        echo "deleted";
    }catch(PDOException $e){
        echo $e;
    }
    header('Location: categorieBlog.php'); 
}

// ===============================================================

if (isset($_POST['modifier'])){

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

    try {
        if($_FILES["fileToUpload"]["error"]){
            $currImg = $_POST['oldImage'];
        }else {
            $currImg = $_FILES["fileToUpload"]["name"];
        }

        $sql = "UPDATE categorie SET nom='".$_REQUEST['nomcat']."', imgcat= '".$currImg."' WHERE id_categorie = '".$_REQUEST['id_categorie']."'";
    echo $sql;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    header('Location: categorieBlog.php'); 
}
?>
