<?php

class App
{
	//fonction utile
	public static function showArray(array $list) : void
	{
		echo "<pre>";
		print_r($list);
		echo "</pre>";
	}

	public static function getBreadcrumbData($currentUrl)
    {
        // Tableau multidimensionnel contenant les informations des pages

        $pages = array(
            'Home' => '&nbsp;',
            'Les produits' => 'epices',
            'le Produit' => 'epices_produit',

            'Connexion' => 'connexion',
            'Inscription' => 'inscription',

        

            'Panier' => 'afficherPanier'
        );
        if (isset($_GET['cat'])) {
            $pages['Liste voitures'] = 'listcar?id=' . $_GET['cat'];
            $pages['Panier'] = 'panier';
        }


        // Vérification de correspondance et construction du fil d'Ariane
        $breadcrumb = array();
        foreach ($pages as $title => $url) {
            if ($url == $currentUrl) {
                $breadcrumb[$title] = '#';
                break;
            } else {
                $breadcrumb[$title] = $url;
            }
        }

        return $breadcrumb;
    }

	
}

