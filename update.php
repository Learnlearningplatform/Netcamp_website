<?php 
$u=$_POST['a'];
$v=$_POST['b'];
$w=$_POST['c'];



mysql_connect("localhost","root","");
mysql_select_db("sbjit");
$query="SELECT * FROM student WHERE name='$u' AND email='$v'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if($row==0)
{
 echo"<center>";
echo"<br><br><br><br><br>";
echo"USER NOT FOUND..";
echo"<br><br>";
echo"<a href='main.php'>RETURN TO MAIN PAGE</a>";
echo"<br><br>";
echo"</center>";
}
else
{
$query1="UPDATE student set password='$w' WHERE name='$u' AND email='$v'";
mysql_query($query1);
echo"<center>";
echo"<br><br><br><br><br><br>";
echo " Data update sucess !!";
echo"<br><br>";
echo"<a href='main.php'>RETURN TO MAIN PAGE</a>";
echo"<br><br>";
echo"</center>";
}
?>