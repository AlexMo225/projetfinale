<?php

// que pour l'inscription
class UserController
{
	public static function inscription()
	{



		if (!empty($_POST)) 					// Si le formulaire est rempli
		{
			User::verifyData($_POST);			// On vérifie toutes les infos

			if (empty($_SESSION["message"]))	// Si y'a pas d'erreur
			{
				$user = new User();

				$user->createFromPost($_POST);

				$user->insertDb();

				if (empty($_SESSION["message"]))
				{
					$_SESSION["message"] .= "vous etes enregistre <br>";
					header("Location:" . BASE_PATH . "inscription");
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

		if (!empty($_POST)) 					// Si le formulaire est rempli
		{
			User::verifConnexion($_POST);

			if (!empty($_POST)) {
				$mail = $_POST['mail'];
				$password = $_POST['password'];

				$result = User::getUser($mail, $password);

				if ($result) {
					$_SESSION['user'] = $result;
					header("Location:" . BASE_PATH . "home");
					exit();
				} else {
					$_SESSION['message'] = "
                    Les informations de connexion sont incorrectes </div>";
				}
			}
		}
		include VIEWS . "user/connexion.php";
	}
	public static function modifier()
	{
		// nouvelle user
		$user = new User();
		// requete select ALL

		$user->modifier();

		//header location vers le front 
		include VIEWS . "user/modif.php";
	}
	
	public static function profil()
	{
		include VIEWS . "user/profil.php";
	}

	public static function deconnexion()
	{
		session_destroy(); // supprimer la session
		header("Location:" . BASE_PATH . ""); // redirection page d'aceuil 
	}

	
		
}