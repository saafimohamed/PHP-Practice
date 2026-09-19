<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 #Differences Between echo and print
echo " welcome safa ";
print "this is frist php lesson";

#Defining and Using Constants& Concatenation Operator
 define("AGE", 20);
 echo "welcome constance,your age is" .AGE;
 #Conditional Statements in PHP (if, else, and elseif)
  $Age = 10;
 if($Age>=20){
  echo "is adult";
    } else{
         echo "YOUNG";
    }
if($Age >= 20){
    echo "is adult";
}
elseif($Age>=15){
    echo "teanage";
}
else{
    echo "young";
}
#switch Statement:
 $marks= 0;
switch (true){
    case($marks>=90):
    echo ("A");
    break;
    case($marks>=70):
    echo ("B");
    break;
    case($marks>=60):
    echo ("C");
    break;
      case($marks>=50):
    echo ("D");
    break;
    default:
    echo ("Fail");
}
?>    
</body>
</html>