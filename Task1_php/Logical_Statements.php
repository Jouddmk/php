<?php
$firstinteger=10;
$secondinteger=10;
if ($firstinteger + $secondinteger==30){
    echo"true <br>";
}else{
    echo"fales <br>";
}

$number=20;
if ($number % 3==0){
    echo"true <br> ";
}else{
    echo"fales <br>";
}

$number1=50;
if ($number1.round(20,50)){
    echo"true <br>";
}else{
    echo"fales <br>";
}

$number2=[1,5,9];
echo max($number2)."<br>";

$number3=0;
$unit=400;
if($unit<=50){
    $number3=$unit*2.5;
}elseif ($unit<=150){
    $number3=(50*2.5)+(($unit-50)*5);
}elseif ($unit<=250){
    $number3=(50*2.5)+(100*5)+(($unit-150)*6.2);
}else{
    $number3= (50*2.5)+(100*5)+(100*6.2)+(($unit-250)*7.5);
}  
echo" {$number3} JOD/Unit <br>";


?>

