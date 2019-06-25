<?php 
$x=$_POST['a'];
$y=$_POST['b'];

mysql_connect("localhost","root","");
mysql_select_db("sbjit");

$query="DELETE FROM student WHERE name='$x' AND password='$y'";
mysql_query($query);

echo"<center>";
echo"<br><br><br><br><br><br>";
echo " User Deleted Sucessfully !!";
echo"<br><br>";
echo"<a href='main.php'>RETURN TO MAIN PAGE</a>";
echo"<br><br>";
echo"</center>";



?>