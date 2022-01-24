<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=denniskibet", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$msgSuccess = "Connected successfully";
    } catch(PDOException $e) {
      //$msgError = "Connection failed: " . $e->getMessage();
    }
?>