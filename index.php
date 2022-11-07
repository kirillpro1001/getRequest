<?php 
$login = !empty($_GET['login'])?$_GET['login']:'Логин не передан';
$password = !empty($_GET['password'])?$_GET['password']: 'Пароль не передан';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET REQUEST</title>
</head>
<body>
	<p>Переданный логин: </p>
	<?= $login ?>
	<br>
	<p>Переданный пароль: </p>
	<?= $password?> 
</body>
</html>