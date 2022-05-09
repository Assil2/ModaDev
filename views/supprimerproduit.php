
<?php
	include '../Controller/GestionProduit.php';
	$produitc=new ProduitP();
	$produitc->supprimer_produit($_GET["id"]);
	header('Location:afficherListeproduitsback.php');

?>