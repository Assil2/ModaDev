<?php

   include_once 'model/Utilisateur.php';
 include_once 'controller/UtilisateurC.php';
 include_once '../../config.php';
   

 if (isset($_POST['Valider']))

 $error = "";

// create adherent
$utilisateur = null;

// create an instance of the controller
$utilisateurC = new UtilisateurC();


if (
   // isset($_POST["id"]) &&
	isset($_POST["username"]) &&		
	isset($_POST["email"]) &&
	isset($_POST["adresse"]) &&
	isset($_POST["numero"]) &&
	isset($_POST["password"])
   
   

) {
	if (
	   // !empty($_POST["id"]) && 
		!empty($_POST["username"]) &&
		!empty($_POST["email"]) && 
		!empty($_POST["adresse"]) && 
		!empty($_POST["numero"]) && 
		!empty($_POST["password"]) 
		
	   
	) {
		$utilisateur = new Utilisateur(
		   // $_POST['id'],
			$_POST['username'],
			$_POST['email'], 
			$_POST['adresse'],
			$_POST['numero'],
			$_POST['password'],
			
			
		);
					
		$sql="INSERT INTO tbl_users (username,email,adresse,numero,password) 
		VALUES (:username,:email,:adresse,:numero, :password)";
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
		
		header('Location:Users.php');
		//header('refresh:1;url=log.php');
		
	}
	else
		$error = "Missing information";


}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form  action=""  method="POST"> 
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="email" name="email" id="email">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="username" name="username" id="username">
				</div> 
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="adresse" name="adresse" id="adresse">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="numero" name="numero" id="numero">
				</div>
                <div class="login__field">
                <fieldset>
    <!--<legend>Sexe:</legend>
    <div>
      <input type="checkbox" id="homme" name="homme"
             checked>
      <label for="homme">Homme</label>
    </div>
    

    <div>
      <input type="checkbox" id="femme" name="femme">
      <label for="femme">Femme</label>
    </div>-->
</fieldset>
</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="password" name="password" id="password">
				</div>
				<!--<table border="1" align="center">
                <tr>
                    <td></td>
                    <td>
                        
                        <input type="submit" value="Envoyer"  onclick="verif()" > 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>-->
				
				<button class="button login__submit">
					<!--<span class="button__text">Register Now</span>-->
				<input type="submit"  name="Valider" onclick="verif()" >Register Now           -->
				</button>				
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
