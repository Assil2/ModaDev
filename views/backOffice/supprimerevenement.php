<?php
    require '../../../controller/evenementC.php';

    $evenementC = new evenementC();
    $evenementC->supprimerevenement($_GET['id']);
    header('Location:events.php');
?>