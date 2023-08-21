<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "authentication_app");
} catch (mysqli_sql_exception $e) {
    echo "ERROR: " . $e->getMessage();
}
