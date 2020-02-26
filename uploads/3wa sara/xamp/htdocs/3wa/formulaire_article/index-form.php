<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-form.css">
    <link rel="stylesheet" href="footer-header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php include "header.php" ?>

    <!-- -----------------------------------main -->
    <main>

        <section>
            <form action="affiche-article.php" method="POST">
                <fieldset>
                    <legend>Description article</legend>
                    <label for="">Titre</label>
                    <input type="text" name="titre" id="" placeholder="Titre.">
                    <label for="">Categorie</label>
                    <input type="text" name="categorie" id="" placeholder="Categorie.">
                    <label for="">Auteur</label>
                    <input type="text" name="auteur" id="" placeholder="Auteur.">
                </fieldset>

                <div id="text-article">
                    <fieldset>
                        <legend>Article</legend>

                        <textarea name="lool" id="" cols="80" rows="20" placeholder="Votre article."></textarea>


                    </fieldset>
                </div>
                <div id="social">
                    <fieldset>
                        <legend>social</legend>


                        <label for="">facebook</label>
                        <input type="text" name="facebook" id="" placeholder="facebook.">
                        <label for="">linkdin</label>
                        <input type="text" name="linkdin" id="" placeholder="linkdin.">
                        <label for="">instagram</label>
                        <input type="text" name="instagram" id="" placeholder="instagram.">


                    </fieldset>
                    <div id="button"><input type="submit" name="submit" value="Valider"></div>
                </div>


            </form>
        </section>
        <section id=" icon">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-instagram"></i>
        </section>
    </main>


    <?php include "footer.php" ?>
</body>

</html>