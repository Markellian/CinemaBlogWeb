<!DOCTYPE html>
<html>
<head>
	<title>Страница пользователя</title>
</head>
<body>
	<h1>Это моя страничка!</h1>
	<p>
		<?php
			if (isset($_COOKIE['UserLogin']) && isset($_COOKIE['UserRole'])) echo "Я ".$_COOKIE['UserLogin'].", и я ";
			if ($_COOKIE['UserRole'] == 1) echo "администратор";
			else echo "пользователь";			
		?>
	</p>
	<p>
		<form action="GoOut.php" method="POST">
			<input type="submit" value="Выйти">
		</form>
	</p>
</body>
</html>