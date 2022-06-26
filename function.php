<?php
require_once 'config.php';
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];

$insert = "insert into register(username, password, email) values ('$Username','$Password','$Email')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered sucessfully';
}
else
{
    echo 'not success';
}
 

?>