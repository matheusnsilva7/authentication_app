<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["psswrd"] !== "") {
    require_once("connection.php");
    $email = $_POST["email"];
    $psswrd = $_POST["psswrd"];

    try {
        $hask = password_hash($psswrd, PASSWORD_DEFAULT);

        $result = $mysqli->query("INSERT INTO users(email,psswrd) VALUES ('$email', '$hask');");

        if ($result) {
            $stmt = $mysqli->query("SELECT * FROM users Where email='$email'");
            if ($stmt->num_rows === 1) {
                $data = $stmt->fetch_assoc();
                session_start();
                $_SESSION["user_data"] = $data;
                header("location: ../view/dashboard.php");
            }
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    "Not accessing from POST";
}
