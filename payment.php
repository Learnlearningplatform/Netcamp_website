<?php 
$u=$_POST['a'];
$v=$_POST['b'];
$w=$_POST['c'];
$x=$_POST['d'];
$y=$_POST['e'];
$z=$_POST['f'];


mysql_connect("localhost","root","");
mysql_select_db("sbjit");
$query="SELECT * FROM student WHERE name='$u' AND email='$v'";
$result=mysql_query($query);
$row=mysql_num_rows($result);
if($row==0)
{
    echo"<center>";
    echo"<br><br><br><br><br><br>";
   echo"USER DOES NOT ALREADY EXITS";
   echo"<br><br>";
   echo"PLZZ REGISTER YOURSELF";
   echo"<br><br>";
   echo"<a href='main.php'>CLICK HERE TO RETURN TO MAIN PAGE AND LOGIN </a>";
   echo"<br><br>";
   echo"</center>";
}
else
{

    $query1="UPDATE student set payment='$y' WHERE name='$u' AND email='$v'";
     mysql_query($query1);


    $query2="INSERT INTO payment(name,cardno,nameoncard,cvv) VALUE('$u','$w','$x','$z')";
    mysql_query($query2);
    echo"<center>";
    echo"<br><br><br><br><br>";
    echo"PAYMENT SUCCESSFUL !!";
    echo"<br><br>";
    echo"YOU CAN NOW LOGIN FROM MAIN PAGE";
    echo"<br><br>";
    echo"<a href='main.php'>CLICK HERE TO RETURN TO MAIN PAGE</a>";
    echo"<br><br>";
}



?>