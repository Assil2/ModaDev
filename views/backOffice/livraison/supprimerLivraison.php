<?php
 
 include_once "../../../controller/LivraisonC.php";
 include_once "../../../model/livraison.php";
$LivraisonC=new LivraisonC();

if(isset($_POST['supprimer'])){
   
   $LivraisonC->supprimerlivraison($_POST['id']);
   header('location: listLivraison.php');
 } 

 ?>