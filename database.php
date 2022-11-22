

<?php

/*** MySQL hostname ***/
$hostname = 'localhost';
/*** MySQL username ***/
$username = 'root';
/*** MySQL password ***/
$password = '';

function testdb_connect ($hostname, $username, $password){
    $dbh = new PDO("mysql:host=$hostname;dbname=quanlysanpham", $username, $password);
    $dbh->exec("set names utf8mb4");
    return $dbh;
}

try {
    $dbh = testdb_connect ($hostname, $username, $password);
} catch(PDOException $e) {
    echo $e->getMessage();
}


?>