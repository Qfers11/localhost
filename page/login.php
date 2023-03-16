<?php
if ($_POST['enter']) {
echo 'Запрос на логин...';
exit;
}
?>
<?php Head('Главная странца')?>
<div>
    <a href="/">Главная</div></a>
    <a href="/register">Регистарция</div></a>
    <a href="/login">Вход</div></a>
</div>

<link rel="stylesheet" href=".htaccess">

<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width-device-width, initial-scale=1.0">
     <title>Страница входа</title>
</head>

<body>
Заполните форму:

<form method="POST" action="/login">
<br><input type="text"  name="login" required>- Логин</br> 
<br><input type="password"  name="password" required>- Пароль</br> 
<input type="submit" name="enter" value="Вход"><input type="reset" value="Очистить">
</form>
</body>

</html>
