<?php  
$title = "Epice";
include VIEWS.'inc/header.inc.php'; 
$epices=Epice::epicebyid();
//var_dump($epices);
?>

<main>
            <section class="produit-center">

                <div class="second-section">
                    <h1>NOS CATÉGORIES</h1>
                    <div class="article-container">

                    <?php
                    foreach ($epices as $allepice) {

?>                      

                        <article>
                            <a href="<?=BASE_PATH.'fiche?id='.$allepice["id_epices"] ?>">
                            <img src=" <?= ASSETS. "img/" .$allepice["image_epices"] ?>" alt="<?= $allepice["nom"] ?>" width="273"
                                height="223">
                            <div class="article-content">
                                <div class="article-content centered-content">
                                    <p class="name-epice"> <?= $allepice["nom"] ?> </p>
                                    <p class="price" ><?= $allepice["prix"] ?> €</p>
                                    <button class="panier-button">
                                        <iconify-icon
                                            icon="map:grocery-or-supermarket"
                                            width="17" height="19"></iconify-icon>
                                        Ajouter
                                    </button>
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