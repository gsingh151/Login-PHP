<?php

$db_host = "db";
$db_user = "root";
$db_password = "studio";
$db_name = "login";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

//Check connnection
if ($mysqli -> connect_errno){
    echo "failed to connect to MySQL: " . $db->connect_error;
    exit();
}
?>