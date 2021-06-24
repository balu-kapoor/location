<?php

define('DB_HOST', 'sql5.freesqldatabase.com');
define('DB_PORT', '3306');
define('DB_DATABASE', 'sql5421172');
define('DB_USERNAME', 'sql5421172');
define('DB_PASSWORD', 'ATbZnzKCHc');

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo 'connected';