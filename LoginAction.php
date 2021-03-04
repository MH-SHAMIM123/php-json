<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Action</title>
</head>
<body>
	<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( empty($_POST['uname']) && empty($_POST['pass']) {
        echo "Please fill up the form properly";
    } 
    else {
        $_SESSION['username']=$uname;
	$_SESSION['pass']=$pass;

        
    $arr1 = array($f, $username." ".$pass." ");
    $json_encoded_1 = json_encode($arr1);


    $f1 = fopen("store.txt", "a");
    fwrite($f1, $json_encoded_1 . "\n");
    fclose($f1);


  $f2 = fopen("store.txt", "r");
  $read = fread($f2, filesize("store.txt"));

  $json_decoded = json_decode($read, true);
  $json_decoded_by_newline_delimeter = explode("\n", $json_decoded);

  for($i = 0; $i < count($json_decoded_by_newline_delimeter); $i++)


    }
}
	
	?>

</body>
</html>