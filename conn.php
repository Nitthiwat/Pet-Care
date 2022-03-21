<?php
    $conn = mysqli_connect("localhost", "root", "", "web/db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
}
