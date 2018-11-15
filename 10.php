<html>
<head>
<style>
table,td,th{
border:1px solid blackl;
width:33%;
text_align:center;
border-collapse:collapse;
background-color:lightpink;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Neela";
$a = [];
$conn = mysqli_connect($servername,$username, $password, $dbname);
if($conn->connect_error)
die("connection failed:" .$conn->connect_error);
$sql = "SELECT *FROM Student";
$result = $conn->query($sql);
echo "<br>";
echo "<center>BEFORE SORTING </center>";
echo "<center>";
echo "<table border = '2'>";
echo "<tr>";
echo "<th>USN</th> <th>NAME</th> <th>SEM</th></tr>";
if($result->num_rows>0)
{
while($rows = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" .$rows["USN"]. "</td>";
echo "<td>" .$rows["Name"]. "</td>";
echo "<td>" .$rows["Sem"]. "</td>";
array_push($a,$rows["USN"]);
}
}
else
echo "TAble is empty";
echo "</center>";
echo "</table>";
$n = count($a);
$b=$a;
for($i=0;$i<($n-1);$i++)
{
$pos = $i;
for($j=$i+1;$j<$n;$j++)
{
if($a[$pos]>$a[$j])
$pos = $j;
}
if($pos!=$i)
{
$temp = $a[$i];
$a[$i] = $a[$pos];
$a[$pos] = $temp;
}
}
$c=[];
$d=[];
$result = $conn->query($sql);
if($result->num_rows>0)
{
while($rows=$result->fetch_assoc())
{
for($i=0;$i<$n;$i++)
{
if($rows["USN"]==$a[$i])
{
$c[$i] = $rows["Name"];
$d[$i]=$rows["Sem"];
}
}
}
}
echo "<br>";

echo "<center>AFTER SORTING</center>";
echo "<center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th> <th>Name</th> <th>Sem</th></tr>";
for($i=0;$i<$n;$i++)
{
echo "<tr>";
echo "<td>" .$a[$i]. "</td>";
echo "<td>" .$c[$i]. "</td>";
echo "<td>" .$d[$i]. "</td>";
echo "<tr>";
}
echo "</table>";
echo "</center>";
$conn->close();
?>
</body>
</html>

