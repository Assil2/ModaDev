<?php


	class config {
	  private static $pdo = NULL;   
  
	  public static function getConnexion() {
		if (!isset(self::$pdo)) {
		  try{
			self::$pdo = new PDO('mysql:host=localhost;dbname=modadev', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
			
		  }catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		  }
		}
		return self::$pdo;
	  }   
	}
	
	class AgencelivraisonC
	{
		
		function ajouter($agencelivraison){
			$db = config::getConnexion();
			$sql = "INSERT INTO agencelivraison (?,?,?,?) VALUES (:id,:nomAgence,:localisation,:telephone)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':id',$agencelivraison->getId());
            $req->bindValue(':nomAgence',$agencelivraison->getNomAgence());
            $req->bindValue(':localisation',$agencelivraison->getLocalisation());
            $req->bindValue(':telephone',$agencelivraison->getTelephone());
	

	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}
		function afficheragencelivraison(){
			$db = config::getConnexion();
			$sql="SELECT * FROM agencelivraison ";
			$liste=$db->query($sql);
			return $liste;
			
		}

		function modifieragencelivraison($agencelivraison,$id){
			$db = config::getConnexion();
			
			$sql="UPDATE agencelivraison SET nomAgence=:nomAgence,localisation=:localisation,telephone=:telephone WHERE id=:id";
			try{
				$req=$db->prepare($sql);
				
            $req->bindValue(':nomAgence',$agencelivraison->getNomAgence());
            $req->bindValue(':localisation',$agencelivraison->getLocalisation());
            $req->bindValue(':telephone',$agencelivraison->getTelephone());
			//$req->bindValue(':idLivraison',$agencelivraison->getIdLivraison());
				$req->bindValue(':id',$id);
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}
		
		function supprimeragencelivraison($id){
			$db = config::getConnexion();
			$sql="DELETE FROM agencelivraison where id= :id";
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
	        $req->execute();
	        
		}

		function reccupereragencelivraison($id){
			$db = config::getConnexion();
			$sql="SELECT * from agencelivraison where id=$id";
			$liste=$db->query($sql);
			return $liste;
		}

	

		
	}

  ?>