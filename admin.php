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
                        <form class="main_form" action="adminResultaat.php" method="get">
                           <table>
                              <div class="titlepage">
                                 <h2>Kies hier wat u met een boot wilt doen.</h2>
                              </div>
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <select name="wat" required>
                                       <option value="0" id="1" >Wat wilt u doen?</option>
                                       <option value="plaats" id="1" >Plaats aanpassen</option>
                                       <option value="beschikbaar" id="1" >Beschikbaar stellen</option>
                                       <option value="toevoegen" id="1" >toevoegen</option>
                                       <option value="verwijderen" id="1" >verwijderen</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12">
                                    <select name="naam" required>
                                       <option value="-">Over welke boot gaat het?</option>
                                       <option value="geen">Geen</option>
                                       <option value="Fast One">Fast One</option>
                                       <option value="Vevekos">Vevekos</option>
                                       <option value="Eagle Tu">Eagle Tu</option>
                                       <option value="Gioe I">Gioe I</option>
                                       <option value="Can t Remember">Can't Remember</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-12">
                                    <button class="find_btn">Gaan</button>
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
      <?php 
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "coralyachts";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);

         // Check connection
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         } else { echo '<script> console.log("Connectie met database 100%"); </script>'; }

         $sql = "SELECT * FROM `boten` WHERE naam='" .$type. "'";
         echo '<script> console.log(-' .$sql. '); </script>';
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // output data of each row
            while($row = $result->fetch_assoc()) {
               $text = "Naam: " . $row["naam"]. "  - Plek: " . $row["plek"]. "  - Beschikbaar: " . $row["beschikbaar"]. "  - Kosten: " . $row["kosten"]. "<br>";
               echo '<script> document.getElementById("php").innerHTML = "' .$text. '"; </script>';
            }
        }
      ?>
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cont_call">
                        <h3> <strong class="multi color_chang">U bent ingelogd als een admin.</strong><br>
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
