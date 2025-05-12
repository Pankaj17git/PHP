<?php
require('../controllers/form.php');
 
if ($_SERVER('REQUESR_METHOD' == 'POST')) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO login (name, email, password) VALUES(?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $email, $password);

  if ($stmt->execute()) {
    echo "Data inserted successfully!";
  } else {
    echo "Error: ".$stmt->error;
  }

  $stmt->close();
  $conn->close();
}

?>