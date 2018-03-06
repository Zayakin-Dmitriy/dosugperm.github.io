<!DOCTYPE HTML>
<html>
<head>
<?php
if(isset($_POST["indo"])){
function result ($ress, $login, $password){
global $vvv;
global $logins;
global $passwords;
$vvv = false;
while (($row = $ress->fetch_assoc()) != false){
if ($login == $row["login"]) {
if($password == $row["password"]) {
$_SESSION["login"]=$row["login"];
$_SESSION["id"]=$row["id"];
$_SESSION["password"]=$row["password"];
$_SESSION["name"] =$row["neme"];
$_SESSION["familia"] =$row["familia"];
echo "<script>window.location.href='index.php'</script>";
}}}
return $logins;
return $passwords;}
$mysqli = new mysqli("localhost", "root", "", "s_t_e_g");
$loginuser = htmlspecialchars($_POST["login"]);
$passworduser = htmlspecialchars($_POST["password"]);
if (mysqli_connect_errno()) {
printf("Не удалось подключиться: %s\n", mysqli_connect_error());
exit();
}
$mysqli-> query ("SET NAMES 'utf8'");
$result = $mysqli-> query("SELECT * FROM `users` ");
result ($result, $loginuser, $passworduser);
$mysqli-> close ();
}
?>
<meta http-equiv="content-type" content="text/html" />
<title>Регистрация</title>
</head>
<body>
<div class="header">
<h1>Войдите</h1>
</div><div class="blocktest">
<form action="" method="post" name="form_reg">
<label>Логин;</label>
<input class="" type="text" name="login"/><br /><br />
<label>Пароль;</label>
<input class="" type="password" name="password"/><br /><br />
<input type="submit" name="indo" class="" value="Войти"/>
<a href="part/registration.php">Регистрация</a>
</form>

</div>
</body>
</html>