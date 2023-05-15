<?php

class User extends Db
{
	private $id_user;
	private $login;
	private $password;
	private $nom;
	private $prenom;
	private $telephone;
	private $mail;
	private $adresse;
	private $statut;
    private $date_creation;

	public function createFromPost(array $dataFromPost)
	{
		$this->setnom($dataFromPost["nom"]);
		$this->setprenom($dataFromPost["prenom"]);
		$this->setLogin($dataFromPost["login"]);
		$this->setMail($dataFromPost["email"]);
		$this->setPassword($dataFromPost["password"]);
		$this->setAddress($dataFromPost["adress"]);
		$this->setTelephone($dataFromPost["tel"]);
		$this->setStatut(0);
	}

	public function insertDb()
	{
		$query = "INSERT INTO `user`( `nom`,`prenom`, `login`, `mail`,`password`, `adresse`, `telephone` ) VALUES (?,?,?,?,?,?,?)";

		$requetePreparee = self::getDb()->prepare($query);

		$reponse = $requetePreparee->execute([
			$this->getNom(),
			$this->getPrenom(),
			$this->getLogin(),
			$this->getMail(),
			$this->getPassword(),
			$this->getAddress(),
			$this->getTelephone()
		]);

		if (!$reponse)
		{
			$_SESSION["message"] = "Il y a eu une erreur lors de l'ajout en bdd<br>";
		}
	}
	public static function verifyData()
	{
		if(!empty($_POST)){ 
	
			if (!isset($_POST["nom"]) || empty($_POST["nom"]))
			{
				$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le nom !
				</div>";
			
			}
		
			if (!isset($_POST["prenom"]) || empty($_POST["prenom"]))
			{
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir le prenom !
				</div>";
			
			}

			if (!isset($_POST["login"]) || empty($_POST["login"]))
			{
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir le login !
				</div>";
			
			}

			if (!isset($_POST["email"]) || empty($_POST["email"]))
			{
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre email !
				</div>";
			
			}

			if (!isset($_POST["password"]) || empty($_POST["password"]))
			{
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre mot de passe !
				</div>";
			
			}

			if (!isset($_POST["tel"]) || empty($_POST["tel"]))
			{
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre telephone !
				</div>";
			
			}
			if (!isset($_POST["adress"]) || empty($_POST["adress"]))
			{
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre adresse !
				</div>";
			
			}
		
	}
}

	public static function showDb()
	{	
		$query = "SELECT * FROM user LIMIT 100";

		$requetePreparee = self::getDb()->prepare($query);

		$reponse = $requetePreparee->execute();

		//verifie si la requete s'est bien déroulé
		if (!$reponse)
		{
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					Quelque chose ne s'est pas déroulé correctement pendant la requete
				</div>";
				return false;
		}
		
		if ($reponse)
		{
			$allUsers = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
		
		}

		return $allUsers;

	}
	
	public static function remove(){

	$requete = "DELETE FROM `user` WHERE `id_user` = ?";

	$requetePreparee = $bdd->prepare($requete);

	$reponse = $requetePreparee->execute([
		$_GET["id"]
		]);

	if (!$reponse)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  La requete ne s'est pas déroulé correctement
		</div>";
		header("Location:" . __DIR__ . "profil");
		exit;
	}

	if ($requetePreparee->rowCount() == 0)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  L'utilisateur que vous essayez de supprimer, n'existe pas !
		</div>";
		header("Location:" . __DIR__ . "profil");
		exit;
	}

	if ($requetePreparee->rowCount() == 1)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
			  Vous avez bien supprimé l'utilisateur dont l'id est " . $_GET["id"] . "
		</div>";
		header("Location:" . URL . "user.php");
		exit;
	}
	}
	

	/**
	 * Get the value of id_user
	 */
	public function getIdUser()
	{
		return $this->id_user;
	}

	/**
	 * Set the value of id_user
	 */
	public function setIdUser($id_user): self
	{
		$this->id_user = $id_user;

		return $this;
	}

	/**
	 * Get the value of login
	 */
	public function getLogin()
	{
		return $this->login;
	}

	/**
	 * Set the value of login
	 */
	public function setLogin($login): self
	{
		$this->login = $login;

		return $this;
	}

	/**
	 * Get the value of password
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set the value of password
	 */
	public function setPassword($password): self
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Get the value of nom
	 */
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 */
	public function setNom($nom): self
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get the value of prenom
	 */
	public function getPrenom()
	{
		return $this->prenom;
	}

	/**
	 * Set the value of prenom
	 */
	public function setPrenom($prenom): self
	{
		$this->prenom = $prenom;

		return $this;
	}

	/**
	 * Get the value of telephone
	 */
	public function getTelephone()
	{
		return $this->telephone;
	}

	/**
	 * Set the value of telephone
	 */
	public function setTelephone($telephone): self
	{
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Get the value of mail
	 */
	public function getMail()
	{
		return $this->mail;
	}

	/**
	 * Set the value of mail
	 */
	public function setMail($mail): self
	{
		$this->mail = $mail;

		return $this;
	}

	/**
	 * Get the value of adresse
	 */
	public function getAddress()
	{
		return $this->adresse;
	}

	/**
	 * Set the value of adresse
	 */
	public function setAddress($adresse): self
	{
		$this->adresse = $adresse;

		return $this;
	}

	/**
	 * Get the value of statut
	 */
	public function getStatut()
	{
		return $this->statut;
	}

	/**
	 * Set the value of statut
	 */
	public function setStatut($statut): self
	{
		$this->statut = $statut;

		return $this;
	}

    /**
     * Get the value of date_creation
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     */
    public function setDateCreation($date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }
}