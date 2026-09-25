<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
// $a = 15;
// $b = 27;
// $c = 10;

// // Assignment1
// if ($a >= $b && $a >= $c) {
//     $greatest = $a;
// } elseif ($b >= $a && $b >= $c) {
//     $greatest = $b;
// } else {
//     $greatest = $c;
// }

// if ($a <= $b && $a <= $c) {
//     $smallest = $a;
// } elseif ($b <= $a && $b <= $c) {
//     $smallest = $b;
// } else {
//     $smallest = $c;
// }

// echo "Numbers: $a, $b, $c\n";
// echo "greatest: $greatest\n";
// echo "smallest: $smallest\n";

  
//     ##$ Assignment2 
// $number = 15; 

// if ($number % 3 == 0 && $number % 5 == 0) {
//     echo "$number divide by(3 iyo 5).";
// } elseif ($number % 3 == 0) {
//     echo "$number divide 3.";
// } elseif ($number % 5 == 0) {
//     echo "$number divide by 5.";
// } else {
//     echo "$number divide by 3 and 5 .";
// }
$collection =array();
$collection[] = 3;
$collection[] = "Saafi";

var_dump($collection);

#foreach
foreach($collection as $lists)
    {
  
 echo "$lists";
}


$collection =array();
$collection[] = 3;
$collection[] = "Saafi";
print_r($collection);

$numbers =  array(2,"saa",60,2);
var_dump($numbers);
?>


   
</body>
</html>
