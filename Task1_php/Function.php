<?php
function prime($num){
    if ($num < 2) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }
    return true;
}
$Number = 3;

if (prime($Number)) {
    echo "$Number is a prime number <br>";
} else {
    echo "$Number is not a prime number<br>";
}

$x="remove";
echo strrev($x);

$x1 = 12; 
$y= 10;
function swap($a ,$b){
    $d=$a;
    $a=$b;
    $b=$d;
}
swap($x1 ,$y);
echo "<br>{$x1} {$y}";

$e=407;
function Armstrong($n){
      $sum=0;
      $m=$n;
      while($m>0){
        $d=$m%10;
        $sum+=$d**3;
        $m=(int)($m/10);
      }
    return$sum==$sum;
    }
if (Armstrong($e)){
    echo "<br>$e is an Armstrong <br>";
}else{
    "$e is an not Armstrong <br>";
}

$string="Eva, can I see bees in a cave?";
function  palindrome ($ss){
    $cleanedStr = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $ss));
    $reversedStr = strrev($cleanedStr);
    return $cleanedStr === $reversedStr;
}
if (palindrome($string)) {
    echo " is a palindrome <br>";
} else {
    echo " is not a palindrome <br>";
}

function Duplicates($arr) {
    return array_values(array_unique($arr));
}
$array1 = array(2, 4, 7, 4, 8, 4);
$result = Duplicates($array1);
echo implode(", ", $result);

?>











