<html>
<body>

<?php

$num = 10;
echo "Multiplication Table to $num \n";
for ($i = 1; $i <= $num; $i++) {
    echo "$i \t";
}
echo "\n";

for ($i = 1; $i <= $num; $i++) {
    for ($j = 1; $j <= $num; $j++) {
        echo  ($i * $j) . "\t";
}
echo "\n";
}
?>

</body>
</html> 
