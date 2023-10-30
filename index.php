<?php

$teamStringJson = file_get_contents('team.json');
$teamList =json_decode($teamStringJson,true);
header('Content-Type: application/json');

echo json_encode($teamList);

?>
