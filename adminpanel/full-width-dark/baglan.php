<?php 
/* Bu alan database ile ilgili bilgileri içermektedir.*/
$servername = "localhost";
$dbname = "e-commerce";
$username = "root";
$password = "dbpw";
try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username,$password);
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>