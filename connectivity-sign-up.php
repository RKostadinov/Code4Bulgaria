<?php
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'sayit');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
    mysql_set_charset('utf8', $con);
    $db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

    function SignUp() {
        if (!empty($_POST['first_name']) || !empty($_POST['middle_name']) || !empty($_POST['last_name']) || !empty($_POST['email_value']) || !empty($_POST['password'])) {
            $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email_value]' AND password = '$_POST[pass]'") or die(mysql_error());
            $row = mysql_fetch_array($query);
            if ($row <= 0) {
                $f_name = $_POST['first_name'];
                $m_name = $_POST['middle_name'];
                $l_name = $_POST['last_name'];
                $email = $_POST['email_value'];
                $password = $_POST['pass'];
                // A higher "cost" is more secure but consumes more processing power
                $cost = 10;

// Create a random salt
                $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
                $salt = sprintf("$2a$%02d$", $cost) . $salt;

// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjQ==

// Hash the password with the salt
                $hash = crypt($password, $salt);

// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjOL.oTxqp7WylW7FCzx2Lc7VLmdJIddZq

                $query = "INSERT INTO users (f_name, m_name, l_name, email, password) VALUES ('$f_name','$m_name', '$l_name', '$email','$hash')";
                $data = mysql_query($query) or die(mysql_error());
                if ($data) {
                    return "Регистрацията беше успяшна!";
                }
            } else {
                return "Този имейл е вече използван";
                header("Location: signup.php");
            }
        } else return "Всички полета трябва да бъдат попълнение!";
    }

function encryptPass($password) {

}
?>