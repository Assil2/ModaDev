<?php
    class categorie
    {
        private $idcat;
        private $nomcat;

       
    
    function __construct($nomcat)
    {
        
        $this->nomcat=$nomcat;
    }

    function getidcat()
    {
        return $this->idcat;
    }
    
    function getnomcat()
   {
       return $this->nomcat;
   }
   function setnomcat(string $nomcat)
   {
       $this->nomcat=$nomcat;
   }
}
  