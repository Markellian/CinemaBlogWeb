<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<title>Кинотеатр</title>
</head>
<body>
	<h1 style="color: green; text-align: center; font-size: 40px;">Киноблог</h1>
	<div class="nav">
		<a href="Timetable.php">Главная</a>
		
		<?php
			if (isset($_COOKIE['UserLogin'])) {
				echo '<a href="User.php"  style="float: right;">'.$_COOKIE['UserLogin'].'</a>';
			}else{
				echo '<a href="AuthPage.php" style="float: right;">Войти</a>';
			}
		?>
		
	</div>
	<div class="info">
		<?php 
			require("Connection.php");
			$link = mysqli_connect($host, $user, $passwordUser, $database);
			$query = "SELECT * From Posts order by PostID Desc";
			$result = mysqli_query($link, $query);
			if ($result){
				$rows = mysqli_num_rows($result);
				if (isset($_COOKIE['UserRole'])){
						if ($_COOKIE['UserRole'] == 1){
							echo '
							<div style="border: 1px solid; margin: 5px; padding: 1px;">
								<form action="CreatePost.php" method="POST">
									<textarea required name="PostValue" maxlength="255"></textarea>
									<input type="submit" value="Добавить" style="font-size: 11px; float: right;"/>
								</form>
							</div>';
						}
					};
				
				for ($i = 0; $i < $rows; $i++){
					$row = mysqli_fetch_row($result);
					echo '<div style="border: 1px solid; margin: 5px; padding: 1px;">';
					if (isset($_COOKIE['UserRole'])){
						if ($_COOKIE['UserRole'] == 1){
							echo '
							<form action="DeletePost.php" method="POST">
							<input type="hidden" name="PostID" value="'.$row[0].'"/>
							<input type="submit" value="Удалить" style="float: right; font-size: 11px; margin: 5px 8px 0px 0px;"/>
							</form>';
						}
					};
					echo 
					'<p>'.$row[1].'</p>';				
					echo '</div>';
				}
			}
		?>

	</div>
</body>
</body>
</html>