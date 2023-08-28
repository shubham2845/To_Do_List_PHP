<?php include("connection.php"); 
$id = $_GET['id'];

$query="delete from form where id='$id'";

$data=mysqli_query($connection,$query);


exit;
if($data)
{
    echo "deleted";
}
else{
    echo "not deleted";
}

?>
