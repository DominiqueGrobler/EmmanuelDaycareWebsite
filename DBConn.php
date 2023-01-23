<?php

$servername = "localhost";
$username = "id19892584_emmanuel";
$password = "@Dvtech1234!";
$dbname = "id19892584_emanueldaycare";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
  die("ERROR: Couldn't connect. " . $conn->connect_error);
}

?>
