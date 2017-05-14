<?php

session_start();

if($_POST['submit'] == 1 )

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

  $newTitle = $_POST['title'];
  $_SESSION['filmTitle']=$newTitle;
  $newDescription = $_POST['description'];
  $_SESSION['synops']=$newDescription;
  $newAudDate = $_POST['auditiondate'];
  $_SESSION['auditionDate']=$newAudDate;
  $newAudLoc = $_POST['auditionlocation'];
  $_SESSION['auditionLocation']=$newAudLoc;
  $newFilmDate = $_POST['filmdate'];
  $_SESSION['filmDate']=$newFilmDate;
  $newAudTime = $_POST['auditiontime'];
  $_SESSION['auditionTime']=$newAudTime;
  $newProdLvl = $_POST['prodlevel'];
  $_SESSION['ProdLvl']=$newProdLvl;

  $roleTitles = $_POST['myInputs'];
  $roleDesc = $_POST['roledescriptionInputs'];
  $roleGender = $_POST['rolegenderInputs'];
  $roleEthnicities = $_POST['ethnicityInputs'];
  $roleAge = (int)$_POST['roleAge'];
  $script = "none";
  $image = "none";

  if ($roleGender == "male") {
    $roleGender = 1;
  }
  else if ($roleGender == "female"){
    $roleGender = 0;
  }
  else {
    $roleGender = 2;
  }
// echo $_SESSION['auditionDate'];
// echo $_SESSION['auditionTime'];
$hashed = (int)$_SESSION['hashedEmail'];
$_SESSION['auditions']= $_SESSION['auditionDate'] . " " . $_SESSION['auditionTime'] . ":00";
// echo $_SESSION['hashedEmail'];
// echo "<br>";
// echo $_SESSION['auditions'];
// echo "<br>";
// echo $_SESSION['filmDate'];
// echo "<br>";
// echo $_SESSION['auditionLocation'];
// echo "<br>";
// echo $_SESSION['ProdLvl'];
// echo "<br>";
// echo $_SESSION['synops'];
// echo "<br>";
// echo $_SESSION['filmTitle'];
// echo "<br>";
// echo $image;
// echo "<br>";
// echo $script;

$resultStudent = $conn->prepare('CALL CreateCastingCall(?,?,?,?,?,?,?,?,?)');
      $resultStudent->bind_param('issssssss', $hashed, $_SESSION['auditions'], $_SESSION['filmDate'], $_SESSION['auditionLocation'] , $_SESSION['ProdLvl'], $_SESSION['synops'], $_SESSION['filmTitle'], $image, $script);

      $resultStudent->execute();

      //$resultStudent->close();
//$theID=$resultStudent->fetch();
//$castingNum=$theID;
//echo $castingNum;
//$_SESSION['castingNum'] = $castingNum;

$resultStudent->close();
$conn->close();

// $servername = "us-cdbr-azure-west-b.cleardb.com";
// $username = "b9196a4d86ae8a";
// $password = "864b7a39";
// $databasename = "se_group1_capstone";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $databasename);

// $index = 0;
// foreach ($roleTitles as $title) {


//   $resultRole = $conn->prepare('CALL AddCastingRoles(?,?,?,?,?,?,?)');
//   $resultRole->bind_param('issiisi', $_SESSION['hashedEmail'], $title, $roleDesc[$index], $roleGender[$index], $roleAge[$index], $roleEthnicities[$index],$castingNum);

//   $resultRole->execute();

//   ++$index;
// } 

// $resultRole->close();
// header('Location: castingCallPage.php');

// $conn->close();


?>