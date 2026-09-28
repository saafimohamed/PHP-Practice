<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nums = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
print_r($nums)."<br>";
$total = 0;
foreach($nums as $n)
    $total += $n;
    echo ("<br> Total_nums is:$total<br>");


$evennum=0;
$oddnum=0 ;
foreach($nums as $num){
    if($num %2 ==0){
        $evennum +=$num;
    }else{
        $oddnum += $num;
    } 
}

echo "Even Total: " . $evennum . "<br>";
echo "Odd Total: " . $oddnum ."<br>";

print_r("Max: " . max($nums)) . "<br>";
print_r("min: " . min($nums)) . "<br>";



    ?>
</body>
</html>