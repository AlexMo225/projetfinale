<?php

/**
 * Fichier contenant la configuration de l'application
*/
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'u122269387_dv22sahie',
        'DB_USER' => 'u122269387_dv22sahie',
        'DB_PSWD' => 'Y7FoyXIp4kKSiHjZ',
    ],
    'app' => [
        'name' => 'projetfinale',
        'projectBaseUrl' => 'https://mjm03.fr/dv22sahie/'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR.'public/upload/';
const COVER = '../../public/upload/';
const ASSETS= CONFIG['app']['projectBaseUrl']  . '/public/assets/'; 

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */


$routes = [
    ''                  => ['AppController', 'index'],
    '/inscription'       => ['UserController', 'inscription'],
    '/connexion'       => ['UserController', 'connexion'],
    '/modif'       => ['UserController', 'modif'],
    '/profil'       => ['UserController', 'profil'],
    '/Epice'       => ['EpiceController', 'epice']





];