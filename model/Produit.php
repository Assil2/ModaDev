<?php
    class Produit
    {
        private $nom;
        private $description1;
        private $image1;
        private $prix;
        private $quantite;
        private $idcat;
    
    function __construct($nom, $description1, $image1,$prix, $quantite,$idcat)
    {
        $this->nom=$nom;
        $this->description1=$description1;
   
        $this->image1=$image1;
       
        $this->prix=$prix;
        $this->quantite=$quantite;
        $this->idcat=$idcat;
    }
    function getprix()
    {
        return $this->prix;
    }
    function getquantite()
    {
        return $this->quantite;
    }
    function getimage1()
    {
        return $this->image1;
    }
    function getnom()
    {
        return $this->nom;
    }
    function getdescription1()
    {
        return $this->description1;
    }
    function getidcat()
   {
       return $this->idcat;  
   } 
   function setnom_produit($nom)
   {
       $this->nom=$nom;
   }
   function setprix($prix)
   {
       $this->prix=$prix;
   }
   function setdescription1($description1)
   {
       $this->description1=$description1;
   }
   function setquantite($quantite)
   {
       $this->quantite=$quantite;
   }
   function setimage1($image1)
   {
       $this->image1=$image1;
   }
}