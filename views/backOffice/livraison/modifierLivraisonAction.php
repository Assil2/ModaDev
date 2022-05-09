<?php

include_once "../../../Controller/LivraisonC.php";
include_once "../../../model/livraison.php";


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
    // Check if the livraison id exists, for example update.php?id=1 will get the livraison with the id of 1
    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $reference = isset($_POST['reference']) ? $_POST['reference'] : '';
            $produit = isset($_POST['produit']) ? $_POST['produit'] : '';
            $nomUsr = isset($_POST['nomUsr']) ? $_POST['nomUsr'] : '';
            $prenomUsr = isset($_POST['prenomUsr']) ? $_POST['prenomUsr'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            $idCommande = isset($_POST['idCommande']) ? $_POST['idCommande'] : '';
            $idAgenceLivraison = isset($_POST['idAgenceLivraison']) ? $_POST['idAgenceLivraison'] : '';
            // Update the record
            $stmt = $pdo->prepare('UPDATE livraison SET  reference = ?, produit = ?, nomUsr = ?, prenomUsr = ?, email = ?, telephone = ?, idCommande = ?, idAgenceLivraison = ? WHERE id = ?');
            $stmt->execute([ $reference, $produit, $nomUsr, $prenomUsr, $email, $telephone, $idCommande,$idAgenceLivraison, $_GET['id']]);
            $msg = 'Updated Successfully!';
        }
        // Get the livraison from the livraisons table
     $stmt = $pdo->prepare('SELECT * FROM livraison WHERE id = ?');
       $stmt->execute([$_GET['id']]);
      $livraison = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$livraison) {
           exit('livraison doesn\'t exist with that id!');
        }
    } 
    else {
        exit('No id specified!');
    }
    header('location: listLivraison.php');
    
    ?>