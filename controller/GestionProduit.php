<?PHP
include 'C:/xampp/htdocs/ModaDev/ModaDev/config.php';
include_once 'C:/xampp/htdocs/ModaDev/ModaDev/model/Produit.php';

     class ProduitP {
     function recuperer_dernier_id()
    {
        $db = config::getConnexion();
        return $db->lastInsertId();
    }
    
     function affiche_produit()
    { 

        $sql="SELECT * From produit p inner join categorie c on p.idcat=c.idcat";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function getproduitbyid($id)
    {
        $requete = "select * from produit where id=:id";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'id'=>$id
                ]
            );
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }
    function ajouterproduit($produit){
        $sql="INSERT INTO produit (nom, description1 , image1, prix, quantite, idcat) 
        VALUES (:nom,:description1,:image1, :prix,:quantite, :idact)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $produit->getnom(),
                'description1' => $produit->getdescription1(),
                'image1' => $produit->getimage1(),
                'prix' => $produit->getprix(),
                'quantite' => $produit->getquantite(),
                'idcat' => $produit->getidcat()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function recupererproduit($id){
        $sql="SELECT * from produit where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $produit=$query->fetch();
            return $produit;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
	 function supprimer_produit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_produit($produit, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						nom= :nom, 
						description1= :description1, 
						image1= :image1, 
						prix= :prix, 
						quantite= :quantite,
                        idcat= :idcat
					WHERE id= :id'
				);
				$query->execute([
					'Nom' => $produit->getnom(),
					'description1' => $produit->getdescription1(),
					'image1' => $produit->getimage1(),
					'prix' => $produit->getprix(),
					'quantite' => $produit->getquantite(),
                    'idcat' => $produit->getidcat(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	 

    


     function affichertri()
        {
            $requete = "select * from produit ORDER BY prix";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function rechercheproduit($id)
        {
            $requete = "select * from produit where id like '%$id%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
   
     }
