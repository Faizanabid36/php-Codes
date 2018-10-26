<?php 
$dbServer="localhost";
$dbName="web";
$dbUsername="root";
$dbPassword="";

$conn=mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName) or
die("Error Connecting DataBase<br>".mysqli_connect_error());