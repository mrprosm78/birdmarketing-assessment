<?php

/**
 * The template for displaying the footer 
 */

 /**
  * Please use below sql to create table.
  * 
CREATE TABLE `popup_table` (
  `id` int(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
     `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  */
/**
 * 
 * Please add database details to connect your db
 */
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "test-db";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>