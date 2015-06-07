<?php session_start();
require_once 'connectivity-sign-up.php';
if (isset($_POST['submit'])) {
    $response = SignUp();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Регистрация | sayIt</title>

	<link rel="shortcut icon" href="assets/images/logo.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        $("document").ready(function(){
            $(".js-ajax-php-json").submit(function(){
                var data = {
                    "action": "test"
                };
                data = $(this).serialize() + "&" + $.param(data);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "response.php", //Relative or absolute path to response.php file
                    data: data,
                    success: function(data) {
                        $(".the-return").html(
                            "Favorite beverage: " + data["favorite_beverage"] + "<br />Favorite restaurant: " + data["favorite_restaurant"] + "<br />Gender: " + data["gender"] + "<br />JSON: " + data["json"]
                        );

                        alert("Form submitted successfully.\nReturned json: " + data["json"]);
                    }
                });
                return false;
            });
        });
    </script>
</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"><img src="assets/images/label.png" alt="Progressus HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="index.html">Начало</a></li>
                <li><a href="index.html#about_button">За нас</a></li>
                <li><a href="#footer">Контакти</a></li>
                <li><a class="btn" href="signin.html">Влез / Регистрация</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Регистрация</h1>
				</header>
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Регистрирай се сега</h3>
							<p class="text-center text-muted">Ако вече имате съществуващ акаунт - <a href="signin.html">Влезте</a> чрез него. Регистрацията е с цел да улесни изпращането на сигнали. Личната Ви информация, ще бъде попълвана автоматично.</p>
							<hr>
							<form method="post" action="#">
                                <?php
                                    if (isset($response)) {
                                        echo "<div class=\"alert alert-danger alert-dismissable\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                            $response .
                                        </div>";
//                                        echo $response;
                                    }


                                ?>
								<div class="top-margin">
									<label>Първо име <span class="text-danger">*</span></label>
									<input type="text" name="first_name" class="form-control" autocomplete="off">
								</div>
                                <div class="top-margin">
                                    <label>Презиме <span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control" autocomplete="off">
                                </div>
								<div class="top-margin">
									<label>Фамилия <span class="text-danger">*</span></label>
									<input type="text" name="last_name" class="form-control" autocomplete="off">
								</div>
								<div class="top-margin">
									<label>Имейл <span class="text-danger">*</span></label>
									<input type="email" name="email_value" class="form-control" autocomplete="off">
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Парола <span class="text-danger">*</span></label>
										<input type="password" name="pass" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Потвърди парола <span class="text-danger">*</span></label>
										<input type="password" class="form-control" autocomplete="off">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-6">
										<label class="checkbox">
											<input type="checkbox"> 
											Прочетох и съм съгласен с <a href="#">условията за ползване</a>.
										</label>                        
									</div>
									<div class="col-lg-6 text-right">
                                        <!--<button type="submit" class="btn main-btn pull-right">Сигнализирай</button>-->
                                        <input class="btn btn-action" id="button" type="submit" name="submit" value="Регистрирай се">
<!--										<button class="btn btn-action" type="submit" name="submit" >Регистрирай се</button>-->
									</div>
								</div>
							</form>
                            <div id="formResponse" style="display: none;"></div>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->


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
    <script src="assets/js/scroll.js"></script>
</body>
</html>