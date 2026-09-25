<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$count = 1;
while($count <= 12){
    echo "$count times 12 is " . ($count *12)."<br>";
    $count++;
}
$Result = 1;
$n = 5;
do{
    $Result = $n;
    echo "the  value of n is : $n <br>";
  $n--;
} 
while($n>0);
echo $Result;

# nested loop
for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 5; $j++) {
        echo "$i * $j = " . ($i * $j) . "<br>";
    }
}

$collection =array();
$collection[0] = 3;
?>
</body>
</html>