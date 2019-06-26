
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- for icons font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 


$m=$_POST['a'];
$o=$_POST['b'];
session_start();


mysql_connect("localhost","root","");
mysql_select_db("sbjit");
$query="SELECT * FROM student WHERE  name='$m' AND password='$o'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

$query1="SELECT * FROM admin WHERE  name='$m' AND password='$o'";
$result1=mysql_query($query1);
$row1=mysql_num_rows($result1);

if($row1!=0)
{
$query="SELECT * FROM student" ;
$result1=mysql_query($query);
echo"<br><br><br>";
echo"<div class='container-fluid '>";
echo"<h1 class='text-center'>ALL STUDENT DETAILS </h1>";
echo"<br><br>";
echo"<div class='table-responsive-md'>";
echo "<table class='table table-bordered border '>";
echo"<thead>";
echo "<tr>";
echo "<th> &nbsp uid &nbsp</th>";
echo "<th> &nbsp name &nbsp</th>";
echo "<th> &nbsp email &nbsp</th>";
echo "<th> &nbsp phone &nbsp</th>";
echo "<th> &nbsp password &nbsp</th>";
echo "<th> &nbsp sex &nbsp</th>";
echo "<th> &nbsp college name &nbsp</th>";
echo "<th> &nbsp year &nbsp</th>";
echo "<th> &nbsp payment &nbsp</th>";
echo "<th> &nbsp confirmation &nbsp</th>";
echo "</tr>";
echo"<thead>";
while($row=mysql_fetch_array($result1))
{

echo"<tbody>";
echo "<tr>";
echo "<td>&nbsp$row[0]&nbsp</td>";
echo "<td>&nbsp$row[1]&nbsp</td>";
echo "<td>&nbsp $row[2] &nbsp</td>";
echo "<td> &nbsp $row[3] &nbsp</td>";
echo "<td> &nbsp $row[4] &nbsp</td>";
echo "<td> &nbsp $row[5] &nbsp</td>";
echo "<td> &nbsp $row[6] &nbsp</td>";
echo "<td> &nbsp $row[7] &nbsp</td>";
echo "<td> &nbsp $row[8] &nbsp</td>";
echo "<td> &nbsp $row[9] &nbsp <a href='upform.php '><br> CONFIRM SEAT</a></td>";

}
echo"</tbody>";
echo "</tr>";
echo "</table>";
echo "</div>";

echo"<br><br>";
echo"<h4 class='text-center'><a href='logout.php'>LOGOUT</a> </h4>";
echo"<br><br>";
echo"</div>";
}

else
{
if($row==0)
{
    echo "<br><br>";
    echo "<br><br>";
    echo "<br><br>";
    echo"<center>";
echo"<h4><a href='main.php'>YOU ARE NOT A USER <br>REGISTER FIRST</a></h4>";
}
else
{
$result2=mysql_query("SELECT confirmation FROM student WHERE name='$m' AND password='$o'");
$row2=mysql_fetch_array($result2);
if($row2[0]==1)
{
    
    echo"<br>";
    $query3="SELECT * FROM student WHERE  name='$m' AND password='$o'";
    $result4=mysql_query($query3);
   echo"<div class='container '>";
   echo "<br><br>";
   echo"<h2 class='text-center'>WELCOME TO YOUR PROFILE</h2>";
   echo "<br><br>";
  
while($row4=mysql_fetch_array($result4))
{
echo "<h3 class='text-center'>YOUR DETAILS ARE :-</h3>";
echo "<br><br>";
echo"UNIQUE ID:-";
echo "$row4[0]";
echo"<br><br>";
echo"USER NAME:-";
echo "$row4[1]";
echo"<br><br>";
echo"EMAIL:-";
echo "$row4[2]";
echo"<br><br>";
echo"PHONE:-";
echo "$row4[3]";
echo"<br><br>";
echo"PASSWORD:-";
echo "$row4[4]";
echo"<br><br>";
echo"SEX:-";
echo "$row4[5]";
echo"<br><br>";
echo"COLLEGE NAME :-";
echo "$row4[6]";
echo"<br><br>";
echo"YEAR :-";
echo "$row4[7]";
echo"<br><br>";

}
echo"<br>";
echo"<h4 class='text-center'><a href='logout.php'>LOGOUT</a></h4>";
echo"</div>";
}
else
{
echo"<center>";
echo"<br><br><br><br><br><br>";
echo"YOU ARE NOT CONFIRMED ...<br> PLEASE COMPLETE YOUR PAYMENT TO CONFIRM";
echo"<br><br>";
echo"<a href='main.php'>GO TO MAIN PAGE</a>";
echo"</center>";
}
}
}



?>