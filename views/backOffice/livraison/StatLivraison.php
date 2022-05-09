<?php
include_once "../layout/Header.php";

$dbhandle = new mysqli('127.0.0.1', 'root', '','modadev');
echo $dbhandle->connect_error;

$query = "SELECT produit, count(produit) FROM livraison group by produit";
$res = 	$dbhandle->query($query);
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
                            Statistique  livraison
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
		
          ['produit','produit'],
         <?php
		 
		 //fetch_assoc(): lit une ligne de résultat MySql dans un tableau associatif //		 
		 while ($row=$res->fetch_assoc()) {
			 
			 echo "['".$row['produit']."',".$row['count(produit)']."],"; 
			 
		 }
		 ?>
        ]);
        var options = {
          title: ' livraison | produit',
		  is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>

 
    <div id="piechart" style="width: 800px; height: 500px;"></div>

 </div>
               
                </div>
             
         
            
          </div>
        </div>
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

