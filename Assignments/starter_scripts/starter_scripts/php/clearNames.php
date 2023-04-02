<?php
require_once "../classes/PdoMethods.php";
$pdo = new PdoMethods();
$sql = "DELETE FROM names";
$result = $pdo->selectNotBinded($sql);

if($result == 'error'){
    $response = (object)[
        'masterstatus'=>'error',
        'msg'=>"There was an error deleting the names"
        ];
}
else {
        $response = (object)[
            'masterstatus'=>'success',
            'msg'=>"All names deleted"
            ];
}

echo(json_encode($response));

?>