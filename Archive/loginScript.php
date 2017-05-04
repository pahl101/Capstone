<?php

session_start();

if($_POST['pressed2'] == 1 )
	
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
//USE THE CODE BELOW FOR THE HASHING!!!!!!

	$result = $conn->prepare("CALL LogIN(?,?)");

	$result->bind_param('is', $hashedPass, $password);
	$email =$_POST ['userEmail'];
	$password =$_POST ['userPassword'];
	$hashedPass = crc32($email);
	$_SESSION['hashedEmail'] = (int)$hashedPass;
	//echo $_SESSION['hashedEmail'];

	$result->execute();

	$result ->bind_result($exists);

	$result->fetch();
	

	if ($exists == True) {

		$results = $conn->query("CALL ReturnActorInfo($hashedPass)");
          if ($results->num_rows > 0) {

          	while($row = $results->fetch_assoc()) {

          		$_SESSION['userName'] = $row['Name'];
				$_SESSION['userEmail'] = $row['Email'];
				$_SESSION['phoneNumber'] = $row['Num'];

				echo $_SESSION['userName'];
				echo $_SESSION['userEmail'];
				echo $_SESSION['phoneNumber'];

                
           	} 
          }

		$isCorrect = "True";
		// echo $isCorrect;
		//header('Location: mainPage.php');
	}
	else{
		$isCorrect = "False";
		//echo $isCorrect;
		//header('Location: invalidLogin.php');
	}
	//echo ($_SESSION['hashedEmail']);
	//$result->close();
	$conn->close();

?>