<?php
for($i=1;$i<=10;$i+=1){
    echo $i."-";
}

$total=0;
for($z=0;$z<=30;$z++){
    $total+=$z;
}
echo "<br> total as a number:{$total}<br>";


for($row=0;$row<5;$row++){
    for($col=0;$col<5;$col++){
        if($row==1&&$col>=3){
            echo"B";
        }elseif($row==2&&$col>=2){
            echo"C";
        }elseif($row==3&&$col>=1){
            echo"D";
        }elseif($row==4){
            echo"E";
        }else{
            echo"A";
        }
    }
    echo "<br>";
}

for($row=0;$row<5;$row++){
    for($col=0;$col<5;$col++){
        if($row==1&&$col>=3){
            echo "2";
        }elseif($row==2&&$col>=2){
            echo "3";
        }elseif($row==3&&$col>=1){
            echo "4";
        }elseif($row==4){
            echo "5";
        }else{
            echo"1";
        }
    }
    echo "<br>";
}
$c=5;
for($row=0;$row<$c;$row++){
    for($col=0;$col<$c;$col++){
        if($row==$col){
            echo($row+1);
        }else{
            echo "0";
        }
          
    }
    echo "<br>";
}


$num3=5;
$factoeaial =1;
for($i=$num3;$i>=1;$i--){
    $factoeaial*=$i;
}
echo "the factoeaial of $num3 is $factoeaial";


echo "<table border='1' cellpadding='5' cellspacing='0'>"; 
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>"; 
    for ($k = 1; $k <=5; $k++) {
        echo "<td>$i × $k =" . $i * $k."</td>"; 
    }
    echo "</tr>";
}
echo "</table>";

?>