<?PHP
  	include '../controller/GestionProduit.php';
      require_once "../config.php";
    $produit= new ProduitP();
    $listeproduit = $produit->affiche_produit();
	

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<a class="logo" href="showProduit.php">-->

        <link rel="stylesheet" href="styleaffichage.css">
        
        </a>
		<title> LISTE DES PRODUITS </title>
    </head>
    <body onload="window.print()">

		<hr>
	
        <table border="1" align="center" >
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Image</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Idcat</th>
</tr>
<?php 
foreach($listeproduit as $produitt)
{
?>
<tr>
<td> <?php echo $produit['id']; ?></td>
<td> <?php echo $produit['nom']; ?></td>
<td> <?php echo $produit['description1']; ?></td>
<td> <?php echo $produit['image1']; ?></td>
<td> <?php echo $produit['prix']; ?></td>
<td> <?php echo $produit['quantite']; ?></td>
<td> <?php echo $produit['idcat']; ?></td>
<td>
					<form method="POST" action="modifierProduits.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $a['id']; ?> name="id">
					</form>
				</td>
                <td>
					<a href="supprimerproduit.php?id=<?php echo $a['id']; ?>">Supprimer</a>
				</td>


</tr>
<?php
}
?>

</table>
	</body>
</html>