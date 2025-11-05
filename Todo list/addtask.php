<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['descript'];

    $conn = mysqli_connect("localhost", "root", "", "college");

    if (!$conn) {
        die("Sorry, connection error: " . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO `tasks` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // ✅ Redirect back to index.php to avoid double insert
            header("Location: index.php");
            exit();

        } else {
            echo "Data Inserted Unsuccessfully.";
        }

        mysqli_close($conn);
    }
}
?>
