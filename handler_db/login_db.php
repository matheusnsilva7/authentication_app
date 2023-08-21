<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["psswrd"] !== "") {
    require_once("connection.php");
    $email = $_POST["email"];
    $psswrd = $_POST["psswrd"];

    try {
        $statement = $mysqli->query("SELECT * FROM users WHERE email='$email';");

        if ($statement->num_rows === 1) {
            $data = $statement->fetch_assoc();

            if (password_verify($psswrd, $data["psswrd"])) {
                session_start();

                $_SESSION["user_data"] = $data;

                header("location: ../view/dashboard.php");
            } else {
                echo "las crediciales no coinciden 2";
            }
        } else {
            echo "las crediciales no coinciden";
        };
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Not accessing from POST";
}
