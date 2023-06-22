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
        <link rel="stylesheet" href="<?= ASSETS. "css/style.css"?>">
        <script src="<?= ASSETS. "js/slider.js"?>" defer></script>
        <script src="<?= ASSETS. "js/main.js"?>" defer></script>
    </head>
    <body>
        <header>
            <!-- navigation 1 -->
            <div class="nav1">
                <ul class="logo">
                    <li class="logo-img"><a href="<?=CONFIG['app']['projectBaseUrl']."public"?>"><img
                    src="<?= ASSETS. "img/Group 2070.png" ?>"
                                alt="logo-space-bloom"></a></li>
                </ul>

                <form class="formulaire" action="#" method="POST">
                    <input type="text" name="search"
                        placeholder="paprika .......">
                    <button class="button-search" type="submit"><iconify-icon
                            icon="material-symbols:search-rounded"
                            style="color: white;" width="20" height="20"></iconify-icon></button>
                </form>

                <form class="panier" action="#" method="POST">
                    <button class="button-panier" type="submit">
                        <iconify-icon icon="vaadin:cart" style="color: #731f14;"
                            width="17" height="19"></iconify-icon>
                        <p>Panier</p>
                    </button>
                </form>
            </div>
            <nav>
                <div class="nav2">
                    <ul class="nav-list">
                        <li><a class="active" href="<?=CONFIG['app']['projectBaseUrl']."public"?>">ACCUEIL</a></li>
                        <li class="dropdown">
                            <a href="#">CATÉGORIE</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=BASE_PATH.'Epice?id=1'?>">Épices Africaines</a></li>
                                <li><a href="<?=BASE_PATH.'Epice?id=2'?>">Épices Indiennes</a></li>
                                <li><a href="<?=BASE_PATH.'Epice?id=3'?>">Épices Méditerranéennes</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PRODUITS</a></li>
                        <li><a href="<?=BASE_PATH.'apropos'?>">À PROPOS</a></li>
                        <li><a href="<?=BASE_PATH.'contact'?>">CONTACT</a></li>
                    </ul>

                    <ul class="compte">
                        <li><a href="<?=BASE_PATH.'inscription'?>">M'INSCRIRE</a></li>
                        <li><a href="<?=BASE_PATH.'connexion'?>">MON COMPTE</a></li>
                    </ul>
                </div>
            </nav>
            <!-- navigation 1 -->
        </header>