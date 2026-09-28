<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php

$colors = array(
    "Small" => array(
        "Red" => "Small Red",
        "Green" => "Small Green",
        "Blue" => "Small Blue"
    ),

    "Medium" => array(
        "Red" => "Medium Red",
        "Green" => "Medium Green",
        "Blue" => "Medium Blue"
    ),

    "Large" => array(
        "Red" => "Large Red",
        "Green" => "Large Green",
        "Blue" => "Large Blue"
    )
);

echo "<table border='1' cellpadding='5'>";

echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";

foreach ($colors as $row => $cols) {
    echo "<tr>";
    echo "<td><b>$row</b></td>";

    foreach ($cols as $col => $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>
    
</body>
</html>