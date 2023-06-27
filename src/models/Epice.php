<?php

class Epice extends Db
{
	
	public static function epicebyid(){
        $requete = "SELECT * FROM `epices` WHERE `cat_id` = ?";

        $requeteprepare = self::getDb()->prepare($requete);

        $reponse = $requeteprepare->execute(
            [$_GET["id"]]
        );

        
        $epices = $requeteprepare->fetchAll(PDO::FETCH_ASSOC);

        return $epices;

    }

    public static function fiche_produit(){
        $requete = "SELECT * FROM `epices` WHERE `id_epices` = ?";

        $requeteprepare = self::getDb()->prepare($requete);

        $reponse = $requeteprepare->execute(
            [$_GET["id"]]
        );

        
        $epices = $requeteprepare->fetchAll(PDO::FETCH_ASSOC);

        return $epices;

    }

    public static function all_epice(){
        $requete = "SELECT * FROM `epices`";

        $requeteprepare = self::getDb()->prepare($requete);
               
        $epices = $requeteprepare->fetchAll(PDO::FETCH_ASSOC);

        return $epices;

    }

    public static function findProduitById ($produitId){
        $requete = "SELECT * FROM `epices` WHERE `id_epices` = ?";

        $requeteprepare = self::getDb()->prepare($requete);

        $reponse = $requeteprepare->execute(
            [$produitId]
        );

        
        $epices = $requeteprepare->fetchAll(PDO::FETCH_ASSOC);

        return $epices;

    }

	
}