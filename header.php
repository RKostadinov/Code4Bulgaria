<?php
    session_start();
    function login_navbar($SESSION) {
if(!isset($SESSION["LoggedIn"])) {
    $menu = '<li class="active"><a class="btn" href="signin.php">Влез / Регистрация</a></li>';
} elseif(isset($SESSION["LoggedIn"]) && $SESSION["LoggedIn"]== 1) {
    $menu = "<li class=\"active\"><a class=\"btn\" href=\"logout.php\">{$SESSION["email"]} / Logout</a></li>
//    <a href=\"logout.php\"></a>";
}

    echo '<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="assets/images/label.png" alt="Progressus HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="index.php">Начало</a></li>
                    <li><a href="about.html">За нас</a></li>
                    <li><a href="contact.html">Контакти</a></li>'.
                    $menu
                .'</ul>
            </div>
        </div>
    </div> ';
 }
?>
