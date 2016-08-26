<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

$db_name    = 'chat';

if($connection = mysql_connect($db_host, $db_user, $db_password)){
    echo 'Connected to Database Server.... <br />';
    if($database = mysql_select_db($db_name, $connection)){
        echo 'Database has been selected <br />';
    }  else {
        echo 'Database not found! <br />';
    }
}  else {
    echo 'Unable to connect';
}

