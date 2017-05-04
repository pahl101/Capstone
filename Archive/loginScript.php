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

		
		if($resultInfo = $conn->prepare("CALL ReturnActorInfo(?)")){
		//$resultInfo = $conn->query("SELECT * FROM ActorRef");

		$resultInfo->bindParam(1, $_SESSION['hashedEmail'], PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT);
		//$resultInfo->bindParam(1, $_SESSION['hashedEmail'], PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 
		$resultInfo->execute();

		$resultInfo->store_result();

		$num_of_rows = $stmt->num_rows;

		$stmt->bind_result($id, $name, $email, $number);

		while ($stmt->fetch()) {
			$theid = $id;
			$_SESSION['userName'] = $name;
			$_SESSION['userEmail'] = $email;
			$_SESSION['phoneNumber'] = $number;
	
	   
		   echo $_SESSION['userName'];
		   echo $_SESSION['userEmail'];
		   echo $_SESSION['phoneNumber'];
		}
	}else{
   //error !! don't go further
   var_dump($resultInfo);
}
$resultInfo->close();

// 		if ($result->num_rows > 0) {
// 			echo "...";
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["IDRef"]. " - Name: " . $row["RefName"]. " " . $row["RefEmail"]. " ". $row["RefNum"] . "<br>";
//     }
// } else {
//     echo "0 results";
//     echo $hashedPass;
// }


		$isCorrect = "True";
		echo $isCorrect;
		//header('Location: mainPage.php');
	}
	else{
		$isCorrect = "False";
		echo $isCorrect;
		//header('Location: invalidLogin.php');
	}
	//echo ($_SESSION['hashedEmail']);
	$result->close();
	$conn->close();

?>