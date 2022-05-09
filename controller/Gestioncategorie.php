<?PHP
include 'C:/xampp/htdocs/ModaDev/ModaDev/config.php';
include_once 'C:/xampp/htdocs/ModaDev/ModaDev/model/categorie.php';

class categorieC {
    function recuperer_dernier_id()
    {
        $db = config::getConnexion();
        return $db->lastInsertId();
    }
    
    function affiche_categorie(){ 

        $sql="SELECT * From categorie  ";
        $db = config::getConnexion();
        try{

        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
  
	function ajouter_categorie($categorie){


		$sql="INSERT INTO categorie (idcat,nomcat) 
		values (:idcat,:nomcat)";
		$db = config::getConnexion();
		try{
            $query = $db->prepare($sql);
            $query->execute([

                'idcat'=>$categorie->getidcat() ,    
                'nomcat' => $categorie->getnomcat() ]);

                      
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    function recuperer_categorie($idcat){
        $sql="SELECT * from categorie where idcat=$idcat";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $categorie=$query->fetch();
            return $categorie;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
	function supprimer_categorie($idcat){
		$sql="DELETE FROM categorie WHERE idcat= :idcat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcat',$idcat);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_categorie($categorie, $idcat){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						nomcat= :nomcat, 
						
					WHERE idcat= :idcat'
				);
				$query->execute([
					'nomcat' => $categorie->getnomcat(),
					'idcat' => $idcat
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}


?>