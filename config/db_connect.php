<?php

//connect to database using MySQLi
$conn = mysqli_connect('localhost', 'stefan', 'NTadmin12', 'pizza');

//check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>