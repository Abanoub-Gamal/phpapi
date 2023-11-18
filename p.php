<?php
require_once 'php.php';
$query="select * from users";
$result=$conn->query($query);
$out=[];
header("Content-Type: JSON");
while($item = $result->fetch_assoc()){
    $out[]=$item;

}
echo json_encode($out,  JSON_PRETTY_PRINT);
