<?php
$trans = array(
array(1,2,9),
array(3,4,9),
array(5,6,9)
);

echo "<h3> Matrix </h3>";
for($row = 0; $row < 3; $row++)
{
echo "<br>";
for($col = 0; $col < 3; $col++)
{
echo "".$trans[$row][$col];
}
}

echo "<h3>Transpose of matrix </h3>";
for($row = 0; $row < 3; $row++)
{
echo "<br>";
for($col = 0; $col < 3; $col++)
{
echo "".$trans[$col][$row];
}
}
?>
