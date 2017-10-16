<?php
	session_start();

	$userN = $_POST['username'];
	$passW = $_POST['password'];
	$userlist = file('users.txt','a+');
	
	if(isset($userN) && isset($passW)) {
		fwrite($userlist,$userN.';'.$passW.';'.'\n');
		fclose($userlist);
		$_SESSION["username"] = $userN;
		echo ("Account Created");
		header('location: index.php');
	}
	else {
		echo "<br> Username already taken. Please chose another one.";
	}
	
?>
