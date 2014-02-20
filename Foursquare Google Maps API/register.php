<?php


include_once('var/www/html/facebook/login/models/db/login_registration.php')

//creates variable for request header parameters.  It goes to the page URL - ../register.php?email=mike&password=mike//

extract($_REQUEST);

//if email is not set then echo "bad... no email"

  if(!isset($email)){

      echo "bad no email";

    //if no email then we need to stop the function with return//
      return;

}
  // validate email
  if(!isset($password)){
  
      echo "bad no password";
      return;

}

$password= md5($password);

$sameEmails= dbMassData('SELECT * FROM users WHERE email = '$email'');

    if($sameEmails !=null){

        echo "email taken";
        return;
    }

dbQuery("INSERT INTO users (email, password, username) VALUES (‘$email’, ‘$password’, ‘$username')");




?>