<?php
$firstNum = 4;
$secondNum = 5;
$list = "<ul>";

for ($i=1;$i<=$firstNum;$i++){

$list.="<li> $i <ul>";

    for($j=1;$j<=$secondNum;$j++){

    $list .= "<li> $j </li>";

     }
     $list .= "</ul> </li>";
}

$list .="<ul>";






?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excersise 1</title>
  </head>
  <body>
    <h1> <?php echo $list; ?>  </h1>
    
  </body>
</html>