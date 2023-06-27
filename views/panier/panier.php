<?php  
$title = "Panier";
include VIEWS.'inc/header.inc.php';


        //$quantiteTotal = 0;
        $prixTotal = 0;
        $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

        unset($breadcrumb['Connexion']);
        unset($breadcrumb['Inscription']);
        unset($breadcrumb['Profil']);
        unset($breadcrumb['Ajouter un véhicule']);
        //unset($breadcrumb['Panier']);
        //unset($breadcrumb['le Produit']);
        //unset($breadcrumb['les produits']);
        
        // Début du fil d'Ariane
        echo '<ul class="breadcrumb">';
        
        // Parcours des éléments du fil d'Ariane
        foreach ($breadcrumb as $title => $url) {
            // Lien actif (dernier élément du fil d'Ariane)
            if ($url == '#') {
                $breadcrumbHtml[] = '<li class="active">' . $title . '</li>';
            }
            // Liens normaux
            else {
                $breadcrumbHtml[] = '<li><a href="' . $url . '">' . $title . '</a></li>';
            }
        }
        
        // Concaténation avec des slashs
        $breadcrumbString = implode(' / ', $breadcrumbHtml);
        
        // Affichage du fil d'Ariane
        echo $breadcrumbString;
        
        // Fin du fil d'Ariane
        echo '</ul>';
?>


<div class="contpanier">
    <section class="vtrpanier">
        <h1>Votre panier </h1>
        <?php
        if (isset($_SESSION['panier'])) {

            $prixTotal = 0; // Initialiser le prix total à 0

            foreach ($_SESSION['panier'] as $produitId => $quantite) {
                // Récupérer les informations du produit à partir de l'ID
                $epices = Epice::findProduitById($produitId);

                // Vérifier si le produit existe
                if (!empty($epices)) {
                    $produit = $epices[0]; // Récupérer la première ligne des résultats

                    // Utiliser les informations du produit
                    ?>
                    <article class="pdpanier">
                        <img src="<?= ASSETS. "img/" .$produit['image_epices'] ?>" alt="<?= $produit['nom'] ?>" width="147" height="148">

                        <div class="pd-details">
                            <p><?= $produit['nom'] ?></p>
                            <select>
                                <option value="100g">1</option>
                                <option value="250g">2</option>
                                <option value="500g">3</option>
                                <option value="1kg">4</option>
                            </select>
                            <p class="price"><?= $produit['prix'] ?> €</p>
                            <button onclick="window.location.href='<?=BASE_PATH.'supp_panier?id='.$produit['id_epices']?>';" class="delete-button"><iconify-icon icon="subway:delete"></iconify-icon></button>
                        </div>
                    </article>
                    <?php

                    // Ajouter le prix du produit multiplié par la quantité au prix total
                    $prixTotal += $produit['prix'] * $quantite;
                }
            }
        }
        ?>

    </section>
    <section class="ttlpanier">
        <p>Total: <?= $prixTotal ?> €</p>
        <button class="paninii">Valider</button>
    </section>
</div>





<?php include VIEWS.'inc/footer.php'; ?>        