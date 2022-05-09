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
    // Check if the Agence  id exists, for example update.php?id=1 will get the Agence  with the id of 1
   
        if (!empty($_POST)) {
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            $nomAgence = isset($_POST['nomAgence']) ? $_POST['nomAgence'] : '';
          
            $localisation = isset($_POST['localisation']) ? $_POST['localisation'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
           // $idLivraison = isset($_POST['idLivraison']) ? $_POST['idLivraison'] : '';
           if($nomAgence != "" && $localisation != "" && $telephone != "" ){
         
           }
           else {
            echo "champs vide!!";
           }
            if ( preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $telephone ) ){
             
                //0477558899, 04-77-55-88-99, 04 77 55 88 99 ou 04/77/55/88/99 format accépté
           
           }else {
            echo "Le téléphone n'est  pas valide";
           }
            
            $stmt = $pdo->prepare('INSERT INTO agenceLivraison VALUES (?, ?, ?, ?)');
            $stmt->execute([$id, $nomAgence, $localisation, $telephone]);
            header('location: listAgenceLivraison.php');
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 