<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Chapman Casting Portal</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/styleDirector.css">

    
  </head>

  <body>
    <nav>
      <ul>
        <div class = "user" style="background-image: url('images/newUser.jpg')"></div>
        <li>
          <?php 
            session_start();
            echo $_SESSION['userName'];
            ?> 
        </li>
        <br>
        <li><a href="NewCastingCall.php">+ New Casting Call</a></li> <!--Opens Create Casting Call-->
        <li><a href="#Call1">...</a></li>
        <li><a href="#Call2">...</a></li> 

      </ul> 
    </nav>
      
    
    <div class = "content">
      <br/>
    <center><h1><img src="images/CHAPCAST.png" alt="Chapcast" style="width: 350px; height: 50px"></h1></center>

      <div class="topnav" id="myTopnav">

        <a href="logoutphp.php" >Log Out</a>
        <a href="editProfile.php">Settings</a> <!--Opens Profile Settings Page-->
        <a href="profilePage.php">My Profile</a>
        <a href="mainPage.php">Casting Calls</a>
        <a href="directorView.php">Actors</a>
    </div>

        <center><img src="images/logo.png" alt="Chapman Logo" align="center" style="width:300px;height:50px;"></center>

        <br/><br/>

        <center><button name='submit' VALUE='1' style="height:50px; width:250px" >+ Interested</button></center>

 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Verdana'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Verdana", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
        <div class="w3-container">
          <br/>
          <img src="movies/filmImage.jpg"style="width:100%" alt="Avatar">
          <h2>
            <?php 
            echo $_SESSION['filmTitle'];
            ?> 
          </h2>
          <p><i class="fa fa-bullhorn fa-fw w3-margin-right w3-large w3-text-darkred"></i>
          <?php 
            echo $_SESSION['userName'];
            ?> 
          </p>
          <p><i class="fa fa-institution fa-fw w3-margin-right w3-large w3-text-darkred"></i>Chapman University</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-darkred"></i>Production Level</b></p>
          <p>
            <?php 
            if ($_SESSION['ProdLvl'] == 1)
              echo "Undergraduate Directing 2 (FP 338)";
            else if ($_SESSION['ProdLvl'] == 2)
              echo "Undergraduate Directing 3 (FP 438)";
            else if ($_SESSION['ProdLvl'] == 3)
              echo "Visual Storytelling (FTV 130)";
            else if ($_SESSION['ProdLvl'] == 4)
              echo "Undergraduate Intermediate Production (FP 280)";
            else if ($_SESSION['ProdLvl'] == 5)
              echo "Undergraduate Advanced Production (FP 331)";
            else if ($_SESSION['ProdLvl'] == 6)
              echo "Undergraduate Senior Thesis (FP 497-498)";
            else if ($_SESSION['ProdLvl'] == 7)
              echo "Undergraduate Digital Arts Project";
            else if ($_SESSION['ProdLvl'] == 8)
              echo "Graduate Fundamentals of Directing 1 (FP 538)";
            else if ($_SESSION['ProdLvl'] == 9)
              echo "Undergraduate Advanced Production (FP 331)";
            else if ($_SESSION['ProdLvl'] == 10)
              echo "Graduate Intermediate Directing (FP 664)";
            else if ($_SESSION['ProdLvl'] == 11)
              echo "Graduate Advanced Directing (FP 665)";
            else if ($_SESSION['ProdLvl'] == 12)
              echo "Master class in Directing (FP 638)";
            else if ($_SESSION['ProdLvl'] == 13)
              echo "Graduate Production Workshop 1 (FP 531)";
            else if ($_SESSION['ProdLvl'] == 14)
              echo "Graduate Production Workshop 2 (FP 532)";
            else if ($_SESSION['ProdLvl'] == 15)
              echo "Graduate Production Workshop 3 (FP 577)";
            else if ($_SESSION['ProdLvl'] == 16)
              echo "Graduate Production Workshop 4 (FP 631)";
            else if ($_SESSION['ProdLvl'] == 17)
              echo "Graduate Thesis (FP 698)";
            else if ($_SESSION['ProdLvl'] == 18)
              echo "Graduate Filmmakers and Actors Workshop (FP 507)";
            else if ($_SESSION['ProdLvl'] == 19)
              echo "Graduate Independent Study";
            else if ($_SESSION['ProdLvl'] == 20)
              echo "Other";
            else if ($_SESSION['ProdLvl'] == 21)
              echo "Undergraduate Byte-sized Television (TWP 313)";
            else if ($_SESSION['ProdLvl'] == 22)
              echo "Undergraduate Television Pilots (TWP 398)";
            else if ($_SESSION['ProdLvl'] == 23)
              echo "Undergraduate Independent Study";


            ?> 
          </p>
          
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">

        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-film fa-fw w3-margin-right w3-xxlarge w3-text-grey"></i> 

        </h2>
        <div class="w3-container">
          <h5 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Description: 
            <?php 
            echo "<br/>";
            echo $_SESSION['synops'];
            ?>
          </h5>
          <h5 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Film Date: 
            <?php 
            echo $_SESSION['filmDate'];
            ?>
          </h5>
          
          <hr>
          

        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Auditions:</b></h5>
          <h5 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Date: 
            <?php 
            echo $_SESSION['auditionDate'];
            ?>
          </h5>
          <h5 class="w3-text-black"><i class="fa fa-map-marker fa-fw w3-margin-right"></i>Location: 
            <?php 
            echo $_SESSION['auditionLocation'];
            ?>
          </h5>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Roles:</b></h5><br>
          <h6 class="w3-text-darkred">
            <?php
            foreach ($_POST['myInputs[]'] as $name) {
              $count=1;
              foreach($_POST['roledescriptionInputs[]'] as $description) {
                foreach ($_POST['ethnicityInputs[]'] as $ethnicity) {
                  foreach ($_POST['lower'] as $low) {
                    foreach ($_POST['upper'] as $up) {
                      $range=$low." - ".$up;
                      echo "Role ".$count.":<br>";
                      echo "Name: ".$name;
                      echo "<br>Description: <br>".$description;
                      echo "<br>Ethnicity: ".$ethnicity;
                      echo "<br>Age Range: ".$range;
                    }
                  }
                }
              }
            }
            ?>
          </h6>
        </div>
      </div>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


      


    </div>
    
  </body>
  </html>

