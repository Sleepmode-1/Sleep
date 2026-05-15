<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Example</title>
</head>
<body>

<h2>Array Values in PHP</h2>

<?php

/* Creating an array */
$colors = array("Red", "Blue", "Green", "Yellow");

/* Display using loop */
echo "<b>Displaying Array using foreach loop:</b><br>";

foreach($colors as $value)
{
    echo $value . "<br>";
}

/* Array Functions */
echo "<br><b>Total Elements:</b> " . count($colors) . "<br>";

echo "<b>Array in Reverse Order:</b><br>";

$reverseArray = array_reverse($colors);

foreach($reverseArray as $value)
{
    echo $value . "<br>";
}

?>

</body>
</html>