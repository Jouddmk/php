<?php
$year = 2013; 
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "This year is a leap year <br>"; 
} else {
    echo "This year is not a leap year <br>"; 
}

$temperature =27;
echo ($temperature  < 20)? "we are in winter" : "It is summertime! <br>";


$firstInteger =2; 
$secondInteger=2;
if ($firstInteger == $secondInteger) {
    $sum = ($firstInteger + $secondInteger) * 3;  
    echo "($firstInteger + $secondInteger) * 3 = " . $sum . "<br>";
} else {
    $sum = $firstInteger + $secondInteger;  
    echo "Sum = " . $sum . "<br>";
}

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo   $i . ", "  ;  
    }
}

$num2 = 11; 
$num3 = 20;
$numbers = range($num2, $num3);
shuffle($numbers);
$Numbers1 = array_slice($numbers, 0, 10);
echo "<br>". implode(" ", $Numbers1);


?>