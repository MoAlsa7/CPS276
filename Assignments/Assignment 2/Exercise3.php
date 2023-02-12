<?php
$i =1;
$j =1;
$rows = 15;
$colmn = 5;

$table = "<table border= '1'>";


while ($i <=$rows) {
    $table .= "<tr>";
    $j =1;
    while($j<=$colmn){
        $table .= "<td> Row $i cell $j </td>";
        $j++;
    }
    $i++;
    $table .="</tr>";

}
$table .= "</table>";


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excersise 3</title>
  </head>
  <body>
    <h1> <?php echo $table; ?>  </h1>
    
  </body>
</html>