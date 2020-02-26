<?php 

    if(isset($_POST['submit'])){

        $file = $_FILES['picture'];
        print_r($file);
        $fileName = $_FILES['picture']['name'];
        $fileTmpName = $_FILES['picture']['tmp_name'];
        $fileError = $_FILES['picture']['error'];
       
        if($fileError === 0){
            $fileDestination = 'uploads/'.$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            // header("Location: index.php");

        }else {
            echo "There was an error";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <img src="uploads/<?= $fileName ?>" alt="">
</body>

</html>