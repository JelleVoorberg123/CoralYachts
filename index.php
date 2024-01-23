<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Coral Yachts</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="overOns.html">Over ons</a>
                              </li>
                           </ul>
                           <div class="sign_btn"><a href="contact.html">Contact</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                     <h1>Vind de beste boten om te huren</h1>
                     <strong>"Coral Yachts - waar de horizon niet het einde van het zichtbare is"</strong> <br> <br>
                     <p>
                        Stap aan boord van een onvergetelijk avontuur met Coral Yachts, waar we meer bieden dan alleen boten - we bieden de belofte van grenzeloze mogelijkheden op het water. Ontdek waarom onze vloot, service en unieke locaties de perfecte combinatie vormen voor een betoverende ervaring die je nog lang zal bijblijven. 
                        <head></head>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
      <!-- car -->
      <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Boten Collectie </h2>
                     <span>Coral Yachts tilt jouw maritieme ervaring naar nieuwe hoogten door enkel de beste boten te verhuren, waarbij kwaliteit en betrouwbaarheid samenkomen om jou een zorgeloos en onvergetelijk avontuur op het water te garanderen.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="images/car_img1.png" alt="#"/></figure>
                     <h3>Can't Remember</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="images/car_img2.png" alt="#"/></figure>
                     <h3>Eagle Tu</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="images/car_img3.png" alt="#"/></figure>
                     <h3>Fast One</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end car -->
      <!-- bestCar -->
      <div id="contact" class="bestCar">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-6 offset-md-6">
                        <form class="main_form" action="resultaat.php" method="get">
                           <table>
                              <div class="titlepage">
                                 <h2>Vind de beste boot voor jou.</h2>
                              </div>
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <select name="plek" required>
                                       <option value="0" id="1" >Plek </option>
                                       <option value="Rotterdam" id="1" >Rotterdam</option>
                                       <option value="Amsterdam" id="1" >Amsterdam</option>
                                       <option value="Harlingen" id="1" >Harlingen</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12">
                                    <select name="type" required>
                                       <option value="-">Type</option>
                                       <option value="Fast One">Fast One</option>
                                       <option value="Vevekos">Vevekos</option>
                                       <option value="Eagle Tu">Eagle Tu</option>
                                       <option value="Gioe I">Gioe I</option>
                                       <option value="Can t Remember">Can't Remember</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12">
                                    <select name="tijd" required>
                                       <option value="niks">Tijd</option>
                                       <option value="Hoogseizoen">Hoogseizoen</option>
                                       <option value="Laagseizoen">Laagseizoen</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-12">
                                    <button class="find_btn">Zoeken</button>
                                 </div>
                              </div>
                           </table>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bestCar -->
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Waarom ons?</h2>
                     <span>heb hier nog niks voor verzonnen </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>Diverse Vloot voor Elke Gelegenheid</span>
                     <p>Bij Coral Yachts hebben we een uitgebreide vloot van boten, zorgvuldig geselecteerd om aan diverse behoeften te voldoen. Of je nu op zoek bent naar een ontspannen dagje varen, een avontuurlijke zeiltocht of een luxe jachtervaring, we hebben de perfecte boot voor jou. </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>Gepersonaliseerde Service van Vriendelijk Personeel</span>
                     <p>Ons toegewijde team staat klaar om je te helpen bij elke stap, van het kiezen van de juiste boot tot het verstrekken van lokale kennis en vaartips. We streven naar een persoonlijke benadering om ervoor te zorgen dat jouw bootverhuurervaring naadloos verloopt. </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>Ontdek Unieke Vaarroutes op Schilderachtige Locaties</span>
                     <p>Gevestigd op prachtige locaties, bieden wij jou de mogelijkheid om unieke vaarroutes te verkennen met adembenemende landschappen. Of het nu gaat om kustlijnen, meren of rivieren, Coral Yachts opent de deur naar onvergetelijke avonturen op het water. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose  section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cont_call">
                        <h3> <strong class="multi color_chang"> Bel Nu!</strong><br>
                           <p class="multi color_chang_1">055 723651</p>
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by <a href="https://www.linkedin.com/in/jelle-voorberg-a1872122b/"> Jelle Voorberg</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

