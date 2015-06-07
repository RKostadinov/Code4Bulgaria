<?php
//$response = "Hello"
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'sayit');
//define('DB_USER','root');
//define('DB_PASSWORD','');
//
//$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
//$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//
//if (is_ajax()) {
//    echo "Hellooooo";
//    if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
//        $action = $_POST["action"];
////        switch($action) { //Switch case for value of action
////            case "test": test_function(); break;
////        }
//        test_function();
//    }
//}
//
////Function to check if the request is an AJAX request
//function is_ajax() {
//    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
//}
//
//function NewUser() {
//    $f_name = $_POST['first_name'];
//    $m_name = $_POST['middle_name'];
//    $l_name = $_POST['last_name'];
//    $email = $_POST['email_value'];
//    $password = $_POST['pass'];
//    $query = "INSERT INTO users (f_name, m_name, l_name, email, password) VALUES ('$f_name','$m_name', '$l_name', '$email','$password')";
//    $data = mysql_query($query) or die(mysql_error());
//    if($data) {
//        $response = "YOUR REGISTRATION IS COMPLETED...";
//    } echo "No";
//}

//function test_function(){
//    echo "Hellooooo";
//    if(!empty($_POST['email_value'])) {
//        $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email_value]' AND password = '$_POST[pass]'") or die(mysql_error());
////        if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
//        NewUser();
//        } else {
//            $response = "SORRY...YOU ARE ALREADY REGISTERED USER...";
//        }
//    } echo "Hellooooo";


//    $return = $_POST;

    //Do what you need to do with the info. The following are some examples.
    //if ($return["favorite_beverage"] == ""){
    //  $return["favorite_beverage"] = "Coke";
    //}
    //$return["favorite_restaurant"] = "McDonald's";

//    $return["json"] = json_encode($return);
//    echo json_encode($return);
//}
//?>


<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'sayit');
define('DB_USER','root');
define('DB_PASSWORD','');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function NewUser() {
    $f_name = $_POST['first_name'];
    $m_name = $_POST['middle_name'];
    $l_name = $_POST['last_name'];
    $email = $_POST['email_value'];
    $password = $_POST['pass'];
    $query = "INSERT INTO users (f_name, m_name, l_name, email, password) VALUES ('$f_name','$m_name', '$l_name', '$email','$password')";
    $data = mysql_query($query) or die(mysql_error());
    if($data) {
        $response = "YOUR REGISTRATION IS COMPLETED...";
    }
}

function SignUp() {
    if(!empty($_POST['email_value'])) {
        $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email_value]' AND password = '$_POST[pass]'") or die(mysql_error());
//        if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
            NewUser();
//        } else {
//            $response = "SORRY...YOU ARE ALREADY REGISTERED USER...";
//        }
    }

}

if(isset($_POST['submit'])) {
    SignUp();
}

?>

<script>
    window.location.href = 'http://localhost/hakaton/signup.php';
</script>