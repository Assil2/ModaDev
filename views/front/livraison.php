<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assetLiv/css/animate.css">
  
  <link rel="stylesheet" href="assetLiv/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assetLiv/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assetLiv/css/magnific-popup.css">

  <link rel="stylesheet" href="assetLiv/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assetLiv/css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="assetLiv/css/flaticon.css">
  <link rel="stylesheet" href="assetLiv/css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
    <div class="logo2"><img src="logo2.png" height="60" width="60"alt="IMG"></div>
      <a class="navbar-brand" href="index.html"><FONT size="6pt">ModaDev</FONT> <B><span><font color ="white">CENTRE</font></span></B></a>
    
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="index.html" class="nav-link">Accueil</a></li>
         <li class="nav-item"><a href="agenceLivraison.php" class="nav-link">Agence Livraison</a></li>
         <li class="nav-item"><a href="Livraison.php" class="nav-link">Livraison </a></li>
         <li class="nav-item"><a href="hotel.html" class="nav-link">event </a></li>
         <li class="nav-item"><a href="blog.html" class="nav-link">Nos serices</a></li>
         <li class="nav-item"><a href="file:///C:/Users/asus/Documents/projet%20web/front/sein%20sain%20front/formulaire%20inscription/colorlib-regform-8/index.html" class="nav-link">S'inscrire</a></li>
         <li class="nav-item active"><a href="contact.html" class="nav-link">Contacter</a></li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/contact.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil<i class="fa fa-chevron-right"></i></a></span> <span>Contact<i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Livraison </h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-map-marker"></span>
       </div>
       <h3 class="mb-2">Addresse</h3>
       <p>198 West 21th Street, Suite 721 New York NY 10016</p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-phone"></span>
     </div>
     <h3 class="mb-2">Numéro du téléphonne</h3>
     <p><a href="tel://1234567920">+216 92 327 067 </a></p>
   </div>
 </div>
 <div class="col-md-3 d-flex">
   <div class="align-self-stretch box p-4 text-center">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-paper-plane"></span>
   </div>
   <h3 class="mb-2">Adresse Email</h3>
   <p><a href="mailto:info@yoursite.com">lamis.hammami@esprit.tn</a></p>
 </div>
</div>
<div class="col-md-3 d-flex">
 <div class="align-self-stretch box p-4 text-center">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="fa fa-globe"></span>
 </div>
 <h3 class="mb-2">Website</h3>
 <p><a href="#">yoursite.com</a></p>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
      <form action="ajoutLivraisonAction.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="reference" name="reference" required>
                                        <label class="form-label">reference</label>
                                    </div>
                                  
                                </div>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="produit" name="produit" required>
                                        <label class="form-label">produit</label>
                                    </div>
                                  
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="nomUsr" name="nomUsr" required>
                                        <label class="form-label">nomUsr</label>
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="prenomUsr" name="prenomUsr" required>
                                        <label class="form-label">prenomUsr</label>
                                    </div>
                                  
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="email" name="email" required>
                                        <label class="form-label">email</label>
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="telephone" name="telephone" required>
    
                                        <label class="form-label">telephone</label>
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="idCommande" name="idCommande" required>
                                        <label class="form-label">idCommande</label>
                                    </div>
                                   
                                </div>
                            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="idAgenceLivraison" name="idAgenceLivraison" required>
                                        <label class="form-label">idAgenceLivraison</label>
                                    </div>
                                   
                                </div>
                                
                                <button class="btn btn-success waves-effect" type="submit">Valider</button>
                                <button class="btn btn-danger waves-effect" type="reset">Annuler</button>
                            </form>
      </div>

      <div class="col-md-6 d-flex">
       <div id="map" class="bg-white"></div>
     </div>
   </div>
 </div>
</section>

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url(images/bg_5.jpg);">
     <div class="overlay"></div>
     <h2>Livraison</h2>
     <p>ON EST LA POUR VOUS , N'HESITEZ PLUS !</p>
   </div>
 </div>
</div>
</div>
</section>


<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">A propos </h2>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
       <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="javascript:void(0);">AdminLH-Moda DEvcentre</a>.
                </div>
            </div>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="assetLiv/js/jquery.min.js"></script>
<script src="assetLiv/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assetLiv/js/popper.min.js"></script>
<script src="assetLiv/js/bootstrap.min.js"></script>
<script src="assetLiv/js/jquery.easing.1.3.js"></script>
<script src="assetLiv/js/jquery.waypoints.min.js"></script>
<script src="assetLiv/js/jquery.stellar.min.js"></script>
<script src="assetLiv/js/owl.carousel.min.js"></script>
<script src="assetLiv/js/jquery.magnific-popup.min.js"></script>
<script src="assetLiv/js/jquery.animateNumber.min.js"></script>
<script src="assetLiv/js/bootstrap-datepicker.js"></script>
<script src="assetLiv/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="assetLiv/js/google-map.js"></script>
<script src="assetLiv/js/main.js"></script>

</body>
</html>