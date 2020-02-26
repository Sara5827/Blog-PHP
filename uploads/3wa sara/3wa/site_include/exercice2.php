<?php
    $dict=array(
    "bonjour" => "good morning",
    "salut"  => "hello"
    );

    if(isset($_POST["btn"])){
        $direction=$_POST["traduit"];
        $text=$_POST["word"];
        if($direction=="toEnglish"){
             array_key_exists($text,$dict);
             echo $dict[$text];
        echo $text;
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
    <section>
        <form method="POST" action="">
            Word:<input type="text" name="word" />
            <label for="langue">Traduire le mot en:</label>
            <select name="traduit">
                <option value="toFrench">vers Francais</option>
                <option value="toEnglish">vers Anglais</option>
            </select>
            <input type="submit" name="btn">

        </form>
    </section>

</body>

</html>