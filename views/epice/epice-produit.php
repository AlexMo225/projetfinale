<?php  
$title = "Epice";
include VIEWS.'inc/header.inc.php';
$epice_select=Epice::fiche_produit();

$breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

unset($breadcrumb['Connexion']);
unset($breadcrumb['Inscription']);
unset($breadcrumb['Profil']);
unset($breadcrumb['Ajouter un véhicule']);
unset($breadcrumb['Panier']);
//unset($breadcrumb['le Produit']);
unset($breadcrumb['les produits']);

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

<body>
<main>  
        <section class="prd">
                <h1> Produits </h1>
                <div class="productinfo">

            

                    <h2> <?=$epice_select['0']['nom']?> </h2>

                                    <?php
                        if ($epice_select['0']['cat_id']=='1'){
                            echo('<h3> Epices Africaine </h3>');
                        }elseif($epice_select['0']['cat_id']=='2'){
                            echo('<h3> Epices indienne </h3>');
                        }elseif($epice_select['0']['cat_id']=='3'){
                            echo('<h3> Epices Méditérranéenne </h3>');
                        }
?>

                    <div class="image-info">
                        <img src="<?= ASSETS. "img/" .$epice_select['0']["image_epices"] ?>"
                            alt="<?=$epice_select['0']['nom']?>">
                        <div class="details">
                            <select class="slcprd">
                                <option value="100g">Sachet de 100g</option>
                                <option value="250g">Sachet de 250g</option>
                                <option value="500g">Sachet de 500g</option>
                                <option value="1kg">Sachet de 1kg</option>
                            </select>
                            <p class="price"><?=$epice_select['0']['prix']?> €</p>
   <button class="panini" onclick="window.location.href='<?=BASE_PATH.'add_panier?id='.$epice_select['0']['id_epices']?>';">Ajouter au panier</button>

                        </div>
                    </div>
                </div>
                <div class="description">
                    <p>Description:</p>
                    <p class="desc-bb"><?=$epice_select['0']['description']?></p>
                </div>
        </section>

</main>
</body>
<?php 

include VIEWS.'inc/footer.php'; ?>