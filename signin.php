<?php
   session_start();
$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "sayit"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the email that you created, or were given, to access your database
$dbpass = ""; // the password that you created, or were given, to access your database
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['email']))
{
    $response = 'You are already logged in';
}
elseif(!empty($_POST['email']) && !empty($_POST['password']))
{

    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    echo $password;
    $checklogin = mysql_query("SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'");
    echo mysql_num_rows($checklogin); 
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['email'];
         
        $_SESSION['email'] = $email;
        $_SESSION['LoggedIn'] = 1;
         
        $response = 'You are now logged in';

       // echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        $response = "<p>Невалиден имeйл или парола</a>.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Влез</title>

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
</head>

<body>
<?php
require_once 'header.php';
login_navbar($_SESSION);
?>

    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Начало</a></li>
            <li class="active">Потребителски достъп</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Влез</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Влез в профила си</h3>
                            <p class="text-center text-muted"><a href="signup.php">Регистрирай се </a> ако все още нямаш профил. Регистрацията е с цел да улесни изпращането на сигнали. Личната Ви информация, ще бъде попълвана автоматично.</p>
                            <hr>
                            
                            <form action="signin.php" method="post">
                                <div class="top-margin">
                                    <label>Имейл <span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="top-margin">
                                    <label>Парола <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                </br>
                                <?php
                                if (isset($response)) {
                                    echo "<div class=\"alert alert-danger alert-dismissable\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button> " . $response . "</div>";
                                }


                                ?>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <b><a href="">Забравена парола?</a></b>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <input class="btn btn-action" type="submit" value="Влез" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
    
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
                                Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
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
</body>
</html>
