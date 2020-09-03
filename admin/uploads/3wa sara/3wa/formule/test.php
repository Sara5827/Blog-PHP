<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <ul>
                <li>Home</li>
                <li>Product</li>
                <li>Portfolio</li>
                <li>About us</li>
                <li>Contavt us</li>
            </ul>
        </div>
    </header>
    <main>
        <section class="info">
            <article class="info__img">
                <img src="img/<?php echo $_POST['image'];?>" class="info__img--lol">
            </article>
            <aside>
                <div class="info__Titre">
                    <h3>Nom:<?php echo $_POST['name'];  ?></h3>
                    <h3>Titre:<?php echo $_POST['prenom'] ?></h3>
                    <h3>Categorie:<?php echo $_POST['cat'] ?></h3>
                </div>
                <div class="info__com">
                    <p id="cop" Style="word-break: break-word; padding:50px">
                        <?php echo $_POST['commentaires'];  ?>
                    </p>
                    <button>Read More</button>
                </div>
            </aside>
        </section>
        <section class="icon">
            <a href='<?php echo $_POST['monURL1']?>' target="_blank"><i class="fa fa-facebook-square"></i></a>
            <a href='<?php echo $_POST['monURL2'] ?>' target="_blank"> <i class=" fa fa-linkedin"></i></a>
            <a href='<?php echo $_POST['monURL3']?>' target="_blank"><i class=" fa fa-instagram"></i></a>
        </section>
        <section>
            <div id="disqus_thread"></div>
            <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://my-personal-portfolio-1.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by Disqus.</a></noscript>

        </section>
    </main>
</body>
<footer>

</footer>

</html>