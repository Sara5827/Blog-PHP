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
        <form method="POST" action="affichage.php">
            <div>
                nom: <input type="text" name="nom" required placeholder="First Name"> </input>
            </div>
            <div>
                prénom: <input type="text" name="prenom" required placeholder="Last Name"> </input>
            </div>
            <div>
                Votre Adresse: <input type="text" name="adresse" required placeholder="Age"> </input>
            </div>
            <div>
                telephone: <input type="text" name="telephone" required placeholder="telephone"> </input>
            </div>
            <div>
                email: <input type="text" name="email" required placeholder="email"> </input>
            </div>
            <button type="submit" name="submit">envoyer</button>
        </form>
    </section>
</body>

</html>