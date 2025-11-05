<?php
// delete.php

// 1️⃣ Check if ID is passed in URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 2️⃣ Connect to the database
    $conn = mysqli_connect("127.0.0.1", "root", "", "college");
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // 3️⃣ Delete the record by ID
    $sql = "DELETE FROM tasks WHERE `tasks`.`sr.` = $id";
    if (mysqli_query($conn, $sql)) {
        // 4️⃣ Redirect to index page after successful delete
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request — No ID provided.";
}
?>
