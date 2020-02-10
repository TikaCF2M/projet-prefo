<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link href="../css/styles.css" rel="stylesheet">
        <script async src="../main.js"></script>

    </head>
    <header>

        <div id="nav-bar">
            <div class="Logo-nav">
                <a href="../index.html"><img src="../image/ecee08f4-add5-40d6-96b8-4cc858d5bb74_200x200.png"> </a>
            </div>
            <nav id=navigation>
                <ul>

                    <li id="Acceuil"><a class="texte-nav" href="../index.html">Accueil</a></li>

                    <li><a class="texte-nav" href="experiencebrussels.html">Experience.Brussels</a></li>
                    <li><a class="texte-nav" href="interview.html">Interview</a>
                    <li><a class="texte-nav" href="contact.php"> Contact</a></li>


                </ul>

            </nav>
        </div>


    </header>
    <body onload="setTimeout('cacheImg()', 3000);">

    <div id="Formulaire">
        <div id="googlemap">


            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.3069034893006!2d4.336445815744992!3d50.82547897952883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4424e34c979%3A0x1a9531ce83e9a111!2sAvenue%20du%20Parc%2089%2C%201060%20Saint-Gilles!5e0!3m2!1sfr!2sbe!4v1580287168960!5m2!1sfr!2sbe"></iframe>
        </div>


        <fieldset>

            <legend><h1>Contact info </h1></legend>
            <p>Avenue du Parc 89, 1060 Bruxelles</p>
            <p>web2020.thomas@gmail.com</p>


            <?php if (array_key_exists('errors', $_SESSION)): ?>
                <div class="alert_errors">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>

            <?php if (array_key_exists('success', $_SESSION)): ?>
                <div class="alert_sucess"> votre mail a bien été envoyé !</div>
            <?php endif; ?>


            <form action="post_contact.php" method="post">
                <p><input name='nom' id="inputnom" maxlength="10" placeholder="Nom" size="40"
                          type="text"></p>
                <p><input name="prenom" id="inputprenom" maxlength="10" placeholder="Prenom"
                          size="40"
                          type="text"></p>
                <p><input name="tel" id="inputtel" maxlength="10" placeholder="Téléphone/GSM"
                          size="40" type="text"></p>
                <p><input name="email" id="inputemail" maxlength="20" placeholder="Votre mail"
                          size="40" type="email"></p>
                <p><textarea name="message" id="inputmessage" cols="30" placeholder="Message:" rows="15"></textarea></p>

                <button type="submit">Envoyer Email !</button>
            </form>


        </fieldset>


    </div>

    <div id="loader" class="loader"></div>
    <footer id="foot">


        <div id="menufoot">
            <div id="logo-foot">
                <a href="https://www.cf2m.be/"> <img src="../image/CF2mlogo.png"></a></div>
            <hr>
            <div id="nav-foot">
                <h2>Menu</h2>
                <ul>
                    <li><a " href="../index.html">Accueil</a></li>
                    <li><a c href="experiencebrussels.html">Experience.Brussels</a></li>
                    <li><a href="#">Interview</a></li>
                    <li><a href="contact.php"> Contact</a></li>


                </ul>
            </div>
        </div>


    </footer>
    </body>
    </html>
<?php

unset($_SESSION['success']);
