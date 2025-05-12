<?php
  include('../controllers/form.php');

  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is for registration or login
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Check for user
    $stmt = $conn->prepare("SELECT name, password FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            echo "Welcome, " . htmlspecialchars($row['name']) . "!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }
    $stmt->close();
  }

?>