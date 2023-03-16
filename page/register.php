
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
     <title>Страница регистрация</title>
</head>

<body>
Заполните форму:

<div class="Page">
<form method="POST" action="/account/register">
<br><input type="text" name="login" placeholder="Логин">
<br><input type="email" name="email" placeholder="E-Mail" required>
<br><input type="password" name="password" placeholder="Пароль" required>
<br><input type="text" name="name" placeholder="Имя" required>
<br><select size="1" name="country"><option value="0">Не скажу</option><option value="1">Украина</option><option value="2">Россия</option><option value="3">США</option><option value="4">Канада</option></select>
<br><input type="file" name="avatar">
<br><br><input type="submit" name="enter" value="Регистрация"> <input type="reset" value="Очистить">
</form>
</div>
</div>