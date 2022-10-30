<html>
<head>
 <link rel="stylesheet" href="menu.css" type="text/css">
 <title>Szállások</title>
</head>
<body>
  <body background="hatterkep.jpg">
    <img style="box-shadow: 0px 0px 20px black;" src="budapest.jpg" align="left" width="380" height="70" >
<table align="right">
   
  <tr id="fejlec">
   <th>
    <ul id="menu">
	    <li><a href="Kezdolap.html">Kezdőlap</a></li>
		<li><a href="Latvanyossagok.html">Látványosságok</a></li>
		<li><a href="Hidak.html">Hidak</a></li>
		<li><a href="Szallasok.php">Szállások</a></li>
		<li><a href="Tudnivalok.html">Tudnivalók</a></li>
		<li><a href="Foglalasaim.php">Foglalásaim</a></li>
	</ul>
   </th>
  </tr>
</table>

<br><br><br><center><br>
<h2>Ha Budapestre jössz, mi segítünk neked szállást találni. A következő hotelekben lehet innen is szobát foglalni.</h2>
<form action="Ikerulet.php" method="POST">
<?php
$con=mysql_connect("localhost", "root","");
if(!$con){
	die('could not connect:' . mysql_error());
}
mysql_select_db("szallasok",$con);
$result=mysql_query("SELECT * FROM szallasok");
echo "<table id='tablazat' border=1>
   <tr>
    <th>Kerület</th>
	<th>Hotel neve</th>
	<th>Csillagok száma</th>
	<th>Ár</th>
</tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td><center>" . "<input type=". "submit"." name=" . "kerulet" . " value=".$row['Kerulet'] . ">"	. "<a href=" . "Ikerulet.php" . ">" . "</td>" . "</input>" . "</a></center>";
	echo "<td><center>"  . "<a href=" . "Hotelek.html" . ">".$row['Hotel neve'] . "</td>"  . "</a></center>";
	echo "<td><center>" . $row['Csillagok szama'] . "</td></center>";
	echo "<td><center>" . $row['Ara'] ." Ft". "</td></center>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</form>
<form action="Hotelek.html" method="POST"  >
 <input type="submit" name="go" value="Foglalás" id="gomb">
 </form>
<form action="Tudnivalok.html" method="POST">
 <input type="submit" name="go" value="Tovább" id="gomb">
 </form>
</center>
 </body>
</html>