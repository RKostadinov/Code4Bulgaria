<?php
session_start();
 var_dump($_REQUEST);
$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "sayit"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the email that you created, or were given, to access your database
$dbpass = ""; // the password that you created, or were given, to access your database
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    echo "string";
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['email']))
{
    echo "You're logged in.";
}
elseif(!empty($_POST['email']) && !empty($_POST['password']))
{

    $email = mysql_real_escape_string($_POST['email']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM users WHERE email = '".$email."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['email'];
         
        $_SESSION['email'] = $email;
        $_SESSION['LoggedIn'] = 1;
         
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
       // echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        echo "<p>Невалиден имайл или парола</a>.</p>";
    }
}
?>