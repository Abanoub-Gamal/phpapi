<?php
require_once 'php.php';
$query="select * from users";
$result=$conn->query($query);
$out=[];
while($item = $result->fetch_assoc()){
    $out[]=$item;

}
echo json_encode($out);
