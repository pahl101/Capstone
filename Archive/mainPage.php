<!DOCTYPE html>
<html >
  <head>

    
    <meta charset="UTF-8">
    <title>Chapman Casting Portal</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/styleActor.css">

    
  </head>

  <body>
  
    <nav>
      <ul>
        <div class = "user" style="background-image: url('images/newUser.jpg')"></div>
        <form action="loginScript.php" method="get">
        <li>
          <?php 
            session_start();
            echo $_SESSION['userName'];
            ?> 
        </li>

        </form>
        <br>
        <li><a href="NewCastingCall.php">+ New Casting Call</a></li> <!--Opens Create Casting Call-->
        <li><a href="#Call1">...</a></li>
        <li><a href="#Call2">...</a></li> 

      </ul> 
    </nav>


	<div class = "content">

	    <center><h1><img src="images/CHAPCAST.png" alt="Chapcast" style="width: 350px; height: 50px"></h1></center>

	    <div class="topnav" id="myTopnav">
        <a href="logoutphp.php" >Log Out</a>
	  		<!-- <a href="editProfile.php">Settings</a> --> <!--Opens Profile Settings Page-->
	  		<a href="profilePage.php">My Profile</a>
        <a href="">Casting Calls</a>
	  		<a href="directorView.php">Actors</a>
		</div>

      	<center><img src="images/logo.png" alt="Chapman Logo" align="center" style="width:300px;height:50px;"></center>

      <div class="rejilla">



        <a href="file:///Users/ceferinoj/Desktop/Capstone/NewCastingCall/index.php">
        <div class="caja"><img src="movies/CivWar.jpg"/>
          <p>Captain America: Civil War</p>
          <div class="shadow-3"></div>
        </div>
        </a>

        <div class="caja"><img src="movies/trolls.jpg"/>
          <p>Trolls</p>
        </div>

        <div class="caja"><img src="movies/TwoOne.jpg"/>
          <p>21</p>
        </div>

        <div class="caja"><img src="movies/Avengers.jpg"/>
          <p>"The Avengers"</p>
        </div>

        <div class="caja"><img src="movies/Zoo.jpg"/>
          <p>Zootopia</p>
        </div>

        <div class="caja"><img src="movies/sing.jpg"/>
          <p>Sing!</p>
        </div>

        <div class="caja"><img src="movies/lala.jpg"/>
          <p>La La Land</p>
        </div>

        <div class="caja"><img src="movies/guardians2.jpg"/>
          <p>"The Gaurdians of the Galaxy Vol.2"</p>
        </div>

        <div class="caja"><img src="movies/Fseven.jpg"/>
          <p>Furious 7</p>
        </div>

        <div class="caja"><img src="movies/JW2.jpg"/>
          <p>John Wick 2</p>
        </div>

        <div class="caja"><img src="movies/Help.jpg"/>
          <p>The Help</p>
        </div>

        <div class="caja"><img src="movies/MI6.jpg"/>
          <p>Mission Impossible: Rogue Nation</p>
        </div>

        <div class="caja"><img src="movies/mmpr.jpg"/>
          <p>The Mighty Morphin' Power Rangers</p>
        </div>

        <div class="caja"><img src="movies/batb.jpg"/>
          <p>Beauty and the Beast</p>
        </div>

        <div class="caja"><img src="movies/Moana.jpeg"/>
          <p>Moana</p>
        </div>

        <div class="caja"><img src="movies/NowSeeMe.jpg"/>
          <p>Now You See Me 2</p>
        </div>

        <div class="caja"><img src="movies/pass.jpg"/>
          <p>Passengers</p>
        </div>

        <div class="caja"><img src="movies/piLife.jpg"/>
          <p>Life of Pi</p>
        </div>

        <div class="caja"><img src="movies/kong.jpg"/>
          <p>Kong: Skull Island</p>
        </div>

        <div class="caja"><img src="movies/Revil.jpg"/>
          <p>Resident Evil: The Final Chapter</p>
        </div>

        <div class="caja"><img src="movies/rogue.png"/>
          <p>Rogue One: A Star Wars Story</p>
        </div>

        <div class="caja"><img src="movies/Gout.jpg"/>
          <p>Get Out</p>
        </div>

        <div class="caja"><img src="movies/Frozen.png"/>
          <p>Frozen</p>
        </div>

        <div class="caja"><img src="movies/ForceAwakens.jpg"/>
          <p>Star Wars: The Force Awakens</p>
        </div>

        <div class="caja"><img src="movies/FistFight.jpg"/>
          <p>Fist Fight</p>
        </div>

        <div class="caja"><img src="movies/facebook.jpg"/>
          <p>The Social Network</p>
        </div>

        <div class="caja"><img src="movies/baba.jpg"/>
          <p>The Babadook</p>
        </div>

        <div class="caja"><img src="movies/nightBefore.jpg"/>
          <p>The Night Before</p>
        </div>

      </div>

    </div>

     <!--  $results = array();
      $sql = $conn->prepare("CALL ReturnAllCastingInfo()");
      $sql->execute()
      while ($sql->fetch()) {
        $results[]=result;
      }

      foreach ($results as $res) {
      ?>
      <a href="castingCallpage.php">
        <div class="caja"><img src="movies/filmImage.jpg"/>
          <p>
            <?php
            // $_SESSION['castId']=$res['CastCallID'];
            // echo $_SESSION['filmTitle'] = $res['Tittle'];
            // $_SESSION['ProdLvl'] = $res['ProductionLVL'];
            // $_SESSION['synops'] = $res['FilmSynops'];
            // $_SESSION['auditionDate'] = $res['AuditionDate'];
            // $_SESSION['auditionLocation'] = $res['AudLocation'];
            // $_SESSION['filmDate'] = $res['FilmShootDate'];
            ?>
          </p>
          <div class="shadow-3"></div>
        </div>
        </a>
      
      <?php
        
      //}

     // $result->close();
     // $conn->close();
      
      //?> -->
    
  </body>
</html>
