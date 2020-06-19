<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>
	<form action="Auth.php" method="POST">
		<fieldset style="float: center;  height: 250px; width: 100px; font-size: 27px; margin:auto; padding-top: 10px;" >
			<legend>Авторизация</legend>
			Логин:<br/>
			<input type="text" name="login" style="font-size: 27px;"><br/>
			Пароль:<br/>
			<input type="password" name="password" style="font-size: 27px;"><br/>
			<span style="font-size: 12px; color: red;"><?php if(isset($_COOKIE['missAuth']))echo $_COOKIE['missAuth'];?></span>
			<p>
				<input type="submit" value="Войти"  style="font-size: 27px; margin-left: 20px;">
				<button style="font-size: 27px; margin-left: 20px;"><a style="color: black; text-decoration: none;" href="Registration.php">Регистрация</a></button>
			</p>

		</fieldset>
	</form>
</body>
</html>