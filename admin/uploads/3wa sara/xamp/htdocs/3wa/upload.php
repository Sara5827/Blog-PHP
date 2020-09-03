<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Image </title>
</head>

<body>
    <h1>Titre principal</h1>
    <?php file_put_contents('exemple.txt', 'Ecriture dans un fichier');  ?>
    <p> un paragraphe </p>
    <?php $fichier = fopen('exemple2.txt', 'w+');
    fwrite($fichier,'Bonjour comment vas tu ??');
    rewind($fichier);
    echo fgets($fichier ,2);
    echo fgetc($fichier);
    fclose($fichier);
    
// $filename = "exemple2.txt";
// $handle = fopen($filename, "rb");
// $contents = fread($handle, filesize($filename));
// rewind($fichier);
// echo $handle;
// fclose($handle);
    
?>

</body>

</html>