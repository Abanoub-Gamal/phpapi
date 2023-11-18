

<?php
$username='root';
$pass='';
$dbname='database1';
$server='localhost';
$conn=mysqli_connect($server, $username, $pass, $dbname);
if($conn){
    echo "true";
}else{
    echo "false";
}
?>