<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="wolf.css">
    <title>Document</title>

    <!-- Slider -->
    <link rel="stylesheet" href="flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="jquery.flexslider.js"></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div>
            <img src="img/logo.svg" width="156px" class="test">
        </div>
        <nav>
            <ul>
                <li>Nos produits</li>
                <li>Nos tarifs</li>
                <li>Contactez-nous</li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>
            <legend>DEVENEZ LE MOZART DE LA MOTO AVEC WOLF'<span style="color:orange">GANG!</span></legend>
        </h1>
        <section class="Flexs">
            <!-- slider -->
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div> <img src="slide1.jpg" alt="test" class="test" width="100%" /></div>
                    </li>
                    <li>
                        <div> <img src="slide2.jpg" alt="test" width="100%" /></div>
                    </li>
                    <li>
                        <div> <img src="slide3.jpg" alt="test" width="100%" /></div>
                    </li>
                </ul>
            </div>

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
            </script>
        </section>
        <hr>
        <h4>DECOUVREZ <span style="color: orange;">NOS MOTOS</span></h4>
        <?php 
       for($i=0; $i<5; $i++){
        include "moto.php";
       }
       ?>
    </main>
    <hr>
    <footer>
        <div>
            <div class="foter">
                <h4>LOREN ISPUM</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis arcu ac neque accumsan lacinia
                    sed sit amet magna. Nunc facilisis ex id tellus ultrices, vitae malesuada urna rhoncus. Vestibulum
                    vel nisi quis enim vulputate consectetur
                    vitae vitae erat. Sed eu gravida nisl.</p>
                <nav class="foter__list">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Client</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div id="div1"> <img
                    src="https://yt3.ggpht.com/a/AGF-l7-ODZtNFgN6q5o0f1D2I4Q91hXPBXFlGhMYQA=s900-c-k-c0xffffffff-no-rj-mo"
                    WIDTH=50 HEIGHT=50 /> </div>
            <h6>
                Cet exercice de <span style="color: #F5A9F2">3W Academy</span> est mis à disposition <span
                    style="color: #F5A9F2">pour l'usage personnel des étudiants, Pas de <br>
                    Rediffusion - Attribution - Pas d'Utilisation Commerciale - Pas de Modification -
                    International.</span><br> Les autorisations au-delà du champ de cette licence peuvent être obtenues
                auprès de<span style="color: #F5A9F2"> contact@3wa.fr.</span><br> Les maquettes ont été réalisées par
                <span style="color: #F5A9F2">Justine Muller.</span>
            </h6>
        </div>
    </footer>
</body>

</html>