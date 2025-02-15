<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <uL>
    <?php
$colors = array('white', 'green', 'red');
foreach($colors as $color){
    echo "<il>$color<li> ";
}


?>
    </uL>
</body>
</html>


<?php
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities);
foreach($cities as $key =>$value){
    echo"The capital of {$key} is {$value} <br>";
}

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
$values = array_values($color);
foreach($values as $value){
    echo $value ."<br>";
}

$array= array(1, 2, 3, 4, 5);
$Location= 3;
$NewItem= '$';
array_splice($array,$Location,0,$NewItem);
foreach($array as $arrays){
    echo  $arrays ;
}

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $key => $value){
    echo " <br>{$key} = {$value}";
}

$temperature=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73];
$sum=array_sum($temperature);
$count=count($temperature);
$avg=$sum/$count;
sort($temperature);
$highest=array_slice($temperature,0,5);
$lowest=array_slice($temperature,-5);
echo " <br> Average Temperature is:". number_format($avg,1)."<br>";
echo"List of seven lowest temperatures:" .implode(",",$lowest) ."<br>";
echo"List of seven highest temperatures:" .implode(",",$highest) ."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        print_r(array_merge($array1,$array2));
        ?>
    </pre>
    <pre>
    <?php
     $colors = array("red","blue", "white","yellow");
     $color=implode(",",$colors);
     $color1=strtoupper($color);
     $color2=explode(",",$color1);
      print_r($color2);

?>
    </pre>
</body>
</html>





