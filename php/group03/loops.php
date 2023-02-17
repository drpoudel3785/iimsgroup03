<?php
/*
1. for
2. while
3. do while
4. foreach
*/

//displaying 1 to 10
echo "<h1>Displaying 1 to 10 on each line</h1>";
for($i=1;$i<=10;$i++){
    echo $i."<br>";
} 
$num=8;

echo "<table border=1 width=300px cellpadding=5 cellspacing=5>";
for($i=1; $i<=10; $i++){
    $mul=$num*$i;
    echo "<tr>";
    echo "<td>$num</td><td>$i</td><td>$mul</td>";
    echo "</tr>";
}
echo "</table>";



?>