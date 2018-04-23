<?php
 $dsn = 'mysql:host=sql1.njit.edu;dbname=jt398';
 $username = "jt398";
$password = "xAZbhKsEo";
 try{
   $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>
