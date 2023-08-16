<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost", "mdabbas", "sql@234", "taskdb");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Login successful!";
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
?>

