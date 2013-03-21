<?php

define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'PPS_2013');
define('DB_SERVER', 'localhost');

function pps_connect() {
  $link = mysql_connect('pacificpaddlingsympo.netfirmsmysql.com', 'alan', 'elmwood');
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_select_db(pps_2013);
}

function pps_create_connection() {
  $user = "root";
  $password = "root";
  $database = "PPS_2013";
  $server = 'localhost';
  mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
  @mysql_select_db(DB_DATABASE) or die("Unable to select database");
  return TRUE;
}

function pps_insert($sql) {

  $connection = pps_create_connection();
  $result = mysql_query($sql);
  if (!$result) {
    echo("<br />Operation failed.  Please contact site administrator");
  }
  mysql_close();
}

function pps_update($sql) {

}