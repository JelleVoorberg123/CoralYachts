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
      <!-- test -->
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-12">
               <div class="text-bg">
                  <h6 id="type" class="bold"></h6> <h6 id="plek" class="bold"></h6> <br>
                  <p id="kaart"></p>
                  <h6 id="tijd" class="bold"></h6> <br>
                  <div id="div-offerte" class="offerte">
                     <h6 id="offerte"><a href="offerte.pdf" download="offerte">Klik hier voor de offerte.</a></h6>
                  </div>
                  <h6 id="0"></h6> <h6 id="1"></h6> <h6 id="2"></h6> <h6 id="3"></h6> <h6 id="4"></h6>
                  <h6 id="php" class="bold"></h6>
               </div>
            </div>
         </div>
      </div>
     
      <script>
         var r = window.location.search;

         if (r.includes("Rotterdam")) { // checkt welke stad is aangeklikt
            document.getElementById("plek").innerHTML = " Momenteel geparkeerd in 'Rotterdam'.";
            document.getElementById("kaart").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.1420645710177!2d4.1426827123053895!3d51.949600771800135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c452b3ffffffff%3A0xb2917a614df40c4b!2sHaven%20van%20Rotterdam!5e0!3m2!1snl!2snl!4v1702911143717!5m2!1snl!2snl" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
         } else if (r.includes("Amsterdam")) {
            document.getElementById("plek").innerHTML = " Momenteel geparkeerd in 'Amsterdam'.";
            document.getElementById("kaart").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185303.77339410002!2d4.604503807111458!3d52.3938529457885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6094c8e71d7c1%3A0x1e3289ff1d804b92!2sJachthaven%20&#39;t%20Einde!5e0!3m2!1snl!2snl!4v1702978608823!5m2!1snl!2snl" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
         } else if (r.includes("Harlingen")) {
            document.getElementById("plek").innerHTML = " Momenteel geparkeerd in 'Harlingen'.";
            document.getElementById("kaart").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19128.65915943557!2d5.375148091064697!3d53.180501806496416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8ddd86c68d811%3A0x4fcab2aa7ba0f9b1!2sHaven!5e0!3m2!1snl!2snl!4v1702978672605!5m2!1snl!2snl" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
         } else if (r.includes("-")) {}

         if (r.includes("Fast+One")) { // checkt welk voertuig is aangeklikt
            document.getElementById("type").innerHTML = "U heeft de 'Fast One' geselecteerd.";
         } else if (r.includes("Vevekos")) {
            document.getElementById("type").innerHTML = "U heeft de 'Vevekos' geselecteerd.";
         } else if (r.includes("Eagle+Tu")) {
            document.getElementById("type").innerHTML = "U heeft de 'Eagle Tu' geselecteerd.";
         } else if (r.includes("Gioe+I")) {
            document.getElementById("type").innerHTML = "U heeft de 'Gioe I' geselecteerd.";
         } else if (r.includes("Can+t+Remember")) {
            document.getElementById("type").innerHTML = "U heeft de 'Can't Remember' geselecteerd.";
         }

         if (r.includes("Hoogseizoen")) { // checkt of hoog of laagseizoen is aangeklikt
            document.getElementById("tijd").innerHTML = "U zult in het 'hoogseizoen' reizen.";
         } else if (r.includes("Laagseizoen")) {
            document.getElementById("tijd").innerHTML = "U zult in het 'laagseizoen' reizen.";
         }

         // checkt of er bij een van de opties niks is ingevuld
         if (r.includes("0")) { // checkt voor plaats
            document.getElementById("plek").innerHTML = "U heeft geen locatie aangeklikt.";
            document.getElementById("offerte").innerHTML = "";}
         if (r.includes("-")) { // checkt voor voertuig
            document.getElementById("type").innerHTML = "U heeft geen type voertuig aangeklikt.";
            document.getElementById("offerte").innerHTML = "";}
      </script>
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

         $naam = $_GET["type"]; echo '<script> console.log("naam = '.$naam.'"); </script>';
         $plek = $_GET["plek"]; echo '<script> console.log("plek = '.$plek.'"); </script>';
         $tijd = $_GET["tijd"]; echo '<script> console.log("tijd = '.$tijd.'"); </script>';
         ?><br><?php
         $sql = "SELECT * FROM `boten` WHERE naam='" .$naam. "'";
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["beschikbaar"] == "ja") {
               // output data of each row
               while($row = $result->fetch_assoc()) {
                  $text = "Naam: " . $row["naam"]. "  - Plek: " . $row["plek"]. "  - Beschikbaar: " . $row["beschikbaar"]. "  - Kosten: " . $row["kosten"]. "<br>";
                  echo '<script> document.getElementById("php").innerHTML = "' .$text. '"; </script>';
               }
            } else {
               echo '<script> document.getElementById("plek").innerHTML = "Deze boot is momenteel niet beschikbaar."; </script>';
               echo '<script> document.getElementById("tijd").innerHTML = "Bekijk hier de beschikbare boten in '.$plek.' tijdens het '.$tijd.'."; </script>';
               echo '<script> document.getElementById("offerte").innerHTML = ""; </script>';

               $sql = "SELECT * FROM `boten` WHERE plek='" .$plek. "'";
               $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                  $zoekresultaten = 0;
                  while($row = $result->fetch_assoc()) {
                     if ($row["beschikbaar"] == "ja") {
                        $text = "Naam: " . $row["naam"]. "  - Plek: " . $row["plek"]. "  - Beschikbaar: " . $row["beschikbaar"]. "  - Kosten: " . $row["kosten"]. "<br>";
                        echo '<script> document.getElementById("'.$zoekresultaten.'").innerHTML = "' .$text. '"; </script>';
                        $zoekresultaten++;
                     }
                  }
               } else if ($result->num_rows >! 0 || $zoekresultaten == 0) {
                  echo '<script> document.getElementById("php").innerHTML = "Geen resultaten."; </script>';
               } 
            }
            
         } else {
            echo '<script> document.getElementById("php").innerHTML = "Geen resultaten."; </script>';
         }


         
         

         $conn->close();
      ?>
      
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