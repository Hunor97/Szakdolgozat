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
		<li><a href="Hidak.html">Hidak</a></li>
		<li><a href="Szallasok.php">Szállások</a></li>
		<li><a href="Tudnivalok.html">Tudnivalók</a></li>
		<li><a href="Foglalasaim.php">Foglalásaim</a></li>
	</ul>
   </th>
  </tr>
</table>
<br><br><br><br><br><br><center>
<?php
$con=mysql_connect("localhost", "root","");
if(!$con){
	die('could not connect:' . mysql_error());
}
mysql_select_db("szallasok",$con);
$result=mysql_query("SELECT * FROM `foglalasok`");
if(!mysql_num_rows (  $result ))
{
	echo"<h1>Még nincs foglalásod!</h1>";
	echo"<form action=Hotelek.html method=POST><input type=submit name=go value=Foglalás id=gomb></form>";
}
else{
echo "<table id='tablazat' border=1>
   <tr>
    <th>Név</th>
	<th>Érkezés</th>
	<th>Távozás</th>
	<th>Személyek száma</th>
	<th>Étkezés</th>
	<th>Ágyak száma</th>
	<th>Hotel neve</th>
</tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td><center>" . $row['Nev'] . "</td></center>";
	echo "<td><center>" . $row['mettol'] . "</td></center>";
	echo "<td><center>" . $row['meddig'] . "</td></center>";
	echo "<td><center>" . $row['Szemelyek szama'] . "</td></center>";
	echo "<td><center>" . $row['Etkezes'] . "</td></center>";
	echo "<td><center>" . $row['Agyak szama'] . "</td></center>";
	echo "<td><center>" . $row['Hotel neve'] . "</td></center>";
	echo "</tr>";
}
echo "</table>";
echo"<br><br><form action=Torles.php method=POST><input type=submit name=go value=Törlés id=gomb></form>";}
mysql_close($con);
?>
</center>
</html>