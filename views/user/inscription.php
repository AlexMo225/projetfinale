<?php  

$title = "inscription";


?>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
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
        <link rel="stylesheet" href="<?= ASSETS. "css/reset.css"?>">
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
                        <h1>Créez Votre Compte</h1>


                        <form method="post" action="inscription" id="inscription">
                            <div class="inputbx">
                                <span>Nom</span>
                                <input id="nom" type="text" name="nom">
                            </div>
                            <div class="inputbx">
                                <span>Prenom</span>
                                <input id="prenom" type="text" name="prenom">
                            </div>
                            <div class="inputbx">
                                <span>Login</span>
                                <input id="login" type="text" name="login">
                            </div>
                            <div class="inputbx">
                                <span>Email</span>
                                <input name="mail" id="mail" type="mail">
                            </div>
                            <div class="inputbx">
                                <span>Mot de passe</span>
                                <input id="password"  type="password" name="password">
                            </div>
                            <div class="inputbx">
                                <span>Télephone</span>
                                <input type="tel" id="tel"  name="telephone">
                            </div>
                            <div class="inputbx">
                                <span>Adresse</span>
                                <input type="adress"  id="adress"  name="adress">
                            </div>
                            <div class="inputbx">
                                <input  type="submit" value="Submit" name="submit">
                            </div>
                            <div class="inputbx">
                                <p>Vous avez déjà un compte ?<a href="connexion"> Connectez-vous !</a></p>
                            </div>
                        </form>
    
                    </div>
    
            </div>
        </section>
     
        </body>
    </html>
