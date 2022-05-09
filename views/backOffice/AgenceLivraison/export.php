<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Export
*/

// Database Connection
require("function.php");

// get AgenceLivraison
$query = "SELECT * FROM AgenceLivraison";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$AgenceLivraison = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $AgenceLivraison[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=AgenceLivraison.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('nomAgence', 'localisation', 'telephone'));

if (count($AgenceLivraison) > 0) {
    foreach ($AgenceLivraison as $row) {
        fputcsv($output, $row);
    }
}
?>
