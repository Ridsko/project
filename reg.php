<?php

if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['passwordr']) && isset($_POST['email']) && isset($_POST['name'])){
    
	$uname = ($_POST['uname']);
	$pass = ($_POST['password']);
    $passr = ($_POST['passwordr']);
    $email = ($_POST['email']);
    $name = ($_POST['name']);

    if (empty($uname) || empty($pass) || empty($passr) || empty($email) || empty($name) ) {
		header("Location: register.php?error=Vul alle velden in!");
	    exit();
	}

}else{
    
    exit();
};