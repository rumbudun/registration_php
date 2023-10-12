<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Вход</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Имя пользователя</label>
     	<input type="text" name="uname" placeholder="Имя пользователя"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Пароль"><br>

     	<button type="submit">Логин</button>
          <a href="signup.php" class="ca">Создать аккаунт</a>
     </form>
</body>
</html>