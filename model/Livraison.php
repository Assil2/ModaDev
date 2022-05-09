<?php
	class livraison
	{  
		public $id;
		public $reference;
		public $produit;
		public $nomUsr;
		public $prenomUsr;
		private $email;
		private $telephone;
		private $idCommande;
		private $idAgenceLivraison;

		function __construct($id,$reference,$produit,$nomUsr,$prenomUsr,$email, $telephone,$idCommande, $idAgenceLivraison)
		{
			$this->id=$id;
			$this->reference=$reference;
			$this->produit=$produit;
			$this->nomUsr=$nomUsr;
			$this->prenomUsr=$prenomUsr;
			$this->email=$email;  
			$this->telephone=$telephone;
			$this->idCommande=$idCommande;
			$this->idAgenceLivraison= $idAgenceLivraison;
		}
		function getId(){
			return $this->id;
		}
		function getReference(){
			return $this->reference;
		}
		function getProduit(){
			return $this->produit;
		}
		function getNomUsr(){
			return $this->nomUsr;
		}
		function getPrenomUsr(){
			return $this->prenomUsr;
		}
		function getEmail(){
			return $this->email;
		}
		function getTelephone(){
			return $this->telephone;
		}
		function getIdCommande(){
			return $this->idCommande;
		}
		function getIdAgenceLivraison(){
			return $this->idAgenceLivraison;
		}

		function setId($id){
			$this->id=$id;
		}
		function setReference($reference){
			$this->reference=$reference;
		}
		function setProduit($produit){
			$this->produit=$produit;
		}
		function setNomUsr($nomUsr){
			$this->nomUsr=$nomUsr;
		}
		function setPrenomUsr($prenomUsr){
			$this->prenomUsr=$prenomUsr;
		}
		function setEmail($email){
			$this->email=$email;
		}
		function setTelephone($telephone){
			$this->telephone=$telephone;
		}
		function setIdCommande($idCommande){
			$this->idCommande=$idCommande;
		}
		function setIdAgenceLivraison($idAgenceLivraison){
			$this->idAgenceLivraison=$idAgenceLivraison;
		}
      
		
	}

  ?>
