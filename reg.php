<?php

include 'db_conn.php';

if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['passwordr']) && isset($_POST['email']) && isset($_POST['name'])){
    
	$uname = ($_POST['uname']);
	$pass = ($_POST['password']);
    $passr = ($_POST['passwordr']);
    $email = ($_POST['email']);
    $name = ($_POST['name']);

    if (empty($uname) || empty($pass) || empty($passr) || empty($email) || empty($name) ) {
		header("Location: register.php?error=Vul alle velden in!");
	    exit();
	}else if($_POST['password'] === $_POST['passwordr']){
    $sql_u = "SELECT * FROM users WHERE user_name='$uname'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        header("Location: register.php?error=Gebruikersnaam is al in gebruik kies een andere!");
    }else if(mysqli_num_rows($res_e) > 0){
        header("Location: register.php?error=Email is al in gebruik kies een andere!");
    }else{
         $query = "INSERT INTO users (id,user_name, password, name,email) 
                  VALUES ('','$uname','$pass','$name','$email')";
         $results = mysqli_query($conn, $query);
         echo 'Saved!';
         exit();
    }

    }else{
        echo "Wachtwoorden komen niet overeen";
    
}
}else{

    header("Location: index.php");
}