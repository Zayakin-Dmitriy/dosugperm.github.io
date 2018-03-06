<!DOCTYPE HTML>
<html>
<head>
<?php
if(isset($_POST["indo"])){
$mysqli = new mysqli("localhost", "root", "", "s_t_e_g");
if (mysqli_connect_errno()) {
printf("Не удалось подключиться: %s\n", mysqli_connect_error());
exit();
}
$login = htmlspecialchars ($_POST["login"]);
$password = htmlspecialchars ($_POST["password"]);
$mail = htmlspecialchars ($_POST["mail"]);
$age = htmlspecialchars ($_POST["age"]);
$familia = htmlspecialchars ($_POST["you_familia"]);
$name = htmlspecialchars ($_POST["you_name"]);
if ("$login" <> "") {
$mysqli-> query ("SET NAMES 'utf8'");
$mysqli-> query("INSERT INTO `s_t_e_g`.`users` (`id`, `login`, `password`, `neme`, `familia`, `mail`, `age`, `confamail`) VALUES (NULL, '$login', '$password', '$name', '$familia', '$mail', '$age', '0');");
$mysqli-> close ();
}}
?>
<meta http-equiv="content-type" content="text/html" />
<meta name="author" content="TSRh TeaM" />
<link rel="stylesheet" type="text/css" href="style1_lukanin.css"/>
<title>Регистрация</title>
</head>

<body>
<div class="header">
<h1 align=center>Регистрация</h1>
</div><div class="blocktest" align=center>
<form action="" method="post" name="form_reg">
<label >Логин</label><br />
<input class="" type="text" name="login"/><br /><br />
<label >Пароль</label><br />
<input class="" type="password" name="password"/><br /><br />
<label >Ваше Имя</label><br />
<input class="" type="text" name="you_name"/><br /><br />
<label >Ваша Фамилия</label><br />
<input class="" type="text" name="you_familia"/><br /><br />
<label >Эл.Почта</label><br />
<input class="" type="text" name="mail"/><br /><br />
<label>Вам есть 18 лет ?</label><br /><br />
<select>
   <option>не назначено</option>
   <option>да</option>
   <option>нет</option>
</select name="age"><br /><br />
<input type="submit" name="indo" class="" value="Готово"/>
</form>
</div>

</html>
</body>