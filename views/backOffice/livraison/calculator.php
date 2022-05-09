<?php
include_once "../layout/Header.php";
?>


<?php

$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
switch ($operator) {
case "Sum":
$CalculatorResult = $FirstNumber + $SecondNumber;
break;
case "Subtraction":
 $CalculatorResult = $FirstNumber - $SecondNumber;
break;
case "Multiplication":
$CalculatorResult = $FirstNumber * $SecondNumber;
break;
case "Division":
$CalculatorResult = $FirstNumber / $SecondNumber;
}
}
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">   
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                         Calculator
                            </h2>
                           
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                            </li>
                            </ul>
                        </div>
                        <div class="body">
                  
                      
                        <form action="" method="post" id="quiz-form">
                        <p>
                        <input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" /> <b>First Number</b>
                        </p>
                        <p>
                        <input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
                        </p>
                        <p>
                        <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
                        </p>
                        <input type="submit" name="operator" value="Sum" />
                        <input type="submit" name="operator" value="Subtraction" />
                        <input type="submit" name="operator" value="Multiplication" />
                        <input type="submit" name="operator" value="Division" />
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

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>



