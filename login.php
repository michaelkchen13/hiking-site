<?php
   /*-------------------------------------------------------------
        Username and password gotten from the login form
   (used and adapted code from http://nitstorm.github.io/blog/simple-and-safer-registration-login-using-php-part-2/)
    -------------------------------------------------------------*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

$form_username = $_POST['username'];
$form_password = $_POST['password'];

/*-------------------------------------------------------------
   Database connection and selection of the database to be used
-------------------------------------------------------------*/

//MySQL Server Info
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'princeton';
$db_name = 'hiking_site_users';

//MySQL Server Connection
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*-------------------------------------------------------------
The query to the database and getting the value from it
-------------------------------------------------------------*/

$find_user = "SELECT salt,hashed_password FROM users WHERE site_username='$form_username'";
$row = null;
if ($result = $mysqli->query($find_user)) {
    $row = mysqli_fetch_assoc($result);
}
else {
    echo $result;
}

/*-------------------------------------------------------------
    Getting the value from the database
    &
    salting,hashing of the password from the form
-------------------------------------------------------------*/
$stored_salt = $row['salt'];
$stored_hash = $row['hashed_password'];
$check_pass = $stored_salt . $form_password;
$check_hash = hash('sha512',$check_pass);

/*-------------------------------------------------------------
    Comparing the two hashed values
-------------------------------------------------------------*/

if($check_hash == $stored_hash){
    echo "User authenticated";
}
else{
    echo "Not authenticated";
}
?>