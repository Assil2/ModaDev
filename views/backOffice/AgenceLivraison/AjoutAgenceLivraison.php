<?php
include_once "../layout/Header.php";
?>
<?php
 if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LfAdYIdAAAAAHuV6seA_GyYDhuLfpIIdyR_oJYz';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        { ?>
<div style="color: limegreen;"><b>Your contact request have submitted successfully.</b></div>
        <?php }
        else
        {?>
            <div style="color: red;"><b>Robot verification failed, please try again.</b></div>
        <?php }
   }else{?>
       <div style="color: red;"><b>Please do the robot verification.</b></div>
   <?php }
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
                                Ajouter Agence 
                            </h2>
                            <ul class="header-dropdown m-r--5">
 
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div class="g-recaptcha" data-sitekey="6LfAdYIdAAAAALvbfao8VPDTqYqV60FM3yOBy08u"></div><br>

                  
                            <form action="ajoutAgenceLivraisonAction.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="nomAgence" name="nomAgence"  required>
                                        <label class="form-label">nomAgence</label>
                                    </div>
                                   
                                </div>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="localisation" name="localisation"  required>
                                        <label class="form-label">localisation</label>
                                    </div>
                              
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" id="telephone" name="telephone" required>
                                        <label class="form-label">telephone</label>
                                    </div>
                                   
                                </div>

                                <button class="btn btn-success waves-effect" type="submit">Valider</button>
                                <button class="btn btn-danger waves-effect" type="reset">Annuler</button>
                            </form>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>

