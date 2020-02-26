<?php
if (isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $auteur = $_POST['auteur'];
    $lool = $_POST['lool'];
    $facebook = $_POST['facebook'];
    $linkdin = $_POST['linkdin'];
    $instagram = $_POST['instagram'];
}
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-affiche.css">
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
        <section id="article">
            <article>

                <div id="entete">
                    <h2><?php echo  $titre ?></h2>
                    <h2><?php echo  $categorie ?></h2>
                    <h2><?php echo  $auteur ?></h2>
                </div>
                <h4>
                    <?php echo  $lool ?>
                </h4>


                <div id="read">Read more...</div>

            </article>
            <aside>
                <img src="aside-photo.png" alt="">

            </aside>


        </section>
        <section id="icon">
            <?php echo '<a href="http://' . $facebook; ?>"><i class="fa fa-facebook-square"></i></a>
            <?php echo '<a href="http://' . $facebook; ?>"><i class="fa fa-linkedin"></i></a>
            <?php echo '<a href="http://' . $facebook; ?>"><i class="fa fa-instagram"></i></a>
        </section>
    </main>


    <?php include "footer.php" ?>
</body>

</html>