<?php  
$title = "Inscription";
include VIEWS .'inc/head.inc.php'; 
include VIEWS .'inc/header.inc.php'; 
?>
	<h1 class="text-center my-5">Inscription</h1>
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : ""; 
			$_SESSION["message"] = "";
	?>
	<form method="post" action="" class="w-50 mx-auto">
	
		<div class="row g-3">

        <div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="login" placeholder="login" name="login">
				<label for="login">login</label>
			</div>

            <div class="form-floating col-md-6 mb-3">
				<input type="password" class="form-control" id="password" placeholder="password" name="password">
				<label for="floatingPassword">Mot de passe</label>
			</div>

			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="nom" placeholder="nom" name="nom">
				<label for="nom">Nom</label>
			</div>

            <div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="prenom" placeholder="prenom" name="prenom">
				<label for="prenom">Prénom</label>
			</div>

			<div class="form-floating col-md-6 mb-3">
				<input type="tel" class="form-control" id="tel" placeholder="tel" name="tel">
				 <label for="tel">Téléphone</label>
			</div>

            <div class="form-floating col-md-6 mb-3">
				<input type="adress" class="form-control" id="adress" placeholder="adress" name="adress">
				 <label for="adress">Adresse</label>
			</div>

            <div class="form-floating col-md-6 mb-3">
				<input type="email" class="form-control" id="email" placeholder="email" name="email">
				 <label for="email">Mail</label>
			</div>
		</div>


		
		<input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
	</form>

<?php  include VIEWS.'inc/footer.php'; ?>