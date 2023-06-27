<?php 
$title = "Connexion"; 
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <meta name="description" content>
        <script
            src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300;400;700&display=swap"
            rel="stylesheet">
            <link rel="icon" type="image" href="<?= ASSETS. "img/Group 2071.png"?> " />       
        <link rel="stylesheet" href="<?= ASSETS. "css/reset.css"?>">7
        <link rel="stylesheet" href="<?= ASSETS. "css/conex.css" ?>">
        <script src="<?= ASSETS. "js/slider.js"?>" defer></script>
    </head>
<body>
        <section>

            <div class="imgbox">
                <img src="<?= ASSETS. "img/c63fe9bed2c9bd31cd36530ad8d53e0b.jpg"?>" alt="epices">
                <img src="<?= ASSETS. "img/42d5f54cba25927d53e1bf48b820da8d.jpg"?>" alt="epices">

                <img src=" <?= ASSETS. "img/carou1.jpg"?>" alt="Image 1">
                <img src=" <?= ASSETS. "img/carou2.jpg"?>" alt="Image 2">
                <img src=" <?= ASSETS. "img/carou3.jpg"?>" alt="Image 3">
            </div>

            <div class="contentbox">
                <div class="formbox">
                    <h1>Se connecter</h1>
                        <form action="login" method="POST">
                            <div class="inputbx">
                                <span>Email</span>
                                <input type="text" name="mail"> 
                            </div>
                            <div class="inputbx">
                                <span>Mot de passe</span>
                                <input type="password" name="mdp">
                            </div>
                            <div class="inputbx">
                                <input type="submit" value="Connexion" name="submit">
                            </div>
                            <div class="inputbx">
                                <p>Vous n'avez pas de compte ? <a
                                        href="inscription">Créez un compte !</a></p>
                            </div>
                        </form>

                </div>

            </div>
        </section>

    </body>
