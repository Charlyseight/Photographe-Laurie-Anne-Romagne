<?php
    if(isset($_POST["submit"])){
        $error = [];
        if(isset($_POST["name"]) && strlen($_POST["name"])===0){
            $error[] = "Vous n'avez pas mis votre nom";
        }
        if(isset($_POST["mail"]) && strlen($_POST["mail"])===0){
            $error[] = "Vous n'avez pas mis votre email";
        }
        if(isset($_POST["message"]) && strlen($_POST["message"])===0){
            $error[] = "Vous n'avez pas mis de message";
        }

        if(sizeof($error)===0){
            header('location:envoye.html');
        }
    }
?>



<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact | Laurie-Anne Romagne</title>
        <meta name="keyword" content="artiste, photographe, photos, art, expositions">
        <meta name="description" content="Laurie-Anne Romagne est une artiste passionnée par la photographie. Depuis plusieurs années la photographie est son métier.Photographe variée, Laurie-Anne Romagne propose des photographies de grossesses, mariages, portraits, etc. Elle réalise également des expositions de ses compositions artistiques. ">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="../assets/css/bundle.css">

    </head>
    <body>
        <!--[if lte IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p><![endif]-->
        <header class="croop">
            <h1 class="hidden">
                Le site de Laurie-Anne Romagne
            </h1>
            <div class="header__maindiv">
                <div class="header__divlogomain">
                    <a href="../index.html" class="header__logolink" title="Aller sur la page d'accueil">
                        <img src="../assets/images/general/logo_copie.png" class="header__logoimg" alt="Logo du site de Laurie-anne Romagne">
                        <p class="sizedownname">Laurie-Anne Romagne</p>
                    </a>
                </div>
                <input id="burger" type="checkbox" class="checkbox">
                <label for="burger" class="burgercss">
                    <span class="hidden">Ouvrir/fermer le menu</span>
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav class="nav">
                    <h2 class="hidden">Navigation principale</h2>
                    <ul>
                        <li class="nav__accueil">
                            <a href="../index.html" title="Aller sur la page 'Accueil'">Accueil</a>
                        </li>
                        <li class="nav__professionnels">
                            <a href="professionnel.html" title="Aller sur la page 'Professionnels'">Professionnels</a>
                        </li>
                        <li class="nav__particuliers">
                            <a href="particulier.html" title="Aller sur la page 'Particuliers'">Particuliers</a>
                        </li>
                        <li class="nav__artistiques">
                            <a href="artistique.html" title="Aller sur la page 'Artistiques'">Artistiques</a>
                        </li>
                        <li class="nav__apropos">
                            <a href="apropos.html" title="Aller sur la page 'À propos'">À propos</a>
                        </li>
                        <li class="nav__contact">
                            <a href="contact.php" title="Aller sur la page 'Me contacter'">Me contacter</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__infos">
                <p class="header__navcat">À propos</p>
                <!--<a href="contact.php" class="header__contact">Me contacter</a>-->
            </div>
        </header>
        <main>
            <h1 class="hidden">
                Les coordonnées de contact de Laurie-Anne Romagne
            </h1>
            <div itemscope itemtype="http://schema.org/Person">
                <meta itemprop="familyName" content="Laurie-Anne Romagne">
                <meta itemprop="jobTitle" content="Photographe">
                <meta itemprop="description" content="Laurie-Anne Romagne est une artiste passionnée par la photographie. Depuis plusieurs années la photographie est son métier.Photographe variée, Laurie-Anne Romagne propose des photographies de grossesses, mariages, portraits, etc. Elle réalise également des expositions de ses compositions artistiques.">
                <meta itemprop="image" content=" <img src='./assets/images/general/14045890_10209939581348985_6436193251335793692_n.jpg'>">
                <meta itemprop="email" content="info@laurianne-romagne.com">
                <meta itemprop="workLocation" content="Belgique">
            </div>
            <div itemscope itemtype="http://schema.org/Photograph">
                <meta itemprop="about" content="Laurie-Anne Romagne est une artiste passionnée par la photographie. Depuis plusieurs années la photographie est son métier.Photographe variée, Laurie-Anne Romagne propose des photographies de grossesses, mariages, portraits, etc. Elle réalise également des expositions de ses compositions artistiques.">
                <meta itemprop="keywords" content="artiste, photographe, photos, art, expositions">
                <meta itemprop="citation" content="Je pratique depuis plusieurs années une photographie d’auteur à tendance autobiographique et poétique.">
            </div>
            <section class="contact">
                <div>
                    <h2 class="contact__first">
                        Me contacter
                    </h2>
                    <p class="contact--text">
                        Mes coordonnées
                    </p>
                    <div>
                        <div class="contact__coordonnees">
                            <div class="mail">
                                <a href="mailto:info@laurianne-romagne.com" class="mail--a flex" title="Envoyer un email à Laurie-Anne Romagne">
                                    <span class="far fa-envelope contact__mail"></span>
                                        <span class="mail__info">
                                            <span class="hidden">L'adresse mail de Laurie-Anne Roamgne</span>
                                            info@laurianne-romagne.com
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="facebook">
                                <a href="http://www.facebook.com/laurieanneromagnephotographie/" class="facebook--a flex" title="Le compte Facebook de Laurie-Anne Romagne">
                                    <span class="fab fa-facebook-square contact__symbol"></span>
                                    <span class="facebook__contact">
                                        <span class="hidden">Le compte facebook de Laurie-Anne Romagne</span>
                                       Laurie Anne Romagne photographie
                                    </span>
                                </a>
                            </div>
                            <div class="instagram--logo">
                                <a href="http://www.instagram.com/laurieanneromagnephotographie/" class="instagram--a flex" title="Le compte Instagram de Laurie-Anne Romagne">
                                    <span class="hide__mobile">
                                        <span class="fab fa-instagram contact__symbol"></span>
                                            <span class="hidden">Le compte instagrame de Laurie-Anne Romagne</span>
                                            @LaurieAnneRomagnephotographie
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact__form">
                    <div class="errors">
                        <?php if(isset($error) && sizeof($error)>0): ?>
                            <ul>
                                <?php foreach($error as $e): ?>
                                    <li>
                                        <p>
                                            <i class="fas fa-exclamation"></i>
                                            <?= $e ?>
                                        </p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <form action="#" method="POST">
                        <div class="contact__coordonnees--flex">
                            <label for="name">Nom</label>
                            <input type="text" id="name" name="name" value="<?= @$_POST['name']?>">
                        </div>
                        <div class="contact__coordonnees--flex">
                            <label for="mail">Email</label>
                            <input type="text" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="mail" value="<?= @$_POST['mail']?>">
                        </div>
                        <div class="contact__coordonnees--flex">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"><?= @$_POST['message']?></textarea>
                        </div>
                        <input type="submit"  name="submit" value="Envoyer">
                    </form>
                </div>
            </section>
            <section class="encart_projet">
                <h2>
                    Envie de voir mes projets&nbsp;?
                </h2>
                <ul>
                    <li class="encart__pro">
                        <a href="professionnel.html" class="pro__pro" title="Aller sur la page 'Projets professionnels'">
                            <div class="pro__div">
                                <img src="../assets/images/Professionnels/Loft%20capucine/09.jpg" alt="projets professionnels" class="pro__pro__img" width="800" height="532">
                                <p class="pro__pro__text pro__text__mob propos__mob">Projets professionnels </p>
                            </div>
                        </a>
                    </li>
                    <li class="encart__pro">
                        <a href="particulier.html" class="pro__pro" title="Aller sur la page 'Projets particuliers'">
                            <div class="pro__div">
                                <img src="../assets/images/Particuliers/Mariage/V&H232.jpg" alt="projets particuliers" class="pro__pro__img" width="500" height="333">
                                <p class="pro__pro__text pro__text__mob propos__mob">Projets particuliers</p>
                            </div>
                        </a>
                    </li>
                    <li class="encart__pro">
                        <a href="artistique.html" class="pro__pro" title="Aller sur la page 'Projets artistiques'">
                            <div class="pro__div">
                                <img src="../assets/images/Artistique/Errance/12.jpg" alt="projets artistiques" class="pro__pro__img" width="663" height="531">
                                <p class="pro__pro__text pro__text__mob propos__mob">Projets artistiques</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>
            <div class="acheter__photos__border">
                <section class="encart_acheter_photo">
                    <h2>
                        Interessé par mes photos&nbsp;?
                    </h2>
                    <a href="#" title="Acheter les photos de Laurie-Anne Romagne">Acheter mes photos</a>
                </section>
            </div>
        </main>
        <footer>
            <div class="footer__content">
                <div class="footer__flex">
                    <a href="https://www.facebook.com/laurieanneromagnephotographie/" title="Se rendre sur le compte Facebook de Laurie-Anne Romagne" class="footer__facebook">
                        <span class="fab fa-facebook-square">
                            <span class="hidden">Le compte Facebook de Laurie-Anne Romagne</span>
                        </span>
                    </a>
                    <a href="https://www.instagram.com/laurieanneromagnephotographie/" title="Se rendre sur le compte instagram de Laurie-Anne Romagne" class="footer__insta">
                        <span class="fab fa-instagram">
                            <span class="hidden">
                                Le compte instagram de Laurie-Anne Romagne
                            </span>
                        </span>
                    </a>
                </div>
                <small>
                    © Laurie-Anne Romagne - All rights reserved
                </small>
            </div>
        </footer>
    </body>
</html>

