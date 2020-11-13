
<?php
	
	if (isset($_GET['msg'])) {
		echo $_GET['msg'];
	}
	echo "string";

?>



<!DOCTYPE html>
<html lang="per">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/style.css">

	<title>صفحه اصلی</title>
</head>
<body>
	<button id="btn_login" onclick="btn_login()">LOGIN</button>
	<div id="login" >
		<span>login</span>
		<br>
		<form name="login_form" onsubmit="return login()" action="../controllers/login.php" method="post">
			<span>username : </span>
			<input type="text" id="login_username" name="username" placeholder="username">
			<div id="alert_username"></div>
			<br>
			<span>password : </span>
			<input type="password" id="login_password" name="password" placeholder="password">
			<input type="checkbox" onclick="look_l_password()" name="show_password" id="show_password_l"><span> show password</span>
			<!-- <i class="glyphicon glyphicon-eye-open" onmouseover="lock_password()"></i> -->
			<div id="alert_password"></div>
			<br>
			<!-- <button onclick="login()">login</button> -->
			<input type="submit" name="login" value="login">
		</form>
	</div>
	<hr>
	<button id="btn_register" onclick="btn_register()">REGISTER</button>
	<div id="register">
		<span>register</span>
		<br>
		<form name="register_form" onsubmit="return register()" action="../controllers/login.php" method="post">
			<span>username : </span>
			<input type="text" id="register_username" name="username" placeholder="username">
			<div id="alert_username"></div>
			<br>
			<span>password : </span>
			<input type="password" id="register_password_1" name="password" placeholder="password">
			<br>
			<span>re password : </span>
			<input type="password" id="register_password_2" name="re_password" placeholder="re enter password">
			<input type="checkbox" onclick="look_r_password()" name="show_password" id="show_password_r"><span> show password</span>
			<!-- <i class="glyphicon glyphicon-eye-open" onmouseover="lock_password()"></i> -->
			<div id="alert_password"></div>
			<br>
			<!-- <button onclick="login()">login</button> -->
			<input type="submit" name="register" value="register">
		</form>
		
	</div>
		
	<div class="canvas">
		<canvas id="canvas"></canvas>
	</div>
</body>
<script src="../scripts/login.js"></script>
</html>