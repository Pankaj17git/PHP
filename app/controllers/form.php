<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'form';
  

  $conn = mysqli_connect($host, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo "connection failed";
    die ("Connection failure: " . $conn->connect_error);
  }else{
    echo "connected";
  }

  // $sql = "form" ;
  // if ($conn->query($sql) === true) {
  //   echo "Database with name form";
  // } else {
  //   echo " Error ". $conn->error;
  // }

  // $conn->close();
?>
<!-- try {
    $pdo = new PDO("mysql:host=localhost;dbname=form", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Sucessfull!";
  } catch (PDOException $e) {
    echo "Connection failed:". $e->getMessage();
  } -->