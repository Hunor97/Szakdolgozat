<html>
<head>
 <link rel="stylesheet" href="menu.css" type="text/css">
 <title>Szállások</title>
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

<br><br><br><br><center><br><br><br>
<?php
$con=mysql_connect("localhost", "root","");
if(!$con){
	die('could not connect:' . mysql_error());
}
$submitbutton = $_POST['kerulet'];
mysql_select_db("szallasok",$con);
$result=mysql_query("SELECT * FROM szallasok WHERE Kerulet=$submitbutton");
echo "<table id=tablazat border=1>
   <tr>
    <th>Kerület</th>
	<th>Hotel neve</th>
	<th>Csillagok száma</th>
	<th>Ár</th>
</tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td><center>" . $row['Kerulet'] . "</center></td>";
	echo "<td><center>"  . "<a href=" . "Hotelek.html" . ">".$row['Hotel neve'] . "</td>"  . "</a></center>";
	echo "<td><center>" . $row['Csillagok szama'] . "</td></center>";
	echo "<td><center>" . $row['Ara'] ." Ft". "</td></center>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
<br><br>
<form action="Szallasok.php" method="POST" align="center" >
 <input type="submit" name="go" value="Vissza" id="gomb">
 </form>
<form action="Tudnivalok.html" method="POST" align="center" >
 <input type="submit" name="go" value="Tovább" id="gomb">
 </form>
 </center>
 </body>
</html>