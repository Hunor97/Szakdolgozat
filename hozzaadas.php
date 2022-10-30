<html>
<head>
 <link rel="stylesheet" href="menu.css" type="text/css">
 <title>Foglalás</title>
</head>
   <body background="hatterkep.jpg">
    <img style="box-shadow: 0px 0px 20px black;" src="budapest.jpg" align="left" width="380" height="70" >
<table align="right">
  <tr id="fejlec">
   <th>
    <ul id="menu">
	    <li><a href="Kezdolap.html">Kezdőlap</a></li>
		<li><a href="Latvanyossagok.html">Látványosságok</a></li>
		<li><a href="Hidak.html">Hídak</a></li>
		<li><a href="Szallasok.php">Szállások</a></li>
		<li><a href="Tudnivalok.html">Tudnivalók</a></li>
		<li><a href="Foglalasaim.php">Foglalásaim</a></li>
	</ul>
   </th>
  </tr>
</table>
<br><br><br><br><br><br><center>
<?php
$con=mysql_connect("localhost", "root", "");
 if(!$con){
	 die('cloude not connect:' . mysql_error());
 }
mysql_select_db("szallasok",$con);

$nev=$_POST['nev'];
$mettol=$_POST['mettol'];
$meddig=$_POST['meddig'];
$szam=$_POST['szam'];
$etel=$_POST['etel'];
$agyak=$_POST['agyak'];
$hotel=$_POST['hotel'];
$result=mysql_query("INSERT INTO `foglalasok`(`Nev`, `mettol`, `meddig`, `Szemelyek szama`,`Etkezes`, `Agyak szama`,`Hotel neve`) VALUES ('$nev','$mettol','$meddig','$szam','$etel', '$agyak','$hotel')");
mysql_close($con);
?>
<h1>A foglalás sikeres volt!</h1><br>
<form action="Hotelek.html" method="POST">
 <input type="submit" name="go" value="Vissza" id="gomb">
 </form>
</center></body>
</html>