<?php
session_start();

  $host_name = 'db5000049424.hosting-data.io';
  $database = 'dbs44287';
  $user_name = 'dbu122079';
  $password = 'Maya2000@';
  $connect = mysql_connect($host_name, $user_name, $password, $database);

  if (mysql_errno()) {
    die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p >';
  }


?>
