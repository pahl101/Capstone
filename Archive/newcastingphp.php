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
  $newProdLvl = $_POST['prodlevel'];
  $_SESSION['ProdLvl']=$newProdLvl;


  	

$resultStudent = $conn->prepare("CALL CreateCastingCall(?,?,?,?,?,?,?)");
$resultStudent->bind_param('isssiss', $_SESSION['hashedEmail'], $_SESSION['auditionDate'], $_SESSION['filmDate'], $_SESSION['auditionLocation'], $_SESSION['ProdLvl'], $_SESSION['synops'],$_SESSION['filmTitle']);

$resultStudent->execute();

header('Location: castingCallPage.php');

$conn->close();


?>