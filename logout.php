<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['LoggedIn']);
session_destroy();
header('Location: index.php');