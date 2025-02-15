<?php
$user="joud krasneh";
$user=strtoupper($user);
$user=strtolower($user);
$user=ucfirst($user);
$user=ucwords($user);
echo $user."<br>";

$date='085119';
$num=substr($date,0,2);
$num1=substr($date,2,2);
$num2=substr($date,4,2);
$date_format="$num:$num1:$num2";
echo $date_format ."<br>";

$x="I am a full stack developer at orange coding academy";
$z="Orange";
if (stripos($x,$z)!==false){
    echo"word found! <br>";
}else{
    echo"word not found! <br>";
}

$URL="www.orange.com/index.php";
$URL=basename($URL);
echo $URL."<br>";

$email="info@orange.com";
$email=strstr($email,"@",true);
echo $email ."<br";

$str="info@orange.com";
$str1=substr($str,-3 );
echo $str1 ."<br>";

$passwords='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$passwords_len=9;
$new_passwords='';
for($i=0;$i<$passwords_len;$i++){
    $index=random_int(0,strlen($passwords_len)-1);
    $new_passwords .=$passwords[$index];
}
echo $new_passwords. "<br>";

$sentence="That new trainee is so genius";
$Word="Our";
$new_sentence=str_replace("That",$Word,$sentence);
echo $new_sentence;

?>