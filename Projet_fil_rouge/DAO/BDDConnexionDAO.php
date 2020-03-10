<?php

class BDDConnexionDAO{
    
    public function connectionBdd(){
       
        $db = new mysqli ('localhost','root','','companimal'); 
        return $db;
        
    }

}
?>