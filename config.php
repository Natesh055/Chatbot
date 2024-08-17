<?php
$server ="localhost";
$username="root";
$database="cb";
$password="";


$conn =  mysqli_connect($server, $username, $password, $database);
if(!$conn)
{
    die("<script>alert('Connection Failed.')</script>");

}
else{
    echo "<h1>Hello</h1>";
}





?>