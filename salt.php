<?php
/*-------------------------------------------------------------
  used and adapted code from: https://nitstorm.github.io/blog/simple-and-safer-registration-login-using-php-part-1/
  The generateSalt function was gotten from http://code.activestate.com/recipes/576894-generate-a-salt/
  @author AfroSoft 
-------------------------------------------------------------*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

function generateSalt($max = 64) {
    $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
    $i = 0;
    $salt = "";
    while ($i < $max) {
        $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
        $i++;
    }
    return $salt;
}

/*-------------------------------------------------------------
 Database stuff starts from here,   
 MySQL Server Info is gotten from the $_SERVER variable 
 (assuming we have the path to the file containing the 
 DB credentials in our .htaccess file)   
-------------------------------------------------------------*/

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'princeton';
$db_name = 'hiking_site_users';

/*-------------------------------------------------------------
 Checks the connection to the DB has been made.
 If successful selects the database to be used, else exits 
-------------------------------------------------------------*/
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "connection successful";
}

/*-------------------------------------------------------------
 Form data
-------------------------------------------------------------*/
$username = mysqli_real_escape_string($mysqli, $_POST['username']); 
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];


/*-------------------------------------------------------------
 Salting and Hashing 
-------------------------------------------------------------*/

$user_salt = generateSalt(); // Generates a salt from the function above
$combo = $user_salt . $password; // Appending user password to the salt 
$hashed_pwd = hash('sha512',$combo); // Using SHA512 to hash the salt+password combo string

$link = mysqli_connect($db_host,$db_user,$db_pass);
//echo "The link of the MySQL connection is: " . $link;
if(!$link)
{
    die("Could Not Connect:".mysqli_error($link));
}
else {
    echo "\n\ncan connect";
}
mysqli_select_db($link,$db_name) or die('Can\'t use db:'. mysqli_error($link));

/*-------------------------------------------------------------
 Inserting Data 
-------------------------------------------------------------*/
$insert="INSERT INTO users(full_name, site_username, salt, hashed_password, email) VALUES ('$name','$username','$user_salt','$hashed_pwd','$email')";
$mysqli->query($insert);
echo "\ninsertion into database successful!";
mysqli_close($link); //Closing the connection to the database

?>