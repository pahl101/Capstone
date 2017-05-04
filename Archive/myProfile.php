<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Chapman Casting Portal</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/styleActor.css">

    
  </head>

  <body>
  
    <nav>
      <ul>
        <!-- <form action="phpscript.php" method="post"> -->
        <div class = "user" style="background-image: url('images/newUser.jpg')"></div>
        <li>
          <?php
          session_start();
          echo $_SESSION['userName'];
          ?>

        </li>
        <!-- </form> -->
        <br>

      </ul> 
    </nav>
        
  <div class = "content">

      <center><h1><img src="images/CHAPCAST.png" alt="Chapcast" style="width: 350px; height: 50px"></h1></center>

      <div class="topnav" id="myTopnav">
        <!--Opens Profile Settings Page-->
    </div>

        

      <form action="profilephp.php" method="post" target="_self">
      
        <center><h1>Welcome
        <?php
          echo $_SESSION['userName'];
          ?>
          !</h1></center>

        
        
        <fieldset>
          <?php
            $servername = "us-cdbr-azure-west-b.cleardb.com";
            $username = "b9196a4d86ae8a";
            $password = "864b7a39";
            $databasename = "se_group1_capstone";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $databasename);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            //echo "Connected successfully". "<br>";

            echo "<label>Please enter the following basic information about yourself:</label><br><br>";

            echo "<br><br><label for='student'>Major:</label><br>";
            echo "<select id='student' name='student_major' required>";
            echo "<b><option selected disabled>Select your major:</option></b>";

            $result = $conn->query("CALL ReturnMajors()");
            if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                 echo "<option value='" . $row['Major'] . "''>". $row['Major'] . "</option>";
            } 
          }
          //$result->close();
          echo "<br>";
          echo "</select><br>";

          echo "<br><br><label for='gender'>Gender:</label><br>";
          echo "<select id='gender' name='gender_role' required>";
            echo "<option selected disabled>Select you gender:</option>";
            echo "<option value='Male'>Male</option>";
            echo "<option value='Female'>Female</option>";
          echo "</select><br><br>";

          echo "<label>Phone number: (xxx)xxx-xxxx </label><br>";
            echo "<input pattern='[[\(]\d{3}[\)]\d{3}[\-]\d{4}' type='int' name='phone' placeholder='(xxx)xxx-xxxx'required><br><br>";

          echo "<label for='description'>About Me:</label><br>";
          echo "<textarea name='description' id='description' cols='80' rows='10' required></textarea><br><br>";

          echo "<br><label for='student'>Are you an Actor, Director, or Both?:</label><br>";
          echo "<select id='student' name='student_role' required>";
            echo "<option selected disabled>Select actor, director, or both:</option>";
            echo "<option value='0'>Actor</option>";
            echo "<option value='1'>Director</option>";
            echo "<option value='2'>Both</option>";
          echo "</select><br><br><br>";

          echo "<b><label>Enter the following information about acting:</label></b><br><br>";
        
          echo "<label>Input your preferred age range:</label><br>";
          echo "Lowest age:<input type='int' name='lower' min='1' max='100' required></input><br>";
          echo "Highest age:<input type='int' name='upper' min='1' max='100' required></input><br>";


          echo "<br><br><b><label>Genres you are interested to act in:</label></b><br>";

          $conn = new mysqli($servername, $username, $password, $databasename);
          $result = $conn->query("CALL ReturnGenre()");
          if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

                 echo "<input type='checkbox' id=' " . $row['GenreName'] . "' value= '" . $row['GenreName']  . "' name='user_interest[]'><label class='light' for='singer'>" . $row['GenreName'] ."</label><br>";
            } 
          }
          //$genreRes->close();
          echo "<br>";

          echo "<b><label>Production levels you are interested in acting for:</label></b><br>";
          
          $conn = new mysqli($servername, $username, $password, $databasename);
          $result = $conn->query("CALL ReturnAllProdLvL()");
          if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

                 echo "<input type='checkbox' id=' " . $row['LVLName'] . "' value= '" . $row['LVLName']  . "' name='user_prod_interest[]'><label class='light' for='singer'>" . $row['LVLName'] ."</label><br>";
            } 
          }
          echo "<br>";

          //$result->close;
          $conn->close();


          ?>

          </div>

           <form action="profilephp.php" method="post" target="_self">
          <center><button buttonblock VALUE="1" name ='submit'>Submit</button></center>
        </form>
        
        </fieldset>
        
      </form>



    </div>
    
  </body>

</html>