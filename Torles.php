<html>
<head>
<meta http-equiv="refresh" content="0.1; url=foglalasaim.php" />
</head>
<body background="hatterkep.jpg">
<?php
$con=mysql_connect("localhost", "root", "");
 if(!$con){
	 die('cloude not connect:' . mysql_error());
 }
mysql_select_db("szallasok",$con);
$result=mysql_query("DELETE FROM `foglalasok`");
mysql_close($con);
?>
<center>
<h1>Törlés végrehajtva!</h1>
</body>
</html>