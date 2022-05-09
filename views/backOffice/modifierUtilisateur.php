
<?php

session_start();
include_once 'controller/UtilisateurC.php';
require_once 'config.php';
include_once 'model/Utilisateur.php';

$utilisateurC=NULL;
//$utilisateur1=NULL;
//$utilisateur1c=null;

?>
<div class="section white-text" style="background: #587da5;">
<div class="section">
<?PHP

//include "model/Utilisateur.php";
include_once "controller/UtilisateurC.php";

if (isset($_GET['id']))
{
    $utilisateur1c=new UtilisateurC();
    $result=$utilisateur1c->recupererUtilisateur($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $adresse=$row['adresse'];
        $numero=$row['numero'];
        $status=$row['status'];
        $password=$row['password'];
          

?>



    <div class="section">
        <h3 style="font-size: 3rem !important; font-style: bold !important; font-family: 'Univers Next', cursive;">Update user</h3> 
    </div>


    <div class="section center" style="padding: 40px;">

    <form method="POST">
 <div>       
Id :<input type="text" readonly="true" name="id" value="<?PHP echo $id ?>"style="width: 250px">
</div>
<div>
Username :<input type="text" name="username" value="<?PHP echo $username ?>"style="width: 250px" required="True">
</div>
<div>
email :<input type="email" name="email" value="<?PHP echo $email ?>"style="width: 250px" required="True">
</div>
<div>
Adresse :<input type="text" name="adresse" value="<?PHP echo $adresse ?>"style="width: 250px" required="True">
</div>
<div>       
Numero :<input type="number" name="numero" value="<?PHP echo $numero ?>"style="width: 250px">
</div>
<div>       
Status :<input type="number" name="status" value="<?PHP echo $status ?>"style="width: 250px">
</div>
<div>
password :<input type="password" name="password" value="<?PHP echo $password ?>"style="width: 250px" required="True">
</div>


 <div>                      
<input class="btn btn--radius btn--green" type="submit" name="valider" value="Update" style="width: 150px" required="True">
</div>
<input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">

</form>
    
<?php
    }
}
else {echo "verifier";}
if (isset($_POST['valider'])){
    //  $utilisateur1=new Utilisateur($_POST['id'],$_POST['name'],$_POST['email']); 
    $utilisateur1=new Utilisateur($_POST['username'],$_POST['email'],$_POST['adresse'],$_POST['numero'],$_POST['status'],$_POST['password']);
    
      $utilisateur1c->modifierUtilisateur($utilisateur1,$_GET['id']);
     
      echo $_POST['id_ini'];
  
      header('Location: Users.php');

       $_SESSION['msg'] = 'updated!';
  }
//include "controller/UtilisateurC.php";


?>

    </div>

</div>

