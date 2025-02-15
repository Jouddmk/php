<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="post">
     <label>first_number</label>
     <input type="number" name="num1"><br><br>
     <label>second_number</label>
     <input type="number" name="num2"><br><br>
     <input type="submit" name="Addition" value="+"> 
     <input type="submit" name="Subtraction" value="-"> 
     <input type="submit" name="Division" value="/"> 
     <input type="submit" name="Multiplication" value="*"> 
    </form>
</body>
</html>

<?php
if (isset($_POST['Addition'])){
    echo $_POST['num1']+$_POST['num2']."<br>";
}elseif (isset($_POST['Subtraction'])){
    echo $_POST['num1']-$_POST['num2']."<br>";
}elseif (isset($_POST['Division'])){
    echo $_POST['num1']/$_POST['num2']."<br>";
}else{
    echo $_POST['num1']*$_POST['num2'] ."<br>";
    
}

$age=15;
if($age>=18){
    echo" is eligible to vote"."<br>";
}else{
    echo" is no eligible to vote"."<br>";
}

$number=-60;
if($number>0){
    echo"positive <br>";
}elseif($number==0){
    echo"zero <br>";
}else{
    echo"negative <br>";
}


$Grade=[60,86,95,63,55,74,79,62,50];
$sum=array_sum($Grade);
$count=count($Grade);
$average=($sum/$count);
echo $average ."<br>";
if($average>=90){
    echo "A <br>";
}elseif($average>=80){
    echo"B <br>";
}elseif($average>=70){
    echo"C <br>";
}elseif($average>=60){
    echo"D <br>";
}else{
    echo "F<br>";
}
    







?>