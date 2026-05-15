<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation in PHP</title>
</head>
<body>

<h2>PHP String Operations</h2>

<?php

$string1 = "Hello";
$string2 = "World";

echo "this is original string 1:".$string1. "<br>";
echo "this is original string 2:".$string2. "<br>";

echo"String length:". strlen($string1)."<br>";
echo"Reverse String". strrev($string1)."<br>";
echo"Substringing".substr($string1,1,3)."<br>";
echo"Uppercase".strtoupper($string1)."<br>";
echo"Lowercase".strtolower($string2)."<br>";
echo"concatination:".$string1."".$string2."<br>";
?>
</body>
</html>