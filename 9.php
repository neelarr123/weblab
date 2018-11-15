<?php
$allThestates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ', $allThestates);
$i = 0;

foreach($states1 as $state)
{
if(preg_match('/xas$/',($state)))
{
$statesArray[$i] = ($state);
$i=$i+1;
echo "<br> the status that ends in xas:" .$state;
}
}


foreach($states1 as $state)
{
if(preg_match('/^K.*s$/',($state)))
{
$statesArray[$i] = ($state);
$i=$i+1;
echo "<br> the status that begin with K ends in s:" .$state;
}
}

foreach($states1 as $state)
{
if(preg_match('/^M.*s$/',($state)))
{
$statesArray[$i] = ($state);
$i=$i+1;
echo "<br> the status that begin with M and ends in s :" .$state;
}
}

foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
{
$statesArray[$i] = ($state);
$i=$i+1;
echo "<br>  the status that ends in a:" .$state;
}
}

foreach($statesArray as $element=> $value)
{
print("<br>" . $value . "is the element" .$element);
}
?>


