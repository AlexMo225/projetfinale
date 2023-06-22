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

	
}