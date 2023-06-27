<?php

// que pour l'inscription
class EpiceController 
{
	
    public static function epice(){

        $epice = new Epice();
        $epice ->epicebyid();
        
        include VIEWS . "epice/epice.php";
    }

    public static function epice_produit(){
    //creer un nouvelle objet EPICE 
        $epice = new Epice();
        $epice ->fiche_produit();
        
        include VIEWS . "epice/epice-produit.php";
    }
	
		
}