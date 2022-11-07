<!--Сейчас если переданы неверные логин или пароль, выводится информация о том что переданы неверные значения

Добавим дополнительное условие, которое будет говорить о том, что пользователь не найден, если переданный логин не ‘admin’. И если пользователь не найден, то нет смысла проверять пароль, и это условие проверяться не будет. Если же логин ‘admin’, но пароль не совпадает, то писать о том, что пароль неверный-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form git request</title>
</head>
<body>
	<form action="login.php" method = "get">
		<label for="login">Логин:</login>
			<input type="text" name="login"> 
		<label for="password">Пароль:</login>
			<input type="password" name="password"> 
		<input type="submit">
	</form>
</body>
</html>