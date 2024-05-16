<?php
echo "inside login php";echo "<br>";
$username=$_GET["username"];
$password=$_GET["password"];
if($username == "adamya" && $password == "1234"){
setCookie("Usercookie","qwertyuiop");
header("Location:check.php");
	echo "welcome user";
}else{
	echo "try gain";
}
?>
