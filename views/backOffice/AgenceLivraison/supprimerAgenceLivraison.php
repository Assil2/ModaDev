<?php
 
 include_once "../../../controller/agenceLivraisonC.php";
 include_once "../../../model/livraison.php";
$agenceLivraisonC=new agenceLivraisonC();

if(isset($_POST['supprimer'])){
   
   $agenceLivraisonC->supprimeragencelivraison($_POST['id']);
   header('location: listAgenceLivraison.php');
 } 

 ?>