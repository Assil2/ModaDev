<?php
session_start();
include_once '../model/Utilisateur.php';
include_once '../controller/UtilisateurC.php';
include_once '../../config.php';

if (isset($_POST['Valider']))
 {
	$error = "";
    $message="";
    $data=null;
	$password=NULL;
    $utilisateur = null;
	$email="";
    $utilisateurC = new UtilisateurC();
    
 
  



if (
    isset($_POST["email"]) &&
    isset($_POST["password"]) 		


) {
    if (
        !empty($_POST["email"]) && 
        !empty($_POST["password"]) 
      
    ) { 

     
		$message=$utilisateurC->userLoginAutho($_POST["email"],$_POST["password"]);
        $_SESSION['e'] = $_POST["email"];
        
 
       if($message!='pseudo ou le mot de passe est incorrect')
       {
		

           // $usr = $UserC->recupererUseremail($_POST["email"]);
            $info = $utilisateurC->recupererUserInfo($_POST["email"]);
            $_SESSION['id'] = $info["id"];
           
            $_SESSION['status'] = $info["status"];
            if($_SESSION['status']==1)
            {
              header('Location:index.php');
            }
            else{
              echo "<script> alert('u are banned') </script>";
            }
               
       
         /* else
          {
              echo "<script> alert('wrong informations!') </script>";
          }*/
        
    }
    else
        $error = "Missing information";
}
 }



 }
?>






 <!Doctype html>
<html lang="en">
	<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="style2.css">
</head>
<body>
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
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="password" name="password" id="password" >
					
				</div>
				<button class="button login__submit">
				<input type="submit"  name="Valider" id=Valider >Login Now           -->
      </button>		
      <p class="aa-lost-password"><a href="forgot-password.php">Lost your password?</a></p>
      </div>
     
            
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


        </div>                       
   
<!-- <section class="loginmodal">

	<div id="modal1" class="modal">
	    <div class="modal-content center">
	      <h4>Good to See You Back!</h4>

	      <h5><small class="center" id="login_error" style="color: red;"></small></h5>
	      <form action="">

	      	<div class="row">

	        <div class="input-field col s12">
	          <input id="email_login" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>

		    <div class="input-field col s12">
	          <input id="password_login" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	        <html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form method="POST">
      <div class="g-recaptcha" data-sitekey="6LeJEcgaAAAAAAWUmzXgDzH98GgnBaWYgTDAxAoF"></div>
      <br/>

    </form>
  </body>
</html>
		 

		  <a href="javascript:void(0)" class="modal-close waves-effect waves-light btn" id="login_btn" style="background: #ee6e73 !important;">Login</a>
	      	
	      </form>
	    </div>
	  </div>
 jQuery library 
 </html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 Include all compiled plugins (below), or include individual files as needed
  <script src="js/bootstrap.js"></script>  
 SmartMenus jQuery plugin 
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
SmartMenus jQuery Bootstrap Addon -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>  
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  <script src="js/ajax.js"></script>
  </body>
</html>
  </section>
  
 