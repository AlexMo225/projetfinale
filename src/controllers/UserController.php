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

	

	
		
}