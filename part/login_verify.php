<?php
if (isset($_SESSION["login"])){function result255 ($ress, $login, $password){
while (($row = $ress->fetch_assoc()) != false){
if ($login == $row["login"]) {
if($password == $row["password"]) {
     include ("user.php");
}
else { session_destroy();	include ("part/login.php");
}}}}
$mysqli = new mysqli("localhost", "root", "", "s_t_e_g");
$loginuser = $_SESSION["login"];
$passworduser = $_SESSION["password"];
$result = $mysqli-> query("SELECT * FROM `users` ");
result255 ($result, $loginuser, $passworduser);
$mysqli-> close ();
	}
	else include ("login.php");


 ?>