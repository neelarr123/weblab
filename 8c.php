<?php
$a1 = array(
array(1,2),
array(3,2)
);

$a2 = array(
array(1,2),
array(3,5)
);
$result = array();
for($i=0; $i<=1; $i++)
{
for($j=0; $j<=1; $j++)
{
$result[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
}
}

echo "<p> Matrix one</p>";
echo "<pre/>";print_r($a1);
echo "<p> Matrix two</p>";
echo "<pre/>";print_r($a2);
echo "<p> Matrix Addition</p>";
echo "<pre/>";print_r($result);
?>
