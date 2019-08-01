<?php
include 'config.php';

try
{
    $dbh = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
    $dbh->exec("set names utf8");
} catch (PDOException $e) {
    print "Error: Can't connect to database" ;
    die();
}

