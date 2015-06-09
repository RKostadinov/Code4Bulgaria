<?php
require_once("send_email.php");
require_once 'header.php';
if(isset($_POST['other_send'])) {
    sendMail("other");
}
if(isset($_POST['online_send'])) {
    sendMail("online");
}
if(isset($_POST['admin_send'])) {
    sendMail("admin");
}
if(isset($_POST['media_send'])) {
    sendMail("media");
}
if(isset($_POST['place_send'])) {
    sendMail("place");
}
if(isset($_POST['shop_send'])) {
    sendMail("shop");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <title>sayIt</title>

    <link rel="shortcut icon" href="http://localhost/Code4Bulgaria/assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="http://localhost/Code4Bulgaria/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Code4Bulgaria/assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="http://localhost/Code4Bulgaria/assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="http://localhost/Code4Bulgaria/assets/css/main.css">
</head>

<body class="home">
<?php
if(!isset($_SESSION["LoggedIn"])) {
    $menu = '<li class="active"><a class="btn" href="signin.php">Влез / Регистрация</a></li>';
} elseif(isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"]== 1) {
    $menu = "<li class=\"active\"><a class=\"btn\" href=\"logout.php\">{$_SESSION["email"]} / Logout</a></li>";
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
                    <li><a href="index.php#about_button">За нас</a></li>
                    <li><a href="#footer">Контакти</a></li>'.
    $menu
    .'</ul>
            </div>
        </div>
    </div> ';
?>

<header id="head" class="secondary"></header>
<!--&lt;!&ndash; Header &ndash;&gt;-->
<header id="signal">
    <div class="container">
        <div class="row">
            <h1 class="lead">Сигнализирай нередност</h1>
            <p class="tagline">Имаш оплакване? Потърси правата си и сигнализирай за нередностите.</p>
            <!--<p>-->
            <div class="row destacados">
                <div class="col-md-4">
                    <div>
                        <img src="assets/images/icons/restaurant.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Заведения</h2>
                        <p>Потърпевш си на лошо обслужване, храната не отговаря на очакванията или си забелязал  нередност?</p>
                        <a id="place" class="btn btn-primary" title="Enlace" role="button">Подай сигнал »</a>
                    </div>
                </div>

                <section id="form-container-place"></section>

                <div class="col-md-4">
                    <div>
                        <img src="assets/images/icons/supermarket.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Шопинг услуги</h2>
                        <p>Закупил си некачествен продукт,услугата не отговаря на изискванията или са те обслужили грубо и некоректно ?</p>
                        <a id="shop" class="btn btn-primary" title="Enlace" role="button">Подай сигнал »</a>
                    </div>
                </div>
                <section id="form-container-shop"></section>
                <div class="col-md-4">
                    <div>
                        <img src="assets/images/icons/online_order.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Онлайн услуги</h2>
                        <p>Услегата не отговаря на условията,имаш проблем при заплащането или злоупотребяват с личната ти информация ?</p>
                        <a id="online" class="btn btn-primary" title="Enlace" role="button">Подай сигнал »</a>
                    </div>
                </div>

                <section id="form-container-online"></section>
                <div class="col-md-4">
                    <div>
                        <img src="assets/images/icons/administration.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Административни услуги</h2>
                        <p>Услугата не е спазена в срок,злоупотребено е с личната ти информация или си обслужен некоретно ?</p>
                        <a id="admin" class="btn btn-primary" title="Enlace" role="button">Подай сигнал »</a>
                    </div>
                </div>
                <section id="form-container-admin"></section>
                <div class="col-md-4">
                    <div>
                        <img src="assets/images/icons/media.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Медия</h2></br>
                        <p>Попаднал си на статия,предаване или друг източник съдържащ грешна или фалшива информация ?</p>
                        <a id="media" class="btn btn-primary" title="Enlace" role="button">Подай сигнал »</a>
                    </div>
                </div>
                <section id="form-container-media"></section>
                <div class="col-md-4">
                    <div>
                        <img src="assets/images/icons/other.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Други</h2><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a id="other" class="btn btn-primary" title="Enlace" role="button">Подай сигнал »</a>
                    </div>
                </div>
                <section id="form-container-other"></section>

            </div>
        </div>
        <!--<div class="form-container"></div>-->
    </div>
</header>
<!-- /Header -->

<!--  Foother -->

    <footer id="footer" class="top-space">
        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Контакти</h3>
                        <div class="widget-body">
                            <p>02 875 1094<br>
                                <a href="mailto:#">sayit.report@gmail.com</a><br>
                                <br>
                                София, жк. Младост 1, 1784 София
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Последвай ни</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                <a href=""><i class="fa fa-github fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title">За проекта</h3>
                        <div class="widget-body">
                            <p>Проектът sayIt е част от хакатон инициативата Code4Bulgaria посветена на  решаването на обществените и социалните проблеми в нашата Родина!
                            Събитието е част от проект на Световната банка и се провежда с нейната финансова и организационна подкрепа.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="#">Начало</a> | 
                                <a href="about.html">За нас</a> |
                                <a href="contact.html">Контакти</a> |
                                <b><a href="signup.html">Регистрация</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2015, sayIt. Designed with <3 !
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>
<!-- Footer -->

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/buttons.js"></script>
</body>
</html>