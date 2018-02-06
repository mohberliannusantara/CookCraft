<?php
  error_reporting(0);
  $dbname = 'cooking';
  $host = 'localhost';
  $username = 'root';
  $password = '';

  $_mysqli = new mysqli($host, $username, $password, $dbname);
  session_start();

?>
