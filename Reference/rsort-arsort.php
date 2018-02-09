
<?php

$fruits = array("lemon", "orange", "banana", "apple");
print_r($fruits)."<br> <br> <br>";
echo "rsort: ";
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo " $key = $val \n\r";
}
echo "<br> <br>";

$fruits = array("lemon", "orange", "banana", "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
