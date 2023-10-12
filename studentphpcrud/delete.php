<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"php_crud");
$delete = $_GET['del'];


$sql = "delete from students where id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>