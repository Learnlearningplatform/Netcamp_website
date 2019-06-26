<?php 
$u=$_POST['a'];
$w=1;




mysql_connect("localhost","root","");
mysql_select_db("sbjit");


$query1="UPDATE student set confirmation='$w' WHERE uid='$u'";
mysql_query($query1);
echo"<br><br>";
echo"<center>";
echo "<h1> Data update sucess !!</h1>";
echo"<br><br>";
echo"<a href='upform.php'>UPDATE ANOTHER USER</a>";
echo"<br><br>";
echo"<a href='main.php'>RETURN TO HOME PAGE</a>";
echo"<br><br>";
echo"<a href='logout.php'>LOGOUT</a>";


?>