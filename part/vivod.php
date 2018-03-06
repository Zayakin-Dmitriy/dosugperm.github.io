<?php
if (isset($_POST["indo"])) {
function result22 ($ress,$what_is,$besp,$visa,$age,$kakoe ){
while (($row = $ress->fetch_assoc()) != false){
 If ($visa == "nena" or $row["visa"] == $visa){            if ($besp == "nena" or $row["free_nofree"] == $besp){            	if ($age == "nena" or $row["18_est"] == $age){            		if ($kakoe == "nena" or $row["what_is_mer"] == $kakoe){

        echo $row["what_is_it"]."<br />";} }}}}
        }

	$what_is=$_POST["what_is"];
	$besp=$_POST["besp"];
	$visa=$_POST["visa"];
	$age=$_POST["age"];
	$kakoe=$_POST["kakoe"];

	if($besp=="не назначено"){
		$besp="nena";

	}if($visa=="не назначено"){
		$visa="nena";

	}if($age=="не назначено"){
		$age="nena";

	}if($kakoe=="не назначено"){
		$kakoe="nena";
	}


$mysqli = new mysqli("localhost", "root", "", "s_t_e_g");
if (mysqli_connect_errno()) {
printf("Не удалось подключиться: %s\n", mysqli_connect_error());
exit();}
$mysqli-> query("SET NAMES 'utf8'");
$mysqli-> query("SET CHARACTER SET 'utf8'");
$result = $mysqli-> query("SELECT * FROM  `mesta_o`");
result22 ($result,$what_is,$besp,$visa,$age,$kakoe);
$mysqli-> close ();
}
?>


<h1>Выберите категорию</h1>
<form action="" method="post" name="form_reg">

<label>Название</label>
<select name = "what_is">

<option>не назначено</option>
<option>Музей</option>
<option>Кальянная</option>
<option>Кинотеатр</option>
<option>Парк</option>
<option>Кафе</option>


</select>

<br /><br />
<label>Бесплатно</label>
<select name = "besp">

<br /><br />
<option>не назначено</option>
<option>Да</option>
<option>Нет</option>

</select>

<br /><br />
<label>Оплата по карте</label>
<select name = "visa">

<option>не назначено</option>
<option>Возможна</option>
<option>Не Возможна</option>

</select>

<br /><br />
<label>Вам есть 18?</label>
<select name = "age">

<option>не назначено</option>
<option>Да</option>
<option>Нет</option>

</select>

<br /> <br />
<label>Городское/Частное</label>
<select name = "kakoe">

<option>не назначено</option>
<option>Частное</option>
<option>Городское</option>


</select>

<br /><br />
<input type="submit" name="indo" value="Отправить" />
</form>

</div>
</body>
</html>