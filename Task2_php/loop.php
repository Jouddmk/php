<?php
$first = 0;
$second = 1;

echo $first . ', ' . $second ;

for ($i = 2; $i < 10; $i++) {
    $next = $first + $second;
    echo  ', ' . $next ;

    $first = $second;
    $second = $next;
}

$n=1;
for ($i = 1; $i <= 5; $i++) {
    
    for ($j = 1; $j <= $i; $j++) {
        echo $n ." " ;
        $n++; 
    }
    echo "<br>"; 
}

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(" ", $n - $i);
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " ";
    }
    echo "<br>";
}

for ($i = $n - 1; $i >= 1; $i--) {
    echo str_repeat(' ', $n - $i);
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . ' ';
    }
    echo "<br>";
}




?>