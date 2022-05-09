<?PHP
	
	include '../../config.php';
	include_once  "../model/Utilisateur.php";

	class UtilisateurC {
		
		function ajouterUtilisateur($utilisateur){
			$sql="INSERT INTO tbl_users (id,username,email,adresse,numero,password) 
			VALUES (:id,:username,:email,:adresse,:numero, :password)";
			$db = config1::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'id' => $utilisateur->getID(),
					'username' => $utilisateur->getNom(),
					'email' => $utilisateur->getEmail(),
					'adresse' => $utilisateur->getAdresse(),
					'numero' => $utilisateur->getNumero(),
					'password' => $utilisateur->getPassword()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
	
	 function userLoginAutho($email, $password){
		$sql="SELECT * FROM tbl_users  WHERE email ='" . $email . "' and password = '". $password."'";
		$db = config1::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();
			$count=$query->rowCount();
			if($count==0) {
				$message = "pseudo ou le mot de passe est incorrect";
			} else {
				$x=$query->fetch();
				$message = $x['typee'];
			}
		}
		catch (Exception $e){
				$message= " ".$e->getMessage();
		}
	  return $message;
		
	  }
	  function userLoginAdmin($email, $password){
		$sql="SELECT * FROM tbl_admin  WHERE email ='" . $email . "' and password = '". $password."'";
		$db = config1::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();
			$count=$query->rowCount();
			if($count==0) {
				$message = "pseudo ou le mot de passe est incorrect";
			} else {
				$x=$query->fetch();
				$message = $x['typee'];
			}
		}
		catch (Exception $e){
				$message= " ".$e->getMessage();
		}
	  return $message;
		
	  }

	  // Check Exist Email Address Method
  public function checkExistEmail($email){
    $sql = "SELECT email from  tbl_users WHERE email = :email";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
     $stmt->execute();
    if ($stmt->rowCount()> 0) {
      return true;
    }else{
      return false;
    }
  }

  function recupererUserInfo($email)
        {
            $sql = "SELECT * from tbl_users where email= :email";
            $db = config1::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute(['email' => $email ] );
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

		
	function recupererUtilisateur($id){
		$sql="SELECT * from tbl_users where id=$id";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	// User Login Authotication Method
	public function userLoginAuthotication($data){
		$email = $data['email'];
		$password = $data['password'];
  
  
		$checkEmail = $this->checkExistEmail($email);
  
		if ($email == "" || $password == "" ) {
		  $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error !</strong> Email or Password not be Empty !</div>';
			return $msg;
  
		}elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
		  $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error !</strong> Invalid email address !</div>';
			return $msg;
		}elseif ($checkEmail == FALSE) {
		  $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Error !</strong> Email did not Found, use Register email or password please !</div>';
			return $msg;
		}else{
  
  
		  $logResult = $this->userLoginAutho($email, $password);
		}
	}
	 function rechercherUser($idv)
	{
		$requete = "select * from tbl_users where username like '%$idv%'";
		$config = config1::getConnexion();
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
        ?>

		<!--Cannot declare class config1, because the name is already in use infunction modifierUtilisateur($Utilisateur, $id)//updated 
	{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
							name = :name, 
							email = :email,
							password = :password
						WHERE id = :id'
				);
				$query->execute([
					'name' => $Utilisateur->getNom(),
					'email' => $Utilisateur->getEmail(),
					'password' => $Utilisateur->getPassword(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM users";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerUtilisateur($id){
			$sql="DELETE FROM users WHERE id= :id";
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
	/*	function modifierUtilisateur($Utilisateur, $id){
			try {
				$db = config1::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET
						name = :name,
						email = :email,
						
					WHERE id = :id'
				);
				$query->execute([
					'name' => $Utilisateur->getNom(),
					'email' => $Utilisateur->getEmail(),
					'id' => $id]);
				echo $query->rowCount() . " users UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		
		
			function recupererUtilisateur($id){
		$sql="SELECT * from users where id=$id";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function recupererUtilisateur1($id){
			$sql="SELECT * from users where id=$id";
			$db = config1::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function verifierUtilisateur($id)//updated
		{
			try {
				$db = config1::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 							
							verified = :verified
						WHERE id = :id'
				);
				$query->execute([
					'verified' => 1,
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}

?>-->