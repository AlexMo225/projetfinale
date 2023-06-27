<?php

// que pour l'inscription
class UserController
{
	public static function inscription()
	{



		if (!empty($_POST)) 					// Si le formulaire est rempli
		{
			User::verifyData();			// On vérifie toutes les infos

			if (empty($_SESSION["message"]))	// Si y'a pas d'erreur
			{
				$user = new User();

				$user->createFromPost($_POST);

				$user->insertDb();

				if (empty($_SESSION["message"]))
				{
					$_SESSION["message"] .= "vous etes enregistre <br>";
					header("Location:" . BASE_PATH . "connexion");
					exit;
				}
				else
				{
					$_SESSION["message"] .= "Ca a pas marché<br>";

				}
			}
		}

		include VIEWS . "user/inscription.php";
		// echo "Mon controller register fonctionne hyper bien<br>";
	}

	public static function connexion()
	{

		
			User::verifConnexion();

			if (!empty($_POST)) {

				$mail = $_POST['mail'];
				$password = $_POST['password'];

				$result = User::getUser($mail, $password);

				if (is_array($result) && !empty($result)) {
					$result = $_SESSION['user'];
					header("Location:" . BASE_PATH . "");
					$_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
					Vous êtes connecté ! </div>";
					exit();
				} else {
					header("Location:" . BASE_PATH . "");
					$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					Les informations de connexion sont incorrectes </div>";
					exit();
				}
			}
		

		include VIEWS . "user/connexion.php";
	}

	public static function connexion_front()
	{
		include VIEWS . "user/connexion.php";
	}


	public static function deconnexion()
	{
		session_destroy(); // supprimer la session
		header("Location:" . BASE_PATH . ""); // redirection page d'aceuil 
	}
	public static function about(){
		include VIEWS . "user/about.php";
	}

	
		
}