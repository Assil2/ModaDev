<?php
	include '../Controller/Gestioncategorie.php';
	include_once '../model/categorie.php';

	$categoriec=new categorieC();
	$categoriec->supprimer_categorie($_GET["idcat"]);
	header('Location:affichercategorie.php');


	
?>