<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ChapCast</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
        <link rel="stylesheet" href="css/default.css">

    
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

      <div class="topnav" id="myTopnav">
        <a href="logoutphp.php" >Log Out</a>
        <!-- <a href="editProfile.php" >Settings</a> --> <!--Opens Profile Settings Page-->
        <a href="profilePage.php" >My Profile</a>
        <a href="mainPage.php" >Casting Calls</a>
        <a href="directorView.php" >Actors</a>
 
    </div>

        <br/><center><h1>Create New Casting Call</h1></center>

        <form action="newcastingphp.php" method="post">

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


    <!-- Right Column -->
    <center><div class="w3-twothird"></center>
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-film fa-fw w3-margin-right w3-xxlarge w3-text-grey"></i>
        </h2>
            <form action="newcastingphp.php" method="post">
        
        <fieldset>
          <!-- <label>Film Poster:</label>
            <input type="file" name="filmposter" accept="image/*"><br><br><br> -->


          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required><br><br>

          <label for="description">Description:</label><br>
          <textarea name="description" id="description" cols="80" rows="10" required></textarea><br><br>

          <!-- <label for="script">Script:</label>
          <input type="file" id="script" name="script" accept="application/pdf" required><br><br><br> -->

          <label for="prodlevel">Level of Production:</label><br>
          <select id="prodlevel" name="prodlevel" required>
            <option selected disabled>Choose the Level of Production:</option>
            <option value="1">Undergraduate Directing 2 (FP 338)</option>
            <option value="2">Undergraduate Directing 3 (FP 438)</option>
            <option value="3">Visual Storytelling (FTV 130)</option>
            <option value="4">Undergraduate Intermediate Production (FP 280)</option>
            <option value="5">Undergraduate Advanced Production (FP 331)</option>
            <option value="6">Undergraduate Senior Thesis (FP 497-498)</option>
            <option value="21">Undergraduate Byte-sized Television (TWP 313)</option>
            <option value="22">Undergraduate Television Pilots (TWP 398)</option>
            <option value="7">Undergraduate Digital Arts Project</option>
            <option value="23">Undergraduate Independent Study</option>
            <option value="8">Graduate Fundamentals of Directing 1 (FP 538)</option>
            <option value="9">Graduate Fundamentals of Directing 2 (FP 539)</option>
            <option value="10">Graduate Intermediate Directing (FP 664)</option>
            <option value="11">Graduate Advanced Directing (FP 665)</option>
            <option value="12">Master class in Directing (FP 638)</option>
            <option value="13">Graduate Production Workshop 1 (FP 531)</option>
            <option value="14">Graduate Production Workshop 2 (FP 532)</option>
            <option value="15">Graduate Production Workshop 3 (FP 577)</option>
            <option value="16">Graduate Production Workshop 4 (FP 631)</option>
            <option value="17">Graduate Thesis (FP 698)</option>
            <option value="18">Graduate Filmmakers and Actors Workshop (FP 507)</option>
            <option value="19">Graduate Independent Study</option>
            <option value="20">Other</option>

          </select><br><br>

          <script type="text/javascript">
          var today = new Date().toISOString().split('T')[0];
          document.getElementsByName("filmdate")[0].setAttribute('min', today);
          document.getElementsByName("auditiondate")[0].setAttribute('min', today);

          </script>

          <!-- <label for="location">Filming Location:</label><br>
          <input type="text" id="location" name="location" required><br><br> -->

          <label for="startdate">Filming Date: </label>
          <input type="date" id="filmdate" name="filmdate" min="2017-04-19" required><br>

          <br><label for="auditionlocation">Audition Location:</label>
          <input type="text" id="auditionlocation" name="auditionlocation"  required><br><br>


          <label for="auditiondate">Audition Date:</label>
          <input type="date" id="auditiondate" name="auditiondate" min="2017-04-19" required><br><br>

          <script type="text/javascript">
            var counter = 1;
            var limit = 20;
            function addInput(divName){
                 if (counter == limit)  {
                      alert("You have reached the limit of adding " + counter + " inputs");
                 }
                 else {
                      var newdiv = document.createElement('div');
                      newdiv.innerHTML = "<br>"+"<b>Role </b>" + (counter + 1) +"<br>Name:" +" <br><input type='text' name='myInputs[]'><br><br>"
          +"Description: <br>"+"<textarea name='roledescriptionInputs[]' id='roledescription' cols='50' rows='5'></textarea><br><br>"
          +"Gender: <br>"+"<select id='rolegender' name='rolegenderInputs[]'>"
          +"<option selected disabled>Choose Role Gender:</option>"
          +"<option value='male'>Male</option>"
          +"<option value='female'>Female</option>"
          +"<option value='ambiguous'>Ambiguous</option>"
          +"<option value='irrelevant'>Irrelevant</option></select><br><br>"
          +"Role Ethnicity:"+"<br><select id='roleEthnicity' name='ethnicityInputs[]''><br><br>"
          +"<option selected disabled>Choose Role Ethnicity:</option>"
          +"<option value='hispanic'>Hispanic or Latino</option>"
          +"<option value='americanIndian'>American Indian or Alaska Naitive</option>"
          +"<option value='africanAmerican'>Black or African American</option>"
          +"<option value='asianIndian'>Asian Indian</option>"
          +"<option value='filipino'>Filipino</option>"
          +"<option value='korean'>Korean</option>"
          +"<option value='vietnamese'>Vietnamese</option>"
          +"<option value='white'>White</option>"
          +"<option value='nativeHawaiian'>Native Hawaiian</option>"
          +"<option value='guamanianChamorro'>Guamanian or Chamorro</option>"
          +"<option value='samoan'>Samoan</option>"
          +"<option value='other'>Other</option>"
          +"</select><br><br>"
          +"<label>Role age range:</label><br>"
          +"Lowest age:"
          +"<br><input type='int' name='lower' min='1' max='100' required></input><br>"
          +"Highest age:"
          +"<br><input type='int' name='upper' min='1' max='100' required></input><br><br><br>"
          ;
                      document.getElementById(divName).appendChild(newdiv);
                      counter++;
                 }
            }
          </script>
           <form method="POST">
               <div id="dynamicInput">
                    <b>Role 1</b><br>
                    Name:<br><input type="text" name="myInputs[]"><br><br>
                    Role Description:<br><textarea name="roledescriptionInputs[]" id="roledescription" cols="50" rows="5"></textarea><br>
                    Role Gender:<br><select id="rolegender" name="rolegenderInputs[]"><br><br>
                      <option selected disabled>Choose Role Gender:</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="ambiguous">Ambiguous</option>
                      <option value="irrelevant">Irrelevant</option>
                    </select><br><br>

                    Role Ethnicity:<br><select id="roleEthnicity" name="ethnicityInputs[]"><br><br>
                      <option selected disabled>Choose Role Ethnicity:</option>
                      <option value="hispanic">Hispanic or Latino</option>
                      <option value="americanIndian">American Indian or Alaska Naitive</option>
                      <option value="africanAmerican">Black or African American</option>
                      <option value="asianIndian">Asian Indian</option>
                      <option value="filipino">Filipino</option>
                      <option value="korean">Korean</option>
                      <option value="vietnamese">Vietnamese</option>
                      <option value="white">White</option>
                      <option value="nativeHawaiian">Native Hawaiian</option>
                      <option value="guamanianChamorro">Guamanian or Chamorro</option>
                      <option value="samoan">Samoan</option>
                      <option value="other">Other</option>
                    </select><br><br>

                    <label>Role age range:</label><br>
                    Lowest age:<br><input type="int" name="lower" min="1" max="100" required></input><br>
                    Highest age:<br><input type="int" name="upper" min="1" max="100" required></input><br>
                </div>
               <input type="button" value="Add another role" onClick="addInput('dynamicInput');">
          </form> 



               <br><br><center><button name='submit' VALUE='1' >Submit</button></center>
        
          </fieldset>
        </form>


          </h5>
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
