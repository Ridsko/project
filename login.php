<?php 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {


	$uname = ($_POST['uname']);
	$pass = ($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Foute gebruikersnaam of wachtwoord");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Foute gebruikersnaam of wachtwoord");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Foute gebruikersnaam of wachtwoord");
		        exit();
			}
		}else{
			header("Location: index.php?error=Foute gebruikersnaam of wachtwoord");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}