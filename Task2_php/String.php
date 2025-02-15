<?php
$s="Twinkle, twinkle, little star";
$s=explode(" ", $s);
 var_dump($s);

$char ="a";
$next_char=++$char;
if(strlen($next_char)>1){
    $next_char=$next_char[0];
}
echo "<br>". $next_char;

$x = "The brown fox";
$z=explode(" ",$x);
array_splice($z,1,0,"quick");
$y=implode(" ",$z);
echo "<br>". $y;
$a=strtok($y," ");
echo "<br>". $a;

$num=0000657022.24;
$num1 = ltrim($num, '0');
echo "<br>". $num;

$str='The quick brown fox jumps over the lazy dog---';
$str1 = rtrim($str, '-');
echo "<br>". $str1;

$str2='The quick brown fox jumps over the lazy dog';
$str3 = explode(" ", $str2);
$five = array_slice($str3, 0, 5);
$str4=implode(" ",$five);
echo "<br>". $str4;

$numeric='2,543.12';
$numeric1= str_replace(",", "", $numeric);
echo "<br>". $numeric1;









?>