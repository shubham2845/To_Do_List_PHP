<?php
error_reporting(0);
$address="127.0.0.1:3307";
$sqlname="root";
$pass="";
$dbname="todo";

$connection=mysqli_connect($address,$sqlname,$pass,$dbname);

if($connection)
{
    // echo "succc";
}
else
{
    echo "nooo";
}

?>

