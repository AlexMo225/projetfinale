<?php

// que pour l'inscription
class EpiceController 
{
	
    public static function epice(){

        $epice = new Epice();
        $epice ->epicebyid();
        
        include VIEWS . "epice/epice.php";
    }
	
		
}