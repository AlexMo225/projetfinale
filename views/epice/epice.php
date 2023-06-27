<?php  
$title = "Epice";
include VIEWS.'inc/header.inc.php'; 
$epices=Epice::epicebyid();




?>

<div>
<?php 
$breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

unset($breadcrumb['Connexion']);
unset($breadcrumb['Inscription']);
unset($breadcrumb['Profil']);
unset($breadcrumb['Ajouter un véhicule']);
unset($breadcrumb['Panier']);
unset($breadcrumb['le Produit']);

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
</div>


<main>
            <section class="produit-center">

                <div class="second-section">
                    <h1>NOS CATÉGORIES</h1>
                    <div class="article-container">

                    <?php
                    foreach ($epices as $allepice) {

?>                      

                        <article>
                            <a href="<?=BASE_PATH.'fiche?id='.$allepice["id_epices"]?>">
                                <img src=" <?= ASSETS. "img/" .$allepice["image_epices"] ?>" alt="<?= $allepice["nom"] ?>" width="273"
                                height="223">
                            <div class="article-content">
                                <div class="article-content centered-content">
                                    <p class="name-epice"> <?= $allepice["nom"] ?> </p>
                                    <p class="price" ><?= $allepice["prix"] ?> €</p>
                                </div>
                            </div>
                            </a>
                        
                            </article>
                            <?php
                    }
?>
                                            </div>
                                        </div>
                                    </section>

                                </main>

<?php  include VIEWS.'inc/footer.php'; ?>