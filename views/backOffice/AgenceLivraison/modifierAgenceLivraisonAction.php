<?php

include_once "../../../Controller/AgenceLivraisonC.php";
include_once "../../../Model/agenceLivraison.php";


    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'modadev';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    $msg = '';
    $pdo = pdo_connect_mysql();
    // Check if the agenceLivraison id exists, for example update.php?id=1 will get the agenceLivraison with the id of 1
    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $nomAgence = isset($_POST['nomAgence']) ? $_POST['nomAgence'] : '';
            $localisation = isset($_POST['localisation']) ? $_POST['localisation'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            
            // Update the record
            $stmt = $pdo->prepare('UPDATE agenceLivraison SET  nomAgence = ?, localisation = ?, telephone = ? WHERE id = ?');
            $stmt->execute([ $nomAgence, $localisation, $telephone, $_GET['id']]);
            $msg = 'Updated Successfully!';
        }
        // Get the agenceLivraison from the agenceLivraisons table
     $stmt = $pdo->prepare('SELECT * FROM agenceLivraison WHERE id = ?');
       $stmt->execute([$_GET['id']]);
      $agenceLivraison = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$agenceLivraison) {
           exit('agenceLivraison doesn\'t exist with that id!');
        }
    } 
    else {
        exit('No id specified!');
    }
    header('location: listAgenceLivraison.php');
    
    ?>