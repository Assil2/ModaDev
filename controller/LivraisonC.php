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

	class LivraisonC
	{
		//elle va prendre en parametre l'objet livraison
		function ajouter($livraison){
			// yjib = recupererr la connection avec la base de données
			$db = config::getConnexion();
			//var qui va contenir notre requette 
			$sql = "INSERT INTO livraison (?,?,?,?,?,?,?,?,?) VALUES (:id,:reference,:produit,:nomUsr,:prenomUsr,:email,:telephone,:idCommande, :idAgenceLivraison)";
			try {
				//bd contient la connection avec la base de données
				$req = $db->prepare($sql);
				//il va remplir les data
			$req->bindValue(':id',$livraison->getId());
            $req->bindValue(':reference',$livraison->getReference());
            $req->bindValue(':produit',$livraison->getProduit());
            $req->bindValue(':nomUsr',$livraison->getNomUsr());
			$req->bindValue(':prenomUsr',$livraison->getPrenomUsr());
			$req->bindValue(':email',$livraison->getEmail());
			$req->bindValue(':telephone',$livraison->getTelephone());
			$req->bindValue(':idCommande',$livraison->getIdCommande());
			$req->bindValue(':idAgenceLivraison',$livraison->getIdAgenceLivraison());
//il va excuter la requette
			$req->execute();
		}
		//sinon retourne un message d'erreur
		catch (Exception $e){
				echo 'Erreur: '.$e->getIdCommande();
			}			

		}


		function afficherlivraison(){
			//recuperer la cnnection avec la base de donnés
			$db = config::getConnexion();
			//reuete il va afficher tout 
			$sql="SELECT * FROM livraison ";
			//db contient la connection avec la base de donnes
			// il va exécuter la requette et me retourner la liste
			$liste=$db->query($sql);
			return $liste;
			
		}
//il va prendre en paramete l'objet livraison et l'identifiant de la livraison choisit
		function modifierlivraison($livraison,$id){
			//il va récuperer la connection avec la base de donnéed
			$db = config::getConnexion();
			//il va définir sa requette pour l'update
			$sql="UPDATE livraison SET reference=:reference,produit=:produit,nomUsr=:nomUsr,prenomUsr=:prenomUsr,email=:email,telephone=:telephone,idCommande=:idCommande WHERE id=:id";
			try{
				//db contient la connection avec la base données on passe la requtte $sql das la fonction predefinie prepare pour preperr pour l'excution de la rqte
				$req=$db->prepare($sql);
				
            $req->bindValue(':reference',$livraison->getReference());
            $req->bindValue(':produit',$livraison->getProduit());
            $req->bindValue(':nomUsr',$livraison->getNomUsr());
			$req->bindValue(':prenomUsr',$livraison->getPrenomUsr());
			$req->bindValue(':email',$livraison->getEmail());
			$req->bindValue(':telephone',$livraison->getTelephone());
			$req->bindValue(':idCommande',$livraison->getIdCommande());
				$req->bindValue(':id',$id);
				//excution de la reqtte ( update)
				$s=$req->execute();
			}
			//sinon erruer 
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}
		// il va prendre en parametre l'identifiant de la livraison à supprimer
		function supprimerlivraison($id){
			//il va récuperer la connection avec la base de données 
			$db = config::getConnexion();
			//il va définir la requette pour la suppréssion
			$sql="DELETE FROM livraison where id= :id";
			//preperer pour la supprission
			$req=$db->prepare($sql);

			$req->bindValue(':id',$id);
			//il va passer à l'exécution
	        $req->execute();
	        
		}
// pour recuperer ( besh tjib) une seule livraison à la fois 
		function reccupererlivraison($id){
			//il va récuperer la connection avec la base de données 
			$db = config::getConnexion();
			//il va definir la requette pour récuperer une seule livraison à la fois 
			$sql="SELECT * from livraison where id=$id";
			// il va éxécuter la requtte 
			$liste=$db->query($sql);
			//retourne l'ojbet selectionné
			return $liste;

		}



		
	}

  ?>