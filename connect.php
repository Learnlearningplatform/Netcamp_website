<?php 
$u=$_POST['a'];
$v=$_POST['b'];
$w=$_POST['c'];
$x=$_POST['d'];
$y=$_POST['e'];
$z=$_POST['f'];
$k=$_POST['g'];



mysql_connect("localhost","root","");
mysql_select_db("sbjit");
$query="SELECT * FROM student WHERE name='$u'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if($row==0)
{
$query1="INSERT INTO student(name,email,phone,password,sex,clgname,year,payment,confirmation) VALUE('$u','$v','$w','$x','$y','$z','$k',0,0)";
mysql_query($query1);
echo"<center>";
echo"<br><br><br><br><br>";
echo"USER SUCESSFULLY REGISTERED";
echo"<br><br>";
echo"YOU CAN NOW LOGIN FROM MAIN PAGE";
echo"<br><br>";
echo"<a href='main.php'>CLICK HERE TO RETURN TO MAIN PAGE</a>";
echo"<br><br>";


}
else
{
 echo"<center>";
 echo"<br><br><br><br><br><br>";
echo"USER ALREADY EXITS ..!<br> PLEASE USE DIFFRENT USERNAME OR LOGIN";
echo"<br><br>";
echo"<a href='main.php'>CLICK HERE TO RETURN TO MAIN PAGE AND LOGIN </a>";
echo"<br><br>";
echo"</center>";

}



?>