<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Export
*/

// Database Connection
require("function.php");

// get livraison
$query = "SELECT * FROM livraison";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$livraison = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $livraison[] = $row;
    }
}
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=livraison.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('refrence', 'produit', 'nomUsr', 'prenomUsr', 'email','telephone','idCommande','idAgenceLivraison'));

if (count($livraison) > 0) {
    foreach ($livraison as $row) {
        fputcsv($output, $row);
    }
}
?>
