<?php
$login = !empty($_GET['login'])?$_GET['login']:'Логин не передан';
$password = !empty($_GET['password'])?$_GET['password']:'Пароль не передан';

function isAuthorized () {
	if ($_GET['login'] == 'admin' && $_GET['password'] == '12345') {
		return true;
	}
	else  {
		return false;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page result authorization</title>
</head>
<body>
	<? isAuthorized()?'Авторизация прошла успешно':'Ошибка при авторизации';
	 ?>
</body>
</html>