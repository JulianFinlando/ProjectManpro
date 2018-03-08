<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charse t="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--bootstrap-->
	<link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="<?php echo base_url("assets/login.css"); ?>" type="text/css">
	<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/js/jquery.js"); ?>"></script>

</head>
<body class="login-img3-body">

<!-- untuk membuat warna overlay pada background image -->	
<div class="overlay">
    <div class="container">
    <h1 class="welcome text-center">Welcome<br></h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Login</h2>
        <hr>

            <!-- form for login -->
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Username</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="Username" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="********" required>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>
</body>
</html>