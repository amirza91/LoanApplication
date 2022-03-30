<?php                                   
$host = "localhost";
$database = "altamushloans";
$user = "root";
$password = "";

$DB = null;

try {
    $DB = new PDO("mysql:host=$host;dbname=$database;", $user, $password);
    // echo "connect successfully";
}
catch(PDOException $e){
    echo $e -> getMessage();
    die();

}
// Connecting to the mysql database through visual studio













?>