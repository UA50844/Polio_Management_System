<?php
// localhost


// $server = "localhost";
// $user = "root";
// $pas  = "";
// $db = "u383434115_deniss_crm";

// live server

$server = "localhost";
$user = "root";
$pass = "";
$db = "pms";

$conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
// Create connection
$sq_conn = mysqli_connect($server, $user, $pass, $db);

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      