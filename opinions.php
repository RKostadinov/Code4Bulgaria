<?php
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>sayIt</title>

	<link rel="shortcut icon" href="assets/images/logo.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
                    <li><a href="#about_button">За нас</a></li>
                    <li><a href="#footer">Контакти</a></li>'.
    $menu
    .'</ul>
            </div>
        </div>
    </div> ';
?>

<header id="head" class="secondary"></header>
	<!-- Intro -->
<!--	<div class="container text-center about-app">-->
<!--		<br> <br>-->
<!--		-->
<!--	</div>-->
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space" id="about_button">
		<div class="container">
			<div class="searchBox">
			<form method="post" action="#">
				<input type="text" name="search" class="search" placeholder="Търси в категория.." />
			</form>
		</div>	
			<div class="row height">
			</div> <!-- /row  -->
		
		</div>
	</div>

	<!-- Footer -->
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


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/buttons.js"></script>
	<script src="assets/js/scroll.js"></script>
</body>
</html>