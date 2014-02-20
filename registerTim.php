<?php
ini_set('display_errors',1); 
 error_reporting(E_ALL);

include_once('/var/www/html/facebook/login/models/db/dbLib.php');

extract($_REQUEST);


if(!isset($email)){

	echo "bad... no e-mail";
	return;
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
    echo $email.'<br>'; 
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); 
}else{ 
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));    
    return;
} 

// validate email

if(!isset($password)){

	echo "bad... no password";
	return;
}

$password= md5($password);

$sameEmails= dbMassData("SELECT * FROM users WHERE email = '$email'");

if($sameEmails !=null){

	echo "email taken";
	return;
}

dbQuery("INSERT INTO users (email, password) VALUES ('$email', '$password')");

echo("userAdded");





?>