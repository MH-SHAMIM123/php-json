<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['male']) && empty($_POST['email']) && empty($_POST['female']) && empty($_POST['uname']) && empty($_POST['pass']) && empty($_POST['re'])) {
				echo "Please fill up the form properly";
			} 
			else {
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$gender = $_POST['gender'];
				$mail = $_POST['mail'];
				$username = $_POST['username'];
				$pw = $_POST['pw'];
				$email = $_POST['email'];
				echo "Client name is: $fname $lname";

				$f=fopen("store.txt", "a");
				fwrite($f, $fname." ".$lname." ".$gender." ".$mail." ".$username." ".$pw." ".$email);


			}
		}
	?>
   
   
   <?php

                $arr1 = array($f, $fname." ".$lname." ".$gender." ".$mail." ".$username." ".$pw." ".$email."");
                $json_encoded_1 = json_encode($arr1);


                $f1 = fopen("store.txt", "a");
                fwrite($f1, $json_encoded_1 . "\n");
                fclose($f1);


              $f2 = fopen("store.txt", "r");
              $read = fread($f2, filesize("store.txt"));

              $json_decoded = json_decode($read, true);
              $json_decoded_by_newline_delimeter = explode("\n", $json_decoded);

              for($i = 0; $i < count($json_decoded_by_newline_delimeter); $i++) {


              }
?>


</body>
</html>