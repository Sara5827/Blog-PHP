<?php
 require('connexion.php');
try {
    print_r($_REQUEST);
        $sql = "UPDATE auteur SET nom_complet='".$_REQUEST['nomauteur']."', avatar= 'TEST.png', email='".$_REQUEST['email']."' WHERE id_auteur = '".$_REQUEST['id_auteur']."'";
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
?>
