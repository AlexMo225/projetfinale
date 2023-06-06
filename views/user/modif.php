<?php
$title = "Modification";
include VIEWS .'inc/head.inc.php'; 
include VIEWS .'inc/header.inc.php'; 
$userFromBdd = user::modifier();
// app::showArray($userFromBdd);
if (!App::isconnect()) {
	header("Location:" . BASE_PATH . "");
}

if (!App::isadmin()) {
	header("Location:" . BASE_PATH . "");
}
?>


<h1 class="text-center my-5">Modification utilisateur</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>
<form method="post" class="w-50 mx-auto">

	<div class="row g-3">

    <div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="login" placeholder="login" name="login">
				<label for="login">login</label>
			</div>

		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="prenom" placeholder="Prenom" name="nom">
			<label for="prenom"> Nom</label>
		</div>

		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="nom" placeholder="Nom" name="prenom">
			<label for="nom"> Prenom</label>
		</div>
	</div>

	<div class="form-floating mb-3">
		<input type="mail" class="form-control" id="mail" placeholder="mail" name="mail">
		<label for="mail">Mail</label>
	</div>

	<div class="form-floating mb-3">
		<input type="password" class="form-control" id="password" placeholder="Password" name="password" >
		<label for="floatingPassword">Mot de passe</label>
	</div>

	<div class="form-floating mb-3">
		<input type="adress" class="form-control" id="address" placeholder="Address" name="address">
		<label for="floatingPassword">Addresse</label>
	</div>

    <div class="form-floating col-md-6 mb-3">
				<input type="tel" class="form-control" id="tel" placeholder="tel" name="tel">
				 <label for="tel">Téléphone</label>
			</div>
            </div>    

	<input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>

<?php

include VIEWS . 'inc/footer.php';
?>