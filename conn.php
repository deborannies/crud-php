<?php
define('DB_SERVER', '172.17.0.3');
define('DB_USERNAME', 'cruduser');
define('DB_PASSWORD', 'crud321');
define('DB_NAME', 'student');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}



