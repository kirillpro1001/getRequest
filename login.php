

<?php
$login = !empty($_GET['login'])?$_GET['login']:'Логин не передан';
$password = !empty($_GET['password'])?$_GET['password']:'Пароль не передан';

if ($login === 'admin' && $password === '12345') {
	$isAuthorized = true;
	}
	else  {
	 $isAuthorized = false;
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
	<?= $isAuthorized ? "Авторизация прошла успешно" : "Ошибка авторизации";
	 ?>
</body>
</html>