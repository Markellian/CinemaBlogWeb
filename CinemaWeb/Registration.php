<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
	<form method="POST" action="Register.php">
		<p>
			Логин: <input style="margin-left: 8px;" required maxlength="25" type="text" name="regLogin">
			<span style="color: red;">*<?php echo "$misLog"?></span>
		</p>
		<p>
			Пароль: <input type="password" maxlength="25" placeholder="минимум 6 символов" required name="regPassword">
			<span style="color:red;">*<?php echo "$misPas"?></span>
		</p>
		<p>
			<input type="submit" value="Зарегистрироваться">
		</p>
	</form>
</body>
</html>