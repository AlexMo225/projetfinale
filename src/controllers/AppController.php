<?php

class AppController
{

    public static function index()
    {
        //front index

        include VIEWS . "app/home.php";

    }

    public static function actionPage()
    {
        // Récupération de l'URL actuelle
        $currentUrl = $_SERVER['REQUEST_URI'];

        // Extraction des informations pour le fil d'Ariane à partir du modèle
        $breadcrumbData = App::getBreadcrumbData($currentUrl);
        // Passer les données à la vue
    }

}

