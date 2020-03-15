<?php

$dbname='bombaoim_blp';
$dbhost='localhost';
$dbpass='asdf1234';
$dbuser='bombaoim_sakec';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    echo "Connection error".die(mysqli_connection_error());
}

?>