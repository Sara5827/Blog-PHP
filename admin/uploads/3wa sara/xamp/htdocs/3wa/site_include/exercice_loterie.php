<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
      $tab=array();
      while(count($tab)<6){
        $number=rand(1,49);
        if(in_array($number,$tab)){
          echo "valeur deja existe";
          
        }
        else{
          array_push($tab,$number);
        }
       
       
    }
    print_r($tab);
    sort($tab);
    print_r($tab);

    ?>
</body>

</html>