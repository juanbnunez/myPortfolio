<?php
  $host_name = 'db5013501303.hosting-data.io';
  $database = 'dbs11313073';
  $user_name = 'dbu99833';
  $password = '<Enter your password here.>';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }
?>