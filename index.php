<?php

$host = 'db';
$user = 'user';
$pass = 'userpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
 echo('Error: ' . $conn->connect_error);
} else {
 echo 'DB Connected';
}

phpinfo();
