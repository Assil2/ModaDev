<?php
	class agencelivraison
	{  
		public $id;
		public $nomAgence;
		public $localisation;
		private $telephone;
	

		
		function __construct($id,$nomAgence,$localisation,$telephone)
		{
			$this->id=$id;
			$this->nomAgence=$nomAgence;
			$this->localisation=$localisation;
            $this->telephone=$telephone;

		
		}

		function getId(){
			return $this->id;
		}
		function getNomAgence(){
			return $this->nomAgence;
		}
		function getLocalisation(){
			return $this->localisation;
		}
		function getTelephone(){
			return $this->telephone;
		}
	

		function setId($id){
			$this->id=$id;
		}
		function setnomAgence($nomAgence){
			$this->nomAgence=$nomAgence;
		}
		function setLocalisation($localisation){
			$this->localisation=$localisation;
		}
		function setTelephone($telephone){
			$this->telephone=$telephone;
		}
	
	
		
	}

  ?>
