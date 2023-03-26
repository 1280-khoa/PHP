<?php
$mysqli = new mysqli("localhost","root","","web_banxe");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Ket noi MySQLi Loi: " . $mysqli -> connect_error;
  exit();
}
?> 