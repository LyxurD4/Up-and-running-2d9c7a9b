<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
require_once 'dbconfig.php';
 
$dsn= "mysql:host=$host;dbname=$db";
 
try{
 // create a PDO connection with the configuration data
 $conn = new PDO($dsn, $username, $password);
 
 // display a message if connected to database successfully
 if($conn){
 echo "Connected to the <strong>$db</strong> database successfully!";
        }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}
?>
</body>
</html>