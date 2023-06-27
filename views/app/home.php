<?php  
$title = "Accueil";
include VIEWS.'inc/header.inc.php'; 
?>
<main>
    <div class="carrac">
                <img class="imagee" src="<?= ASSETS. "img/image 28.png" ?>" alt="AFFICHE APROPOS">
                <div class="text-overlay">
                <p class="carrap">Bienvenue sur Spice Bloom</p>
                <?php
                if (!empty($_SESSION['user'])) {
                    var_dump($_SESSION['user']);
                }
                ?>
                <button onclick="window.location.href = '<?=BASE_PATH.'about'?>';" >À PROPOS DE NOUS</button>
                
                </div>
              </div>
            <section class="center-section">
                <h1>NOS CATÉGORIES</h1>
                <div class="image-container">
                    <a href="<?=BASE_PATH.'Epice?id=1'?>">
                        <div class="image-item">
                        <img src="<?= ASSETS. "img/cate1.png" ?>"
                                alt="image Épices Africaine">
                            <span class="image-text ">Épices Africaine</span>
                        </div>
                    </a>
                    <a href="<?=BASE_PATH.'Epice?id=2'?>">
                        <div class="image-item">
                            <img src="<?= ASSETS. "img/cate2.png" ?>"
                                alt="image Épices Africaine">
                            <span class="image-text">Épices Indienne</span>
                        </div>
                    </a>
                    <a href="<?=BASE_PATH.'Epice?id=3'?>">
                        <div class="image-item">
                        <img src="<?= ASSETS. "img/cate3.png" ?>"
                                alt="image Épices Africaine">
                            <span class="image-text">Épices méditerranéennes</span>
                        </div>
                    </a>
                </div>
            </section>
            <section class="produit-center">

                <div class="second-section">
                    <h1>PRODUITS DU MOMENTS</h1>
                    <div class="article-container">
                        <article>
                            <h2>-Coup de coeur-</h2>
                            <img src="<?= ASSETS. "img/curcuma.png" ?>" alt="Image 1" width="273"
                                height="223">
                            <div class="article-content">
                                <div class="article-content centered-content">
                                    <p>Curcuma</p>
                                    <p class="price">8.50€</p>
                                    <button class="panier-button">
                                        <iconify-icon
                                            icon="map:grocery-or-supermarket"
                                            width="17" height="19"></iconify-icon>
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                            </article>
                            <article>
                                <h2>-Coup de coeur-</h2>
                                <img src="<?= ASSETS. "img/curry.png" ?>" alt="Image 1"
                                    width="273"
                                    height="223">
                                <div class="article-content">
                                    <div class="article-content centered-content">
                                        <p>curry</p>
                                        <p class="price">8.50€</p>
                                        <button class="panier-button">
                                            <iconify-icon
                                                icon="map:grocery-or-supermarket"
                                                width="17" height="19"></iconify-icon>
                                            Ajouter
                                        </button>
                                    </div>
                                </div>
                                </article>
                                <article>
                                    <h2>-Coup de coeur-</h2>
                                    <img src="<?= ASSETS. "img/paprika.png" ?>" alt="Image 1"
                                        width="273"
                                        height="223">
                                    <div class="article-content">
                                        <div
                                            class="article-content centered-content">
                                            <p>Paprika</p>
                                            <p class="price">8.50€</p>
                                            <button class="panier-button">
                                                <iconify-icon
                                                    icon="map:grocery-or-supermarket"
                                                    width="17" height="19"></iconify-icon>
                                                Ajouter
                                            </button>
                                        </div>
                                    </div>
                                    </article>
                                    <article>
                                        <h2>-Coup de coeur-</h2>
                                        <img src="<?= ASSETS. "img/ailpoudre.png" ?>"
                                            alt="Image 1"
                                            width="273" height="223">
                                        <div class="article-content">
                                            <div
                                                class="article-content centered-content">
                                                <p>Ail en poudre</p>
                                                <p class="price">8.50€</p>
                                                <button class="panier-button">
                                                    <iconify-icon
                                                        icon="map:grocery-or-supermarket"
                                                        width="17" height="19"></iconify-icon>
                                                    Ajouter
                                                </button>
                                            </div>
                                        </div>
                                        </article>
                                        <article>
                                            <h2>-Coup de coeur-</h2>
                                            <img src="<?= ASSETS. "img/gingembre.png" ?>"
                                                alt="Image 1"
                                                width="273" height="223">
                                            <div class="article-content">
                                                <div
                                                    class="article-content centered-content">
                                                    <p>Gingembre</p>
                                                    <p class="price" >8.50</p>
                                                    <button
                                                        class="panier-button">
                                                        <iconify-icon
                                                            icon="map:grocery-or-supermarket"
                                                            width="17"
                                                            height="19"></iconify-icon>
                                                        Ajouter
                                                    </button>
                                                </div>
                                            </div>
                                            </article>
                                            <article>
                                                <h2>-Coup de coeur-</h2>
                                                <img src="<?= ASSETS. "img/poivrerouge.png" ?>"
                                                    alt="Image 1"
                                                    width="273" height="223">
                                                <div class="article-content">
                                                    <div
                                                        class="article-content centered-content">
                                                        <p>Poivron rouge</p>
                                                        <p class="price">8.50€</p>
                                                        <button
                                                            class="panier-button">
                                                            <iconify-icon
                                                                icon="map:grocery-or-supermarket"
                                                                width="17"
                                                                height="19"></iconify-icon>
                                                            Ajouter
                                                        </button>
                                                    </div>
                                                </div>
                                                </article>

                                            </div>
                                        </div>
                                    </section>

                                </main>

<?php  
if (!empty($_SESSION['user'])) {
    var_dump($_SESSION['user']);
  }


include VIEWS.'inc/footer.php'; ?>