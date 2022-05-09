<?php
//require 'model/Utilisateur.php';
//require 'controller/UtilisateurC.php';
require_once '../../config.php';
require_once 'Users.php';
$id=$_GET['id'];
$status=$_GET['status'];

try {
    $db = config1::getConnexion();
    
    $query = $db->prepare(
        'UPDATE tbl_users SET status= 1 WHERE id = :id');

    $query->execute([
        'status' => $Utilisateur->getStatus(),
        'id' => $id]);
    echo $query->rowCount() . " users UPDATED successfully <br>";
} catch (PDOException $e) {
    $e->getMessage();
}
header('location:Useres.php')
?>