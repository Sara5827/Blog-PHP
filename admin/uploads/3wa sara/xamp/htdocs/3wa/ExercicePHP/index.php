<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header></header>
    <main>
        <section>
            <div class="div_container" id="div_container-test" width="100%">
                <div class="div__arrowBody" id="div__arrowbody--test">
                    <h1> Ma Todolist</h1>
                </div>
            </div>
            <div class="div_container" id="div_container-test" width="100%">
                <div class="div__arrowBody" id="div__arrowbody--test">
                    <input type="checkbox">
                    <?php 
                    if(isset($_POST['submit'])){
                        echo $_POST['titre'];
                        $test=$_POST['titre'];
                        $test++;
                        echo $test;
                    }
                    
                  ?></input>
                </div>
            </div>
        </section>
        <th>
            <section>
                <form action="index.php" method="POST">
                    <div class="div_container" id="div_container-test" width="100%">
                        <div class="div__arrowBody" id="div__arrowbody--test">
                            <h1> Nouvelle tache</h1>
                        </div>
                    </div>
                    <div class="div_container">
                        <div class="div__arrowBody">
                            <input type="text" placeholder="Titre" class="input__textZone" name="titre" />
                        </div>
                        <div class="div__arrowHead"><i class="fa fa-edit"></i></div>
                    </div>
                    <div class="div_container" id="div_container-test">
                        <div class="div__arrowBody" id="div__arrowbody--test"> <textarea name="description"
                                placeholder="Description" cols="114" rows="6"></textarea></div>
                    </div>
                    <div class="div_container">
                        <div class="div__arrowBody">
                            <input type="date" placeholder="date" class="input__textZone" />
                        </div>
                        <div class="div__arrowHead"><i class="fa fa-calendar"></i></div>
                    </div>
                    <div class="div_container" id="div_container-test">
                        <div class="div__arrowBody" id="div__arrowbody--test">
                            Priorité <input type="radio" name="priorite"> Basse
                            <input type="radio" name="priorite">Normal
                            <input type="radio" name="priorite">Haute
                        </div>
                    </div>
                    <div class="div_container" id="div_container-test">
                        <div class="div__arrowBody" id="div__arrowbody--test">
                            <button class="div__arrowBody" name="submit" id="div__arrowbody--test">Enregistrer</button>
                        </div>
                    </div>
            </section>
            </form>
    </main>
</body>

</html>