
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
    header('refresh:1 url=categorie.php'); 
}

// ===============================================================

if (isset($_GET['modifier'])){
    
    try {
        $sql = "UPDATE categorie SET nom='".$_REQUEST['nomcat']."', imgcat= 'TEST.png' WHERE id_categorie = '".$_REQUEST['id_categorie']."'";
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
    header('refresh:1 url=categorie.php'); 
}
?>
