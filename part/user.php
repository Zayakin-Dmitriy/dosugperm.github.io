<?php

echo "Здравствуй ".$_SESSION["name"];
if (isset($_POST["exit"]))
{	session_destroy();
	echo "<script>window.location.href='index.php'</script>";}

 ?>
 <form method="post">
 <input type="submit" name="exit" value="Выйти"/>
 </form>