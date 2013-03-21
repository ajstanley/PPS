<?php
$tables = array(
  'CREATE TABLE `attendees` ('
  . ' `paddler_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, '
  . ' `name` VARCHAR(32) NOT NULL, '
  . ' `email` VARCHAR(32) NOT NULL, '
  . ' `password` VARCHAR(32) NOT NULL'
  . ' )'
  . ' ENGINE = myisam;',
  'CREATE TABLE `sessions` ('
  . ' `session_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, '
  . ' `session_name` VARCHAR(32) NOT NULL, '
  . ' `session_time` VARCHAR(32) NOT NULL'
  . ' )'
  . ' ENGINE = myisam;',
  'CREATE TABLE `registrations` ('
  . ' `paddler_id` INT NOT NULL, '
  . ' `session_id` INT NOT NULL'
  . ' )'
  . ' ENGINE = myisam;'
);

function populate_db() {
  $user = "root";
  $password = "root";
  $database = "PPS_2013";
  mysql_connect('localhost', $user, $password);
  @mysql_select_db($database) or die("Unable to select database");
  echo 'Connected successfully';
//$query = "CREATE TABLE contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
  foreach ($tables as $table) {
    mysql_query($table);
  }
  mysql_close();
}

?>
