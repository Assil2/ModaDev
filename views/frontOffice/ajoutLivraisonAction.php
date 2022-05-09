<?php

    include_once "../../Controller/LivraisonC.php";
    include_once "../../Model/livraison.php";

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
   
        if (!empty($_POST)) {
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            $reference = isset($_POST['reference']) ? $_POST['reference'] : '';
            $produit = isset($_POST['produit']) ? $_POST['produit'] : '';
            $nomUsr = isset($_POST['nomUsr']) ? $_POST['nomUsr'] : '';
            $prenomUsr = isset($_POST['prenomUsr']) ? $_POST['prenomUsr'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            $idCommande = isset($_POST['idCommande']) ? $_POST['idCommande'] : '';
            $idAgenceLivraison = isset($_POST['idAgenceLivraison']) ? $_POST['idAgenceLivraison'] : '';
            $stmt = $pdo->prepare('INSERT INTO livraison VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt->execute([$id, $reference, $produit, $nomUsr, $prenomUsr, $email, $telephone, $idCommande, $idAgenceLivraison]);
            if ( preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $telephone ) ){
              
                //0477558899, 04-77-55-88-99, 04 77 55 88 99 ou 04/77/55/88/99 format accépté
            }
            else{
                echo "Le téléphone n'est pas valide";
            }
            if ( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $email ) )  
{

}
else{
    echo "addr mail n'est pas valide ";
}
if($reference != "" && $produit != "" && $nomUsr != "" && $prenomUsr != ""  && $telephone != ""  && $idCommande != ""  && $idAgenceLivraison != ""){ // si les saisies ne sont pas vides
   
}else { echo "champs vide !";}
            // Output message
            $msg = 'Created Successfully!';
        }
        header('location: Livraison.php');

    
?>
 