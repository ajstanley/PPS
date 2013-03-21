<?php
require_once('database_utilities.php');
$insert_sql = "INSERT INTO attendees
	            (name, email, password)
	            VALUES
	            ('Test Subject',
	            'tester@pacificpaddlingsymposium.om',
              'change_me')";
pps_insert($insert_sql);

?>
