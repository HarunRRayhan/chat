<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

$db_name    = 'chat';
$feedback = [];
if($connection = mysql_connect($db_host, $db_user, $db_password)){
    $feedback[] = 'Connected to Database Server.... <br />';
    if($database = mysql_select_db($db_name, $connection)){
        $feedback[] = 'Database has been selected <br />';
    }  else {
        $feedback[] = 'Database not found! <br />';
    }
}  else {
    $feedback[] = 'Unable to connect';
}

