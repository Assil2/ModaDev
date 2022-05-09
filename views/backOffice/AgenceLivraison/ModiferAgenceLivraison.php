
 <?php

include_once "../../../Controller/AgenceagenceLivraison.php";
include_once "../../../model/agenceLivraison.php";
include_once "../layout/Header.php";

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
          //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
          $nomAgence = isset($_POST['nomAgence']) ? $_POST['nomAgence'] : '';
          $localisation = isset($_POST['localisation']) ? $_POST['localisation'] : '';
          $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
         
          // Update the record
          $stmt = $pdo->prepare('UPDATE agenceLivraison SET  nomAgence = ?, localisation = ? WHERE id = ?');
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
     

    
    ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
              
            </div>
           
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                modifier agenceLivraison
                            </h2>
                         
                        </div>
                        <div class="body">
                            <form action="ModifieragenceLivraisonAction.php?id=<?=$agenceLivraison['id']?>" method="POST">
                            <table class='table table-hover table-responsive table-bordered'>
                            <tr>
            <td>nomAgence</td>
            <td><input type='text' name='nomAgence' value ="<?php echo $agenceLivraison['nomAgence'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>localisation</td>
            <td><input type='text' name='localisation'  value ="<?php echo $agenceLivraison['localisation'];?>" class='form-control' /></td>
        </tr>
        
        <tr>
            <td>telephone</td>
            <td><input type='text' name='telephone'  value ="<?php echo $agenceLivraison['telephone'];?>" class='form-control' /></td>
        </tr>
      
 
        
     
                                        <button class="btn btn-success waves-effect" type="submit">Valider</button>
                                        <a href='ListagenceLivraison.php' class='btn btn-danger'>Back</a>
                                </table>
                            </form>
                            <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>

      <?php
  
  ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
           
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>

