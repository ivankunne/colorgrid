<?php

require_once 'db.connect.php';

$kleurenrijtje = array();
$sql = 'SELECT * FROM color';
$sth = $db->prepare($sql);
$sth ->execute();

while($row = $sth -> fetch()){
    array_push($kleurenrijtje,$row);
}
echo json_encode($kleurenrijtje);
