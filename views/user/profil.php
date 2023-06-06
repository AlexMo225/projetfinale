<?php 
include VIEWS .'inc/head.inc.php'; 
include VIEWS .'inc/header.inc.php';
?>

<h1 class="text-center my-5"> Page profil de <?= !empty($_SESSION['user']['nom']) ? $_SESSION['user']['prenom'] : ""; ?></h1>


<?php include VIEWS . 'inc/footer.php'; ?>