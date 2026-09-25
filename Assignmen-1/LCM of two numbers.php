<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a = 8;
$b = 12;

if ($a > $b) {
    $start = $a;
} else {
    $start = $b;
}

for ($i = $start; ; $i++) {

    if ($i % $a == 0 && $i % $b == 0) {
        $lcm = $i;
    }
}

echo "LCM of $a and $b = $lcm";

?>
</body>
</html>