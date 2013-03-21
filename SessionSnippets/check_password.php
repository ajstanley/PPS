<?php
$cwd = getcwd();
require_once 'Database/database_utilities.php';
$email = $_POST['email'];
$password = $_POST['password'];
pps_create_connection();
$sql = "SELECT * FROM attendees
        where email = '$email'
        and password = '$password'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
print_r($row);
?>
