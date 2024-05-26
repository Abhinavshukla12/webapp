<?php
$connection = new mysqli('localhost', 'your_mysql_user', 'your_mysql_password', 'your_database_name');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";
$connection->close();